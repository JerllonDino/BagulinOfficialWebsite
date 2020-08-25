@extends('layouts/app')

@section('content')
<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-lg-6 mt-5 mt-lg-0">
			<!-- <h2 class="text-center">Vice Mayor Jaime A. Lictao</h2> -->
			<img class=" mx-auto d-block w-100" src="{{asset('img/vice-mayor.png')}}" />
		</div>
		<div class="col-lg-6 mt-5 mt-lg-0">
			<!-- <h2 class="text-center">Biography</h2> -->
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</div>

@endsection