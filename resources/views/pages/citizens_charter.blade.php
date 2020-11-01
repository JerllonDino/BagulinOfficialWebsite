@extends('layouts/app')

@section('styles')
<style>
    #accordion .card-header{
        background: none;
        border: none;
        padding: 0 !important;
        margin: 0 !important;
        max-width: 100%;
    }

    #accordion .document {
        box-shadow: 0px 0px 5px rgba(0,0,0,1);
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

    #seal{
        position: absolute;
        top: 24%;
        right: 2%;
        width: 10%;
    }

    @media (max-width: 992px) {
        #seal{
            top:25%;
            width: 13%;
        }

    }
    @media (max-width: 768px) {
        #seal{
            top:10%;
            width: 15%;
        }
    }
</style>
@endsection

@section('content')
    <img src="img/transparency-seal.png" id="seal">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h3 class="mb-5 mt-1 card-header text-white text-center mx-auto d-block" >Citizen's Charter</h3>
            </div>
        </div>

        <div class="row" id="accordion" role="tablist">
            @foreach ($categories as $key => $category)
            <div class="col-12">
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapse-{{$key}}" aria-expanded="false" aria-controls="collapseExample">
                            <h3 class="mb-0 float-left">{{ucwords($category['category'])}}</h3>
                            <h3 class="mb-0 float-right"><i class="fas fa-plus"></i></h3>
                        </button>
                    </div>
                    <div id="collapse-{{$key}}" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-id="{{$category['id']}}" data-category="{{$category['category']}}">
                        <div class="card-body bg-secondary">
                            <div class="row documents" data-loaded="false">
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
