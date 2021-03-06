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
        width: 100%;
    }

    .plus:after {
        content: ' \002B';
    }

    .minus:after {
        content: ' \002D';
    }
</style>
@endsection

@section('content')

<div class="container my-5">
    {{-- <div class="row justify-content-center">
        <div class="col-lg-2 col-md-4 col-sm-4 col-4 my-3">
            <img src="img/transparency-seal.png" id="seal" class="mx-auto d-block">
        </div>
    </div> --}}
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-12 my-3">
            <h3 class="card-header text-white text-center mx-auto d-block"
                style="min-width: 100% !important;">
                Transparency</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12 align-self-center">
            <img src="img/transparency-seal.png"
                 class="mx-auto d-block w-50">
        </div>
        <div class="col-lg-6 col-sm-12 my-3">
            <p>
                A pearl buried inside a tightly-shut shell is practically worthless. Government information
                is a pearl, meant to be shared with the public in order to maximize its inherent value.
                The Transparency Seal, depicted by a pearl shining out of an open shell, is a symbol of a policy shift
                towards openness in access to government information. On the one hand, it hopes to inspire Filipinos in
                the civil service to be more open to citizen engagement; on the other, to invite the Filipino citizenry
                to exercise their right to participate in governance.
                This initiative is envisioned as a step in the right direction towards solidifying the position of the
                Philippines as the Pearl of the Orient ??? a shining example for democratic virtue in the region.
                DBM Compliance with Sec. 91 (Transparency Seal) R.A. No. 10633 (General Appropriations Act FY 2014


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
            url: '/get-documents',
            data: {category: $(this).attr('data-id')},
            success: function(res) {
                html = '';
                for (i = 0; i < res.length; i++) {
                    data = res[i];
                    html += `
                        <div class="col-lg-3 col-md-4 mb-4 ${data.file_name.split('_')[1]}">
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