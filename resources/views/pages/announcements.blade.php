@extends('layouts/app')

@section('styles')
<style>
    #announcements .card {
        background-color: #fff !important;
        border: 1px solid rgba(0, 0, 0, 0.125) !important;
        border-radius: 0.25rem !important;
        box-shadow: 0px 0px 3px rgba(0,0,0,0.5);
    }
    #announcements .image {
        background-color: gray;
        background-size: cover;
        background-position: center;
    }
    #announcements .image:after {
        content: "";
        display: block;
        padding-bottom: 100%;
    }
</style>
@endsection

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div id="announcements">

                <h1 class="my-5">Announcements</h1>


                @foreach($announcements as $announcement)
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="image" style="background-image: url('https://bagulin.s3-ap-southeast-1.amazonaws.com/announcements/{{$announcement->thumbnail}}')"></div>
                            </div>
                            <div class="col-lg-8">
                                <h3><a href="/read/{{$announcement->slug}}">{{$announcement->title}}</a></h3>
                                <p class="text-secondary">{{ date('M d, Y', strtotime($announcement->created_at)) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                {{$announcements->links()}}

            </div>
        </div>
    </div>
</div>
@endsection
