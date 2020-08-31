@extends('admin/layouts/app')

@section('page-title', 'Events')

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
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col mx-auto">
            <h2><i class="fas fa-user"></i> Users</h2>
            <hr />
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#new-user">Add new User</button>
            <table class="table small table-bordered table-hover" id="users-table">
                <thead class="bg-primary text-white">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>Created By</th>
                    <th>Updated By</th>
                    <th><button id="delete-toggle" class="btn btn-block btn-danger" data-toggle="modal"
                                data-target="#confirm-modal" disabled><i class="fas fa-times"></i></button></th>
                </thead>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="new-user">
    <div class="modal-dialog" role="document">
        <form action="" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" required>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-spin fa-spinner mr-1 d-none"></i>
                            Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="update-user">
    <div class="modal-dialog" role="document">
        <form action="" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" required>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-spin fa-spinner mr-1 d-none"></i>
                            Update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </form>
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
    $newModal = $('#new-user');
    $updateModal = $('#update-user');
    $confirmModal = $('#confirm-modal');
    $updateForm = $updateModal.find('form');
    $usersTable = $('#users-table');
    $deleteBtn = $('#delete-toggle');


    $usersTable.on('click', 'tr td:nth-child(6)', function(e) {
        e.stopPropagation();
        $checkbox = $(this).find('[type="checkbox"]');
        $checkbox.prop('checked', !$checkbox.prop('checked'));
        countChecked();
    });
    $usersTable.on('click', '[type="checkbox"]', function(e) {
        e.stopPropagation();
        countChecked();
    })

    $usersTable.DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: {
        url: "/admin/user/get",
        method: 'POST',
        complete: function(res) {
            console.log(res);
        },
        error: function(res) {
            console.log(res);
        }
      },
      columns: [
          { data: 'name' },
		  { data: 'email' },
            {
                data: 'created_at',
                render: function(data, type, row) {
                const d = new Date(row["created_at"]);
                const ye = new Intl.DateTimeFormat('en-us', { year: 'numeric' }).format(d);
                const mo = new Intl.DateTimeFormat('en-us', { month: 'long' }).format(d);
                const da = new Intl.DateTimeFormat('en-us', { day: '2-digit' }).format(d);
                const time = new Intl.DateTimeFormat('en-us', { hour: '2-digit', minute: '2-digit' }).format(d);
                const dateFormat = `${mo} ${da}, ${ye} ${time}`;
                return dateFormat;
                }
            },
            {
                data: 'created_by',
                defaultContent: "",
                render: function(data, type, row) {
                    return row['created_by'] ? row['created_by'].name : 'empty' ;
                }
            },
            {
                data: 'updated_by',
                defaultContent: "",
                render: function(data, type, row) {
                    return row['updated_by'] ? row['updated_by'].name : 'empty';
                }
             },
          {
              data: 'Action',
              render: function(data, type, row) {
                return "<input type='checkbox' name='deletes' value='" + row.id + "'>";
              }
          }
      ],
      columnDefs: [{
          width: '0px',
          targets: [1,5],
          orderable: false

      }],
      createdRow: function(row, data, dataIndex, cells) {
        row.setAttribute('data-id', data.id);
      }
    })

    $newModal.find('form').submit(function(e) {
      e.preventDefault();
      vals = $(this).serializeArray();
      $loading = $(this).find('.fa-spin');
      $.ajax({
        url: '/admin/user/store',
        method: 'POST',
        data:vals,
        beforeSend: function() {
          $loading.removeClass('d-none');
        },
        success: function() {
          $loading.addClass('d-none');
          $newModal.modal('hide');
          showMessage('New User Added.');
          $usersTable.DataTable().ajax.reload();
        },
        error: function() {
          $loading.addClass('d-none');
        }
      });
    });

    $usersTable.on('click', 'tbody tr', function() {
      if (!$(this).find('td:eq(0)').hasClass('dataTables_empty')) {
        id = $(this).attr('data-id');
        name = $(this).find('td:eq(0)').text();
		email = $(this).find('td:eq(1)').text();

		$updateForm.find('[name="name"]').val(name);
		$updateForm.find('[name="email"]').val(email);
        $updateForm.find('[name="id"]').val(id);

        $updateModal.modal('show');
      }
    });

    $updateForm.submit( function(e) {
      e.preventDefault();
      vals = $(this).serializeArray();
      $loading = $(this).find('.fa-spin');
      $.ajax({
        url: '/admin/user/update',
        method: 'PUT',
        data: vals,
        beforeSend: function() {
          $loading.removeClass('d-none')
        },
        success: function(res) {
          $loading.addClass('d-none')
          $updateModal.modal('hide');
          showMessage('User Updated.');
          $usersTable.DataTable().ajax.reload();
        },
        error: function() {
          $loading.addClass('d-none')
        }
      });
    });

    $('#delete').click(function() {
        $elem = $(this);
        $checkboxes = $usersTable.find('[type="checkbox"]');
        checks = [];
        for (i = 0; i < $checkboxes.length; i++) {
            if ($checkboxes.eq(i).is(':checked')) {
                checks.push($checkboxes.eq(i).val());
            }
        }
        $.ajax({
            url: '/admin/user/delete',
            method: 'DELETE',
            data: { ids: checks },
            beforeSend: function() {
                $elem.find('.fa-spinner').removeClass('d-none');
            },
            error: function() {
                $elem.find('.fa-spinner').addClass('d-none');
            },
            success: function(res) {
                $elem.find('.fa-spinner').addClass('d-none');
                $confirmModal.modal('hide');
                $usersTable.DataTable().ajax.reload();
                showMessage('User(s) successfully deleted.');
            }
        })
    });
  });
</script>
@endsection
