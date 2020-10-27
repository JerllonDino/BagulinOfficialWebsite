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
	<h3 class="mb-5 card-header text-white text-center mx-auto d-block" >Barangay Chairmans</h3>
	<div class="row">
        @if (count($official) <= 0)
            <div class="w-100 text-center">
                <h2>Sorry, there's nothing here yet. :)</h2>
            </div>
        @else
            @foreach ($official as $chairman)
                <div class="col-lg-3 mx-auto mt-5 mt-lg-0">
                    <img class="rounded-circle mx-auto d-block" data-img="{{ $chairman->welcome_image }}" src="{{ $chairman->about_image ? 'https://bagulin.s3-ap-southeast-1.amazonaws.com/officials/'.$chairman->position.'/'.$chairman->about_image : asset('img/official.png')}}" width="200"/>
                    <h5 class="text-center mt-2"> Hon. {{ $chairman->first_name.' '.$chairman->middle_name.' '.$chairman->last_name }}</h5>
                    <p class="text-center">{{ $chairman->location }}</p>
                </div>
            @endforeach
        @endif
	</div>
</div>
@endsection
