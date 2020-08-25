@extends('layouts/app')

@section('content')
<div class=" container my-2">
	<h3 class="mb-5 card-header text-white text-center mx-auto d-block" style="max-width: 50% !important;">COUNCILORS</h3>
	<div class="row">
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{asset('img/officials/3co.png')}}" width="200"/>
			<h5 class="text-center mt-2 1co"></h5>
		</div>
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{asset('img/officials/4co.png')}}" width="200" />
			<h5 class="text-center mt-2 2co"></h5>
		</div>
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{asset('img/officials/5co.png')}}" width="200"/>
			<h5 class="text-center mt-2 3co"></h5>
		</div>
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{asset('img/officials/6co.png')}}" width="200" />
			<h5 class="text-center mt-2 4co"></h5>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{asset('img/officials/7co.png')}}" width="200"/>
			<h5 class="text-center mt-2 5co"></h5>
		</div>
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{asset('img/officials/8co.png')}}" width="200" />
			<h5 class="text-center mt-2 6co"></h5>
		</div>
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{asset('img/officials/9co.png')}}" width="200"/>
			<h5 class="text-center mt-2 7co"></h5>
		</div>
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{asset('img/officials/10co.png')}}" width="200" />
			<h5 class="text-center mt-2 8co"></h5>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			type: 'POST',
			url: 'admin/f_process.php',
			data: {pos:3},
			success:function(res){
				res = JSON.parse(res);
				for (var i = 0; i < res.length; i++) {
					let mname = "";
					if (res[i].mname != "") {
						mname = res[i].mname+".";
					}
					$("."+(i+1)+"co").text("Hon. "+res[i].fname+" "+mname+" "+res[i].lname);
				}
			}
		})
	})
</script>
@endsection