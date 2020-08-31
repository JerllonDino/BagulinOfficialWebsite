@extends('admin/layouts/app')

@section('content')
<style>
  .delete-document:hover {
    color: #3490dc;
    cursor: pointer;
  }
  .menu {
    position: absolute;
    right: 0;
    top: 0;
    padding: 10px;
    background-color: transparent;
    color: #6c757d;
    border-color: transparent !important;
  }

  .menu::after {
    display: none;
  }

  #docs .list-group-item:hover {
    background-color: #f1f1f1;
  }

  .document .loading {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: white;
  }
  .document .loading .fa-spinner {
    position: absolute;
    top: 45%;
    left: 45%;
    transform: translate(-50%, -50%)
  }

  .{{strtolower(str_replace(' ', '_', $folder))}} {
    color: #fff;
    background-color: #702323;
  }

  #folders .nav-link{
    border: 1px solid #dee2e6;
    border-radius: 0 !important;
    margin-bottom: 5px;
  }
  #folders .delete-category {
    opacity: 0;
  }
  #folders .nav-link:hover .delete-category{
    opacity: 1;
  }
</style>

<div class="container my-5">
  <div class="row">

    {{-- SIDE MENUS --}}
    <div class="col-3">
      <nav class="nav flex-column nav-pills" id="folders">
        <a class="nav-link all" href="/admin/documents">All</a>
        @foreach ($categories as $category)
        <a class="nav-link {{strtolower(str_replace(' ', '_', $category->category))}}" href="/admin/documents/{{$category->id}}">
          <span class="float-left">{{$category->category}}</span>
          <span class="float-right"><i class="fas fa-times delete-category" data-id="{{$category->id}}"></i></span>
        </a>
        @endforeach
      </nav>
      <form class="bg-secondary p-2 my-3 border" action="" id="new-category-form">
        <label>Add new category</label>
        <div class="input-group">
          <input type="text" class="form-control" name="new_category">
          <div class="input-group-append">
            <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-spinner fa-spin mr-1" style="display:none;"></i> Add</button>
          </div>
          <div class="invalid-feedback"></div>
        </div>
      </form>
    </div>

    {{-- FILES --}}
    <div class="col-9">
      <h1 class="mb-3">{{$folder}}</h1>
      <hr/>
      <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#new-file-modal"><i class="fas fa-upload"></i> Upload Documents</button>
      <div class="row" id="docs">
        @foreach ($documents as $document)
        <div class="col-4 border text-center p-4 document bg-light">
          <div class="loading" style="display: none;">
            <i class="fas fa-spin fa-spinner h3"></i>
          </div>

          <button class="btn btn-secondary dropdown-toggle menu" type="button" id="dropdown-{{$document->id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v"></i>
          </button>

          <div class="dropdown-menu" aria-labelledby="dropdown-{{$document->id}}">
            <button class="delete-document-db dropdown-item" data-id="{{$document->id}}">Delete</button>
            <button class="dropdown-item rename" data-id="{{$document->id}}">Rename</button>
          </div>


          <p class="h2 text-primary"><i class="fas fa-file-pdf"></i><p>
          <p class="small font-weight-bold"><a class="file-name" href="/storage/{{$document->category_id}}/{{$document->file_name}}" target="_blank">{{$document->file_name}}</a></p>
        </div>
        @endforeach
      </div>
      <div class="my-5">
        {{$documents->links()}}
      </div>
    </div>

  </div>
</div>


{{-- UPLOAD FILES MODAL --}}
<div class="modal" tabindex="-1" role="dialog" id="new-file-modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Upload Documents</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" id="new-form">
          <div class="modal-body">
            <div class="form-group">
                <input type="file" name="documents" multiple="true">
                <ul class="list-group mt-3 small" id="uploaded-documents">

                </ul>
            </div>

            <div class="form-group">
              <label for="">Category</label>
              <select name="category" class="form-control">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-spin fa-spinner" style="display:none;"></i> Upload</button>
          </div>
        </form>
      </div>
    </div>
</div>


