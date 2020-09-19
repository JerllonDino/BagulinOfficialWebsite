@extends('layouts/app')

@section('styles')

<style>
    .rounded-circle{
            width: 200px;
            height: 210px;
            object-fit: cover;
        }
</style>

@endsection

@section('content')
<div class="container-fluid my-3">
		<h3 class="mb-5 card-header text-white text-center mx-auto d-block" style="max-width: 50% !important;">Barangay SK skChairmans</h3>
	<div class="row">
        @if ($official)
            @foreach ($official as $skchairman)
                <div class="col-lg-3 mx-auto mt-5 mt-lg-0">
                    <img class="rounded-circle mx-auto d-block" src="{{ $skchairman->about_image ? asset('storage/officials/'.$skchairman->position.'/'.$skchairman->about_image) : asset('img/official.png')}}" width="200"/>
                    <h5 class="text-center mt-2"> Hon. {{ $skchairman->first_name.' '.$skchairman->middle_name.' '.$skchairman->last_name }}</h5>
                    <p class="text-center">{{ $skchairman->location }}</p>
                </div>
            @endforeach
        @endif
    </div>
</div>

@endsection
