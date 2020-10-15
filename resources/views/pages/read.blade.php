@extends('layouts/app')

@section('styles')
<style>
    #images .carousel-item {
        widows: 100%;
        height: 400px;
        background-size: 50%;
        background-color: black;
        background-position: center;
        background-repeat: no-repeat;
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
                        <div class="carousel-item @if($key == 0) active @endif" style="background-image: url('https://bagulin.s3-ap-southeast-1.amazonaws.com/announcements/{{$image->src}}')"></div>
                    @endforeach
                    @if (count($images) > 1)
                    <a class="carousel-control-prev" href="#images" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#images" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
