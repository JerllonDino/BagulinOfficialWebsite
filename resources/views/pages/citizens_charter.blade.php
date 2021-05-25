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
</style>
@endsection

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-12 my-3">
            <h3 class="card-header text-white text-center mx-auto d-block"
                style="min-width: 100% !important;">
                Citizens Charter</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-sm-12">
            <img src="img/transparency-seal.png"
                 class="mx-auto d-block w-75 sticky-top">
        </div>
        <div class="col-lg-7 col-sm-12 my-3">

            <h4>MISSION</h4>
            <ul>
                <li> To provide equal opportunities and continuous development in a balanced ecology to uplift the
                    quality
                    of the life of Bagulinians

                </li>
            </ul>
            <h4>VISION</h4>
            <ul>
                <li> By year 2030, we envisioned Bagulin as progressive Agri - tourism haven of God loving and empowered
                    citizenry in a balance environment guided by dynamic and unified leadership towards sustainable
                    economy.
                </li>
            </ul>
            <h4>PROGRAM THRUST OF MAYOR VIRGILIO C. FLOR</h4>
            <ol>
                <li> Improvement of farm to market road </li>
                <li> Increase number of business establishment </li>
                <li> Acquisition of Payloader </li>
                <li> Creation of Municipal Special Educational Assistance Program </li>
                <li> Creation of MSDWO position </li>
                <li> Visibility of PNP to protect </li>
                <li> Identification and establishment of Sanitary Landfill for clean surroundings </li>
                <li> Ensure Transparency, Accountability and Good Governance </li>
            </ol>

            <h4>SYSTEM OF REDDRESS MECHANISM </h4>
            <p>
                ◎ In the process of availing any specific service from the different
                offices in the Municipality of Bagulin, should a clients and applicants feel that the staffs or office
                personnel have not provided the expected courtesy, transparency, honesty, and efficiency, the applicant
                is strongly encouraged to report the dissatisfaction or disservice to the head of office concerned. The
                head of office shall then call the attention of the concerned employee and objectively handle the
                concern by presenting and discussing the matter in the presence of both parties. The applicant may
                choose to personally bring the matter to the assistance and information desk (AID) or by dialing mobile
                number 0917-510-1901. The AID will receive all feedback to be forwarded to the Citizen's Charter Team
                headed by the Municipal Administrator for the Executive Department and the Sangguniang Bayan Secretary
                for the Legislative Department for the appropriate actions. All office department have the costumer
                feedback forms. These forms are available to all clients who are encouraged to comment, file complaints
                or provide feedback about services extended. Each client may get a feedback form to any office. The
                forms shall be submitted to the AID. Clients are also encouraged to suggest ways and means to improve
                quality and kind of service of each office. The Municipal Government Office may serve as inputs or
                directly adopted by the offices to continuously promote and sustain efficient and effective public
                service delivery directly translated into client's satisfaction.
            </p>

            <h4>PERFORMANCE PLEDGE</h4>
            <p>
                ◎ We, the officials and staffs of the Municipal Government of Bagulin, La Union hereby pledge and commit
                to deliver our services to our constituents our partners, costumers, clients, and further re - affirm
                our duty to serve them personally, efficiently, expeditiously, and with outmost integrity, as promised
                in the Bagulin Citizen's Charter.
            </p>
            <i class="font-weight-bold">
                BANGON BAGULIN #IPAKITAANGGALING
            </i>

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
                        <h3 class="mb-0 float-left">{{ucwords($category['category'])}}</h3>
                        <h3 class="mb-0 float-right"><i class="fas fa-plus"></i></h3>
                    </button>
                </div>
                <div id="collapse-{{$key}}"
                     class="collapse"
                     role="tabpanel"
                     aria-labelledby="headingOne"
                     data-parent="#accordion"
                     data-id="{{$category['id']}}"
                     data-category="{{$category['category']}}">
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
    $('.collapse').on('show.bs.collapse', function () {
    $elem = $(this);
    $documents = $elem.find('.documents');

    if ($documents.attr('data-loaded') == 'false') {
        category_name = $(this).attr('data-category');

        $.ajax({
            url: '/citizens-charter/documents',
            data: {category: $(this).attr('data-id')},
            success: function(res) {
                html = '';
                for (i = 0; i < res.length; i++) {
                    data = res[i];
                    html += `
                        <div class="col-3 mb-4">
                            <div class="card document h-100">
                                <div class="card-body">
                                    <h1 class="text-center"><i class="fas fa-file-alt "></i></h1>
                                    <a class="text-center d-block text-dark font-weight-bold" href="https://bagulin.s3-ap-southeast-1.amazonaws.com/citizens-charter/${category_name}/${data.file_name}" target="_blank">${data.file_name.split('_')[1]}</a>
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