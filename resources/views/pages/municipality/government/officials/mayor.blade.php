@extends('layouts/app')

@section('styles')
<style type="text/css">
	.mframe{
		border:5px solid #B53A3A;
		box-shadow: 0px 5px 10px rgba(0,0,0,0.5);
		background-color: rgba(0,0,0,0.09);
	}
	.mbox{
		width: 100%;
		background-color: rgba(0,0,0,0.1);
		box-shadow: 0px 5px 10px rgba(0,0,0,0.3);
		padding: 20px;
		margin: none;
		border-collapse: collapse;
	}
	.mymargin{
		text-indent: 50px;
	}
	
</style>
@endsection

@section('content')
<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-sm-2 mt-2 mt-lg-0">
		</div>
		<div class="col-sm-8 mt-2 mt-lg-0">
			<!-- <h2 class="text-center">Vice Mayor Jaime A. Lictao</h2> -->
			<img class=" mx-auto d-block w-100" src="{{asset('img/mayor-main.png')}}" />
		</div>
		<div class="col-sm-2 mt-2 mt-lg-0">
		</div>
		
	</div>
	<div class="row">
		<div class="col-sm-2 mt-2 mt-lg-0">
		</div>
		<div class="col-lg-8 mt-5 mt-lg-0">
			<!-- <h2 class="text-center">Biography</h2> -->
			
			<p>
				Dear Bagulin Community, 
			</p>
			<p class="mymargin">
				I am honored to serve as your Mayor to set a goal, a vision for our residents, and dedicated municipal leaders and employees. Bagulin is a wonderful town that I have called home for the past 63 years. As your Mayor, I will set the bar high and lead by example.  I sought to push the town toward modernity while preserving its traditional features that make it an ideal residential area and a superb vacation spot.  
			</p>
			<p class="mymargin">
				As I went around Bagulin, I engaged with our diverse residents at community events, on your doors, and even in your living rooms—I understand your aspirations for our community. The changing skyline in the town complements the growing popularity of Bagulin. We want a smooth transition to our new form of government. We want smart economic development that will transform our town into a center of progress, but we want our town to retain its traditional native charm by preserving our open spaces and protect our culture and environment. We want to continue investing in our people so kids who grow up here can afford to work, live, and eventually retire here in Bagulin. 
			</p>
			
			<p class="mymargin">
				It involved attitudinal change among residents, and a shift in their perspective. It will be difficult at first, but then after sometime, we will see that it can be done and that it made good sense and that is was for our own good. 
				I am confident and inspired to lead this great community into the next decade and beyond! 
			</p>

			<p class="mymargin">
				Sincerely,
			</p>

			<p class="mymargin">
				Mayor Virgilio C. Flor
			</p>
			

			

		</div>
		<div class="col-sm-2 mt-2 mt-lg-0">
		</div>
		
	</div>
</div>

@endsection