{{-- RENAME MODAL --}}
<div class="modal" tabindex="-1" role="dialog" id="rename">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Rename</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="rename-form">
        <div class="modal-body">
          <label for="">New File Name : </label>
          <input type="text" class="form-control" placeholder="New File Name" name="rename_to">
          <input type="hidden" name="id">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="fas fa-spin fa-spinner" style="display:none;"></i> Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script>
  // File upload
  $('[name="documents"]').change(function() {
      var file = $(this);
      $form = $(this).parent().parent().parent().parent().parent();
      for (i = 0; i < file[0].files.length; i++) {

        let reader = new FileReader();
        let fileName = file[0].files[i].name;

        reader.addEventListener("load", function(e) {
          base64 = e.currentTarget.result;
          html = `
            <li class="list-group-item" data-base64="${base64}" data-filename="${fileName}">
                <div class="float-left"><i class="fas fa-file-pdf mr-2"></i>${fileName}</div>
                <div class="float-right"><i class="fas fa-times mr-2 delete-document"></i></div>
            </li>
          `;
          $('#uploaded-documents').append(html);
        });
        reader.readAsDataURL(file[0].files[i]);
      }
  });

  // Delete Document
  $('#uploaded-documents').on('click', '.delete-document', function() {
    console.log('yes');
    $(this).parent().parent().remove();
  })

  // Delete Document DB
  $('.delete-document-db').click(function() {
    $elem = $(this).parent().parent();
    $loading = $elem.find('.loading');
    if (confirm('Are you sure?')) {
      id = $(this).attr('data-id');
      $.ajax({
        url: '/admin/delete-document',
        method: 'DELETE',
        data: {id},
        beforeSend: function() {
          $loading.show();
        },
        success: function() {
          $loading.hide();
          $elem.remove();
        }
      });
    }
  })

  // On submit
  $('#new-form').submit(function(e) {
    e.preventDefault();
    vals = $(this).serializeArray();
    $submitBtn = $(this).find('[type="submit"]');
    $submitBtnSpinner = $submitBtn.find('.fa-spin');

    let uploadedDocuments = [];
    let $documents = $('#uploaded-documents .list-group-item');
    for (i = 0; i < $documents.length; i++) {
      $document = $documents.eq(i);
      base64 = $document.attr('data-base64');
      fileName = $document.attr('data-filename');

      uploadedDocuments.push({
        base64,
        fileName
      });
    }

    vals.push({name: 'uploads', value: JSON.stringify(uploadedDocuments)})
    $.ajax({
      url: '/admin/upload-documents',
      method: 'POST',
      data:vals,
      beforeSend: function() {
        $submitBtn.attr('disabled', '');
        $submitBtnSpinner.show();
      },
      success: function(res) {
        $submitBtn.removeClass('btn-primary').addClass('btn-success').html('<i class="fas fa-check-circle"></i>Files uploaded successfully. Refreshing page...');
        $submitBtnSpinner.hide();
        setTimeout(function() {
          location.reload();
        },1000);
      },
      error: function(res) {
        console.log(res);
      }
    })
  });

  // Rename
  $('.rename').on('click', function() {
    id = $(this).attr('data-id');
    $parent = $(this).parent().parent();
    $renameForm = $('#rename-form');

    file_name = $parent.find('.file-name').text();
    file_name = file_name.split('_')[1].split('.')[0];

    $renameForm.find('[name="id"]').val(id);
    $renameForm.find('[name="rename_to"]').val(file_name);

    $('#rename').modal('show');
  })

  $('#rename-form').on('submit', function(e) {
    e.preventDefault();
    var vals = $(this).serializeArray();

    $submitBtn = $(this).find('[type="submit"]');
    $submitBtnSpinner = $submitBtn.find('.fa-spin');

    $.ajax({
      url: '/admin/rename-document',
      data: vals,
      method: 'PUT',
      beforeSend: function() {
        $submitBtn.attr('disabled', '');
        $submitBtnSpinner.show();
      },
      success: function() {
        $submitBtnSpinner.hide();
        $submitBtn.removeClass('btn-primary').addClass('btn-success').html('<i class="fas fa-check-circle"></i>File name changed. Refreshing page...');
        setTimeout(function() {
          location.reload();
        },1000);
      },
      error: function(res) {
        console.log(res);
      }
    })
  });

  // New Category
  $('#new-category-form').on('submit', function(e) {
    e.preventDefault();
    $elem = $(this);
    $submitBtn = $(this).find('[type="submit"]');
    $submitBtnSpinner = $submitBtn.find('.fa-spin');
    var vals = $(this).serializeArray();

    $.ajax({
      url: '/admin/new-document-category',
      method: 'POST',
      data: vals,
      beforeSend: function() {
        $submitBtn.attr('disabled', '');
        $submitBtnSpinner.show();
      },
      success:function(res) {
        $submitBtn.removeAttr('disabled');
        $submitBtnSpinner.hide();
        $elem.trigger('reset');

        console.log(res.link);
        location.href = "/admin/documents/" + res.link;
      },
      error: function() {
        $submitBtn.removeAttr('disabled');
        $submitBtnSpinner.hide();
      }
    });
  })

  // Delete Category
  $('.delete-category').click(function(e) {
    e.preventDefault();
    e.stopPropagation();
    if (confirm('Are you sure?All files from this folder will be deleted.')) {
      id = $(this).attr('data-id');
      $.ajax({
        url: '/admin/delete-document-category',
        method: 'DELETE',
        data: {'category_id': id},
        beforeSend: function() {

        },
        success: function() {
          location.reload();
        }
      });
    }
  })
</script>
@endsection