@extends('layouts/app')

@section('styles')
    <style>

        .rounded-circle{
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

    </style>
@endsection

@section('content')
<div class=" container my-2">
	<h3 class="mb-5 card-header text-white text-center mx-auto d-block" >COUNCILORS</h3>
	<div class="row">
		@if (count($official) <= 0)
            <div class="w-100 text-center">
                <h2>Sorry, there's nothing here yet. :)</h2>
            </div>
        @else
            @foreach ($official as $councilor)
                <div class="col-lg-3 mx-auto mt-5 mt-lg-0">
                    <img class="rounded-circle mx-auto d-block" src="{{ $councilor->welcome_image ? '/storage/officials/'.$councilor->position.'/'.$councilor->welcome_image : asset('img/official.png')}}" width="200"/>
                    <h5 class="text-center mt-2"> Hon. {{ $councilor->first_name.' '.$councilor->middle_name.' '.$councilor->last_name }}</h5>
                </div>
            @endforeach
        @endif
	</div>
</div>

@endsection
