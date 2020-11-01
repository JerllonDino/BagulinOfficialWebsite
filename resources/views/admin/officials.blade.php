@extends('admin/layouts/app')

@section('styles')
<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
<style>
    .col-12 img,
    .col-12 h1 {
        height: 150px !important;
    }

    .col-12 h1 {
        font-size: 8rem;
    }

    .card:hover {
        background: #702323;
        color: #fff;
        cursor: pointer;

    }

    .card:hover .card-body img, .card:hover .card-body h1 {
        transform: scale(1.11);
		transition-duration: 0.3s;
    }

    .card .card-body{
        line-height: 10px;
    }

    img.img-thumbnail{
        width: 150px !important;
        height: 150px !important;
    }

    img.multiple{
        width: 100px !important;
        height: 100px !important;
    }
</style>
@endsection

@section('content')
<div class="container">
    <h1><i class="fas fa-users"></i> Officials</h1>
    <h4 class="text-center">Municipal Officers</h4>
    <div class="row justify-content-center mb-5">
        <div class="col col-sm-12 col-md-6 col-lg-4 col-12 text-center mx-auto mt-3">
            <div class="card indi-officials" data-position="mayor" data-id="{{ $officials[0] ? $officials[0]->id : '' }}">
                <div class="card-body">
                    @if ($officials[0])
                        <img src="{{ $officials[0]->welcome_image ? asset('/public/storage/officials/mayor/'.$officials[0]->welcome_image) : asset('img/official.png') }}"
                            class="rounded-circle img-thumbnail " alt="">
                    @else
                        <img src="{{ asset('img/official.png') }}" class="rounded-circle img-thumbnail" alt="">
                    @endif
                    <h5 class="mt-4">Mayor</h5>
                </div>
            </div>
        </div>
        <div class="col col-sm-12 col-md-6 col-lg-4 col-12 text-center mx-auto mt-3">
            <div class="card indi-officials" data-position="vicemayor" data-id="{{ $officials[1] ? $officials[1]->id : '' }}">
                <div class="card-body">
                    @if ($officials[1])
                        <img src="{{ $officials[1]->welcome_image ? asset('/public/storage/officials/vicemayor/'.$officials[1]->welcome_image) : asset('img/official.png') }}" class="rounded-circle img-thumbnail" alt="">
                    @else
                        <img src="{{ asset('img/official.png') }}" class="rounded-circle img-thumbnail" alt="">
                    @endif
                    <h5 class="mt-4">Vice Mayor</h5>
                </div>
            </div>
        </div>
        <div class="col col-sm-12 col-md-6 col-lg-4 col-12 text-center mx-auto mt-3">
            <div class="card multi-officials" data-position="councilor">
                <div class="card-body">
                    <h1><i class="fas fa-users"></i></h1>
                    <h5 class="mt-4">Councilors</h5>
                </div>
            </div>
        </div>
    </div>
    <h4 class="text-center">Barangay Officers</h4>
    <div class="row justify-content-center my-5">
        <div class="col col-sm-12 col-md-6 col-lg-4 col-12 text-center mx-auto">
            <div class="card multi-officials" data-position="chairman">
                <div class="card-body">
                    <h1><i class="fas fa-users"></i></h1>
                    <br>
                    <br>
                    <h5 class="mt-3">Chairmans</h5>
                </div>
            </div>
        </div>
        <div class="col col-sm-12 col-md-6 col-lg-4 col-12 text-center mx-auto">
            <div class="card multi-officials" data-position="skchairman">
                <div class="card-body">
                    <h1><i class="fas fa-users"></i></h1>
                    <br>
                    <br>
                    <h5 class="mt-3">SK Chairmans</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalIndi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="d-none text-center" id="disable-modal" style="z-index: 9; position:absolute; width:100%; height: 100%;background: rgba(255,255,255,0.5)"> <h3 class="fas fa-spinner fa-spin mt-5"></h3> </div>
            <div class="modal-header p-2">
                <h6><i class="fas fa-edit pr-2 modal-title text-capitalize"></h6></i>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="multipart/form-data" class="submit-official">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>First Name: </label>
                        <input type="text" name="first_name" id="fname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Middle Name: </label>
                        <input type="text" name="middle_name" id="mname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Last Name: </label>
                        <input type="text" name="last_name" id="lname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Location: </label>
                        <input type="text" name="location" id="location" class="form-control">
                    </div>
                    <div class="form-group" id="welcome-message">
                        <label>Message (Welcome Page) : </label>
                        <div id="welcome_message" style="min-height: 100px;" name="welcome_message">
                        </div>
                    </div>
                    <div class="form-group" id="about-message">
                        <label>Message (About Page) : </label>
                        <div id="about_message" style="min-height: 100px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-lg-6">
                            <div class="card" id="welcome-image">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/official.png') }}" alt="" class="img-thumbnail rounded-circle mb-3">
                                    <h5><i class="fas fa-image"></i> <span id="welcome-label"></span>: </h5>
                                    <input type="file" class="form-control" name="welcome_image">
                                    <input type="hidden" name="welcome_image_name">
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-6">
                            <div class="card" id="about-image">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/official.png') }}" alt="" class="img-thumbnail rounded-circle mb-3">
                                    <h5><i class="fas fa-image"></i> Image for About Page: </h5>
                                    <input type="file" class="form-control" name="about_image">
                                    <input type="hidden" name="about_image_name">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="position">
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary submit" name="submit"><i
                           class="fas fa-spin fa-spinner d-none"></i> Save</button>
                    <input type="hidden" name="id">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalMulti" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h1 id="official-position" class="text-capitalize"></h1>
          </div>
        <div class="modal-body officials">

        </div>
        <div class="modal-footer mt-3">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
            Delete Official <span id="official-name"></span>?
        </div>
        <div class="modal-footer mt-3">
            <button type="button" class="btn btn-danger submit" id="confirm-delete" data-dismiss="modal"><i
                class="fas fa-spin fa-spinner d-none"></i> Yes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>

  @endsection

