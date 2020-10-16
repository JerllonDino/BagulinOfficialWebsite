@extends('layouts/app')

@section('content')
<!-- Body -->
<div id="body" class="container pt-3 pb-5 small">
    <div class="row">
        <div class="col-md-6">
            <img src="{{asset('img/mission.png')}}" id="mission" class="mx-auto d-block img-fluid">
        </div>
        <div class="col-md-6">
            <img src="{{asset('img/Vision.png')}}" id="vission" class="mx-auto d-block img-fluid">
        </div>
    </div>
</div>
@endsection