@extends('layouts/app')

@section('styles')
<style>
    #images .carousel-item {
        widows: 100%;
        height: 400px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        background-color: white;
    }
    a.carousel-control-prev:hover,
    a.carousel-control-next:hover {
        text-decoration: none !important;
    }
    #content p {
        font-size: 1.125rem;
        font-weight: 300;
    }
    @media (max-width: 425px) {
        .announcement-title {
            font-size: 3rem !important;
        }
    }
</style>
@endsection

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10">
            <h1 class="announcement-title">{{$announcement->title}}</h1>
            <p class="h5 text-secondary">{{ date('M d, Y', strtotime($announcement->created_at)) }}</p>
            <hr class="border"/>


            @if (count($images) > 0)
            <div id="images" class="carousel slide my-5" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($images as $key => $image)
                        <div class="carousel-item @if($key == 0) active @endif" style="background-image: url('/storage/announcements/{{$image->src}}')"></div>
                    @endforeach
                    @if (count($images) > 1)
                    <a class="carousel-control-prev" href="#images" role="button" data-slide="prev">
                        <i class="fas fa-arrow-left text-dark"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#images" role="button" data-slide="next">
                        <i class="fas fa-arrow-right text-dark"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    @endif
                </div>
            </div>
            @endif

            <div id="content">
                {!! html_entity_decode($announcement->content) !!}
            </div>


        </div>
    </div>
</div>
@endsection
