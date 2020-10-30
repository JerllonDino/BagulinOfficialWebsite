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

                @if (count($announcements) == 0)
                <div class="alert alert-warning mt-2">No announcements yet.</div>
                @endif
                <div class="row">
                    @foreach($announcements as $announcement)
                    <div class="col-md-6">
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="image mb-3" style="background-image: url('/storage/announcements/{{$announcement->thumbnail}}')"></div>
                                <h3><a href="/read/{{$announcement->slug}}">{{$announcement->title}}</a></h3>
                                <p class="text-secondary">{{ date('M d, Y', strtotime($announcement->created_at)) }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{$announcements->links()}}

            </div>
        </div>
    </div>
</div>
@endsection
