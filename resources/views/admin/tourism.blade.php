@extends('admin/layouts/app')

@section('page-title', 'Tourism and Agriculture Management')

@section('styles')
<link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
<style>
    td {
        cursor: pointer;
        word-break: keep-all;
    }

    td input[type="checkbox"] {
        width: 100% !important;
    }

    #spot-table{
        width: 100%;
        table-layout: fixed;
    }

    #spot-table td {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        -o-text-overflow: ellipsis;
        }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col mx-auto">
            <h2><i class="fas fa-map-marker-alt"></i> Tourist Spots</h2>
            <hr />
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#save-modal">Add new tourist spot</button>
            <table class="table small table-bordered table-hover" id="spot-table">
                <thead class="bg-primary text-white">
                    <th>Name</th>
                    <th>Location</th>
                    <th><button id="delete-toggle" class="btn btn-block btn-danger" data-toggle="modal"
                                data-target="#confirm-modal" disabled><i class="fas fa-times"></i></button></th>
                </thead>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="save-modal">
    <div class="modal-dialog" role="document">
        
            <div class="modal-content">
                <div id="modal-loader" style="width: 100%; height: 100%; position: absolute; background-color: rgba(255,255,255, 0.6); z-index:9">
                    <h1 class="text-center mt-5"><i class="fas fa-spinner fa-spin"></i></h1>
                </div>
                <div class="modal-header">
                    <h5 class="modal-title"><span id="modal-type"></span> Tourist Spot</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('tourism.store') }}" method="POST" enctype="multipart/form-data" id="save-form">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="spot_name">Name</label>
                            <input type="text" class="form-control" name="spot_name" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label for="spot_location">Location</label>
                            <input type="text" class="form-control" name="spot_location" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label for="spot_description">Description</label>
                            <textarea name="spot_description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="spot_geolocation">Geolocation</label>
                            <textarea class="form-control" id="geolocation" cols="30" rows="10"></textarea>
                            <input type="hidden" name="spot_geolocation">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label for="input_images">Images</label>
                            <input type="file" multiple name="input_images" class="form-control" accept=".png,.jpg,.jpeg"/>
                            <div class="invalid-feedback"></div>
                            <ul class="list-group mt-3 small" id="uploaded-images">
                                
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-spin fa-spinner mr-1 d-none"></i>
                            Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="confirm-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                Are you sure?
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="delete">
                    <i class="fas fa-spin fa-spinner mr-1 d-none"></i>
                    Yes
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/datatables.min.js')}}"></script>
<script>
    $(document).ready(function() {
    $saveModal = $('#save-modal');
    $confirmModal = $('#confirm-modal');
    $spotTable = $('#spot-table');
    $deleteBtn = $('#delete-toggle');
    $saveForm = $('#save-form');

    $('[name="input_images"]').change(function() {
      var file = $(this);
      for (i = 0; i < file[0].files.length; i++) {

        let reader = new FileReader();
        let fileName = file[0].files[i].name;

        reader.addEventListener("load", function(e) {
          base64 = e.currentTarget.result;
          var value = {
              'base64': base64,
              'fileName': fileName
          };
          html = `
            <li class="list-group-item" data-filename="${fileName}">
                <input type="hidden" name="spot_images[]" value=`+JSON.stringify(value)+`>
                <div class="float-right"><i class="fas fa-times mr-2 delete-image"></i></div>
                <div class="float-left"><img src="${base64}" alt="img" style="width: 100%"></img>${fileName}</div>
            </li>
          `;
          $('#uploaded-images').append(html);
        });
        reader.readAsDataURL(file[0].files[i]);
      }
  });

    // Delete Document
$('#uploaded-images').on('click', '.delete-image', function() {
    $(this).parent().parent().remove();
  });

  // Delete Document DB
  $('#uploaded-images').on('click', '.delete-images-db', function() {
      console.log('deletes');
    $elem = $(this).parent().parent();
    $loading = $elem.find('.loading');
    if (confirm('Are you sure?')) {
      id = $(this).attr('data-id');
      $.ajax({
        url: '{{ route("tourism.delete_image") }}',
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
  });

    $spotTable.on('click', 'tr td:nth-child(6)', function(e) {
        e.stopPropagation();
        $checkbox = $(this).find('[type="checkbox"]');
        $checkbox.prop('checked', !$checkbox.prop('checked'));
        countChecked();
    });
    $spotTable.on('click', '[type="checkbox"]', function(e) {
        e.stopPropagation();
        countChecked();
    });

    $spotTable.DataTable({
      responsive: true,
      processing: true,
      serverSide: false,
      ajax: {
        url: "{{ route('tourism.get') }}",
        method: 'POST',
        complete: function(res) {
            console.log(res);
        },
        error: function(res) {
            console.log(res);
        }
      },
      columns: [
          { data: 'spot_name' },
          { data: 'spot_location' },
          {
              data: 'Action',
              render: function(data, type, row) {
                return "<input type='checkbox' name='deletes' value='" + row.id + "'>";
              }
          }
      ],
      createdRow: function(row, data, dataIndex, cells) {
        row.setAttribute('data-id', data.id);
      }
    })

    $saveModal.on('hidden.bs.modal', function () {
        $('#uploaded-images').html('');
        $(this).find('form').find('[name="id"]').removeAttr('value');
        $(this).find('form').trigger('reset');
    })

    $spotTable.on('click', 'tbody tr', function() {
      if (!$(this).find('td:eq(0)').hasClass('dataTables_empty')) {
        id = $(this).attr('data-id');
        $saveModal.modal('show');

        $.ajax({
            url: '{{ route("tourism.get_spot") }}',
            method: 'POST',
            data: {
                id: id
            },
            beforeSend: function(){
                $('#modal-loader').show();
            },
        }).done(function(response){
            response.tourism_images.forEach(element => {
                html = `
                    <li class="list-group-item" data-filename="${element.file_name}">
                        <div class="float-right"><i class="fas fa-times mr-2 delete-images-db" data-id="`+element.id+`"></i></div>
                        <div class="float-left"><img src="/storage/`+ response.directory +`/`+ element.file_name +`" alt="img" style="width: 100%"></img>${element.file_name}</div>
                    </li>
                `;
                $('#uploaded-images').append(html);
            });
            $saveForm.find("[name='input_images']");
            $.each(response, function( index, value ) {
                if(index == "spot_geolocation"){
                    $('#geolocation').val('<iframe src="'+value+'" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>');
                }
                $saveForm.find("[name='"+index+"']").val(value);
            });

            
        }).fail(function(error){

        }).always(function(){
            $('#modal-loader').hide();
        });

      }
    });

    $saveForm.submit(function(e){
        e.preventDefault();
        var geo_url = $($("#geolocation").val()).attr('src');
        $(this).find('[name="spot_geolocation"]').val(geo_url);
        $('#modal-loader').show();
        $saveForm[0].submit();
    });

    $('#delete').click(function() {
        $elem = $(this);
        $checkboxes = $spotTable.find('[type="checkbox"]');
        checks = [];
        for (i = 0; i < $checkboxes.length; i++) {
            if ($checkboxes.eq(i).is(':checked')) {
                checks.push($checkboxes.eq(i).val());
            }
        }
        $.ajax({
            url: '{{ route("tourism.delete_spot") }}',
            method: 'DELETE',
            data: { ids: checks },
            beforeSend: function() {
                $elem.find('.fa-spinner').removeClass('d-none');
            },
            error: function(err) {
                console.log(err);
                $elem.find('.fa-spinner').addClass('d-none');
            },
            success: function(res) {
                
                $elem.find('.fa-spinner').addClass('d-none');
                $confirmModal.modal('hide');
                $spotTable.DataTable().ajax.reload();
                showMessage('Tourist Spot successfully deleted.');
            }
        })
    });
  });
</script>
@endsection
