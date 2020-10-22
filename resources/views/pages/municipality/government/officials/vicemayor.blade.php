@extends('layouts/app')

@section('content')
<div class="container mt-5 mb-5">
	<div class="row">
        @if (count($official) <= 0)
            <div class="w-100 text-center">
                <h2>Sorry, there's nothing here yet. :)</h2>
            </div>
        @else
            <div class="col-lg-6 mt-5 mt-lg-0">
                <!-- <h2 class="text-center">Vice Mayor Jaime A. Lictao</h2> -->
                <img class=" mx-auto d-block w-100" src="{{ $official[0]->welcome_image ? 'https://bagulin.s3-ap-southeast-1.amazonaws.com/officials/'.$official[0]->position.'/'.$official[0]->welcome_image : asset('img/official.png')}}" />
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <h1 style="line-height: 25px">Hon. {{ $official[0]->first_name.' '.$official[0]->middle_name.' '.$official[0]->last_name }}</h1>
                <i><i class="fas fa-user"></i> Vice Mayor of Bagulin, La Union</i>
                <!-- <h2 class="mt-3">Biography</h2> -->
                @if ($official[0]->welcome_message && $official[0]->welcome_message !== "<p><br></p>")
                    <div class="mt-3">
                        {!! $official[0]->welcome_message !!}
                    </div>
                @else
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                @endif
            </div>
        @endif
	</div>
</div>

@endsection
