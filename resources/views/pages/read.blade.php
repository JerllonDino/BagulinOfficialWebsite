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
            <h1 class="display-3 announcement-title">{{$announcement->title}}</h1>
            <p class="h5 text-secondary">{{ date('M d, Y', strtotime($announcement->created_at)) }}</p>
            <hr class="border"/>

            <div id="images" class="carousel slide my-5" data-ride="carousel">
                <div class="carousel-inner">
                  @if (count($images) > 0)
                    @foreach($images as $key => $image)
                        <div class="carousel-item @if($key == 0) active @endif" style="background-image: url('/storage/announcements/{{$image->src}}')"></div>
                    @endforeach
                  @endif

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

            {!! html_entity_decode($announcement->content) !!}


        </div>
    </div>
</div>
@endsection