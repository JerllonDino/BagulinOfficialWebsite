@extends('layouts/app')

@section('content')
<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-lg-6 mt-5 mt-lg-0">
			<!-- <h2 class="text-center">Vice Mayor Jaime A. Lictao</h2> -->
			<img class=" mx-auto d-block w-100" src="{{ $official[0]->about_image ? asset('/storage/officials/'.$official[0]->position.'/'.$official[0]->about_image) : asset('img/vice-mayor.png')}}" />
		</div>
		<div class="col-lg-6 mt-5 mt-lg-0">
            <h1 style="line-height: 25px">Hon. {{ $official[0]->first_name.' '.$official[0]->middle_name.' '.$official[0]->last_name }}</h1>
            <i><i class="fas fa-user"></i> Mayor of Bagulin, La Union</i>
            <h2 class="mt-3">Biography</h2>
            @if ($official[0]->about_message && $official[0]->about_message !== "<p><br></p>")
                {!! $official[0]->about_message !!}
            @else
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            @endif
		</div>
	</div>
</div>

@endsection
