@extends('admin/layouts/app')

@section('content')
<style>
  .delete-document:hover {
    color: #3490dc;
    cursor: pointer;
  }
  .delete-document-db {
    position: absolute;
    right: 0;
    top: 0;
    padding: 10px;
    opacity: 0;
  }

  .document:hover .delete-document-db {
    opacity: 1;
  }

  #docs .list-group-item:hover {
    background-color: #f1f1f1;
  }
</style>

<div class="container my-5">
  <div class="row">
    <div class="col-4">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link active" href="#">All</a>
        @foreach ($categories as $category)
        <a class="nav-link" href="#">{{$category->category}}</a>
        @endforeach
      </nav>
    </div>
    <div class="col-8">
      <h1 class="mb-3">{{$folder}}</h1>
      <div class="row" id="docs">
        @foreach ($documents as $document)
        <div class="col-4 border text-center p-4 document">
          <button class="btn delete-document-db" data-id="{{$document->id}}"><i class="fas fa-times"></i></button>
          <p class="h2 text-secondary"><i class="fas fa-file-pdf"></i><p>
          <p class="small font-weight-bold"><a href="/storage/{{$document->category_id}}/{{$document->file_name}}" target="_blank">{{$document->file_name}}</a></p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="new-file-modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Upload Documents</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="new-form">
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
            <button type="submit" class="btn btn-primary">Upload</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
  $(document).ready(function () {
      $('#new-file-modal').modal('show');
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        complete: function( res ) {
            $('.is-invalid').removeClass('is-invalid');
            console.log(res);
            switch( res.status ) {
                //validation error
                case 422:
                    errors = res.responseJSON.errors;
                    for(i in errors) {
                        $input = $('[name="' + i + '"]');
                        $input.parent().find('.invalid-feedback').text(errors[i]);
                        $input.addClass('is-invalid');
                    }
                    $('html,body').animate({'scrollTop':0}, 'slow');
                    break;
                case 500:
                    break;
            }
        }
      });


  // File upload
  $('[name="documents"]').change(function() {
      var file = $(this);
      $form = $(this).parent().parent().parent().parent().parent();
      for (i = 0; i < file[0].files.length; i++) {

        let reader = new FileReader();
        let fileName = file[0].files[i].name;

        reader.addEventListener("load", function(e) {
          base64 = e.currentTarget.result;
          $('#uploaded-documents').append(`
            <li class="list-group-item" data-base64="${base64}" data-filename="${fileName}">
                <div class="float-left"><i class="fas fa-file-pdf mr-2"></i>${fileName}</div>
                <div class="float-right"><i class="fas fa-times mr-2 delete-document"></i></div>
            </li>
          `);
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
    if (confirm('Are you sure?')) {
      id = $(this).attr('data-id');
      $.ajax({
        url: '/admin/delete-document',
        method: 'DELETE',
        data: {id},
        success: function() {
          console.log('wew');
        }
      });
    }
  })

  // On submit
  $('#new-form').submit(function(e) {
    e.preventDefault();
    vals = $(this).serializeArray();

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
      success: function(res) {
        console.log(res);
      },
      error: function(res) {
        console.log(res);
      }
    })
  });

})
</script>
@endsection