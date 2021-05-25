@extends('layouts/app')

@section('styles')
<style>
    #accordion .card-header {
        background: none;
        border: none;
        padding: 0 !important;
        margin: 0 !important;
        max-width: 100%;
    }

    #accordion .document {
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 1);
    }

    #accordion .btn {
        border-radius: 0 !important;
        background: #dc4646 !important;
        border-color: #dc4646 !important;
    }

    #accordion .btn:hover {
        border-radius: 0 !important;
        background: #b93c3c !important;
        border-color: #b93c3c !important;
    }

    #accordion .col-12 {
        margin-bottom: 0 !important;
    }

    #seal {
        position: absolute;
        top: 24%;
        right: 2%;
        width: 10%;
    }

    .plus:after {
        content: ' \002B';
    }

    .minus:after {
        content: ' \002D';
    }

    @media (max-width: 992px) {
        #seal {
            top: 25%;
            width: 13%;
        }

    }

    @media (max-width: 768px) {
        #seal {
            top: 10%;
            width: 15%;
        }
    }
</style>
@endsection

@section('content')
{{-- <img src="img/transparency-seal.png"
     id="seal"> --}}
<div class="container my-5">
    {{-- <div class="row">
        <div class="col-12">
            <h3 class="mb-5 mt-1 card-header text-white text-center mx-auto d-block"
                style="min-width: 50% !important;">MUNICIPAL PROFILE</h3>
        </div>
    </div> --}}
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-12 my-3">
            <h3 class="card-header text-white text-center mx-auto d-block"
                style="min-width: 100% !important;">
                MUNICIPAL PROFILE</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12 align-self-center">
            <img src="img/transparency-seal.png"
                 class="mx-auto d-block w-50">
        </div>
        <div class="col-lg-6 col-sm-12 my-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122351.52957917668!2d120.42584365507223!3d16.60239577788978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339196772ccf13d5%3A0x52967331343c71d9!2sBagulin%2C%20La%20Union!5e0!3m2!1sen!2sph!4v1621928870615!5m2!1sen!2sph"
                    width="100%"
                    height="200"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"></iframe>
            <p class="mt-3">
                The Municipality of Bagulin, La Union is located at the easternmost part of the province of La Union. It
                is generally mountainous and forested. Though it is already an interior town, it is geographically
                located at the center of the province. It is situated along latitudes 16 33’30” to 16 40’20” north and
                longitudes 120 25’to 120 32’25 east. it is bounded by the following municipalities. North - Municipality
                of San Gabriel, La Union Northwest - Municipality of San Juan, La Union West - Municipality of San
                Fernando, La Union Southeast - Municipality of Naguilian, La Union South - Municipality of Burgos, La
                Union East - Municipality of Kapangan, Benguet
            </p>
        </div>

    </div>

    <div class="row"
         id="accordion"
         role="tablist">
        @foreach ($categories as $key => $category)
        <div class="col-12">
            <div class="card">
                <div class="card-header"
                     role="tab"
                     id="headingOne">
                    <button class="btn btn-primary btn-block"
                            type="button"
                            data-toggle="collapse"
                            data-target="#collapse-{{$key}}"
                            aria-expanded="false"
                            aria-controls="collapseExample">
                        <h3 class="mb-0 float-left">{{ucwords($category->category)}}</h3>
                        <h3 class="mb-0 float-right plus indicator"></h3>
                    </button>
                </div>

                <div id="collapse-{{$key}}"
                     class="collapse"
                     role="tabpanel"
                     aria-labelledby="headingOne"
                     data-parent="#accordion"
                     data-id="{{$category->id}}">
                    <div class="card-body bg-secondary">
                        <div class="row documents"
                             data-loaded="false">
                            <div class="col-12">
                                <h3 class="text-secondary text-center my-5"><i class="fas fa-spin fa-spinner"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection

@section('scripts')
<script>
    $('.collapse').on('hide.bs.collapse', function () {
    $(this).parent().find('.indicator').removeClass('minus').addClass('plus');
})
$('.collapse').on('show.bs.collapse', function () {
    $(this).parent().find('.indicator').removeClass('plus').addClass('minus');
    $elem = $(this);
    $documents = $elem.find('.documents');

    if ($documents.attr('data-loaded') == 'false') {
        $.ajax({
            url: '/municipal-profile/get',
            data: {category: $(this).attr('data-id')},
            success: function(res) {
                html = '';
                for (i = 0; i < res.length; i++) {
                    data = res[i];
                    html += `
                        <div class="col-lg-3 col-md-4 mb-4">
                            <div class="card document h-100">
                                <div class="card-body">
                                    <h1 class="text-center"><i class="fas fa-file-alt "></i></h1>
                                    <a class="text-center d-block text-dark font-weight-bold" href="https://bagulin.s3-ap-southeast-1.amazonaws.com/official-documents/${data.category_id}/${data.file_name}" target="_blank">${data.file_name.split('_')[1]}</a>
                                </div>
                            </div>
                        </div>`;
                }

                if (res.length == 0) {
                    html = `
                        <div class="col-6 mx-auto">
                            <div class="alert alert-secondary"><p class="font-weight-bold text-center mb-0">Empty</p></div>
                        </div>
                    `;
                }

                $elem.find('.documents').html(html).attr('data-loaded', 'true');
            }
        })
    }
    else {

    }
})
</script>
@endsection