@section('scripts')
<!-- Main Quill library -->
<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script src="{{ asset('/js/admin/officials.js') }}"></script>
<script>
    $('.modal, .container').on('click', '.indi-officials', function () {
    position = $(this).data('position');
    $('#welcome-label').text('Image for Welcome Page');
    id = $(this).data('id');
    console.log(position);

    $modalIndividual.find('.modal-title').text(id ? 'Edit ' + position : 'Add ' + position);
    if (position == "councilor" || position == "chairman" || position == "skchairman" ) {
        $('#about-message').addClass('d-none');
        $('#welcome-message').addClass('d-none');
        $('#about-image').addClass('d-none');
        $('#welcome-label').text('Profile Image');
    }
    if(position == "vicemayor"){
        $('#welcome-label').text('Profile Image');
        $('#about-image').addClass('d-none');
        $('#about-message').addClass('d-none');
    }

    if (id) {
        $modalIndividual.find('[name="id"]').val(id);
        $.ajax({
            url: '/admin/officials/get/official/' + id,
            method: 'POST',
            beforeSend: function(){
                $modalDisable.removeClass('d-none');
            }
        }).done(function (data) {
            $modalIndividual.find('[name="first_name"]').val(data.first_name);
            $modalIndividual.find('[name="middle_name"]').val(data.middle_name);
            $modalIndividual.find('[name="last_name"]').val(data.last_name);
            $modalIndividual.find('[name="location"]').val(data.location);
            $modalIndividual.find('[name="welcome_image_name"]').val(data.welcome_image);
            $modalIndividual.find('[name="about_image_name"]').val(data.about_image);
            $modalIndividual.find('[name="position"]').val(position);
            aboutMessage.root.innerHTML = data.about_message;
            welcomeMessage.root.innerHTML = data.welcome_message;
            aboutImageUrl = data.about_image ? '{{asset("/storage/officials/position/officialImage")}}'.replace('position', data.position).replace('officialImage', data.about_image) : "{{ asset('img/official.png') }}";
            welcomeImageUrl = data.welcome_image ? '{{asset("/storage/officials/position/officialImage")}}'.replace('position', data.position).replace('officialImage', data.welcome_image) : "{{ asset('img/official.png') }}";
            $('#welcome-image').find('img').attr('src', welcomeImageUrl);
            $('#about-image').find('img').attr('src', aboutImageUrl);
        }).fail(function(){

        }).always(function(){
            $modalDisable.addClass('d-none');
        });
    }
    $modalIndividual.find('[name="position"]').val(position);

    $('.modal').modal('hide');
    $modalIndividual.modal('show');
});

$('.modal').on('hidden.bs.modal', function () {
    aboutMessage.root.innerHTML = "";
    welcomeMessage.root.innerHTML = "";
    $(this).find('form').trigger('reset');
    $(this).find('form').find('input[name="id"]').val('');
    $(this).find('form').find('input[name="position"]').val('');
    $(this).find('img').attr('src', '{{ asset("img/official.png") }}');
    $('#welcome-image').find('img').removeData('base64');
    $('#about-image').find('img').removeData('base64');
});

</script>

@endsection
