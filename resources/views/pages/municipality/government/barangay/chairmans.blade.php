@extends('layouts/app')

@section('content')
<div class="container-fluid my-3">
	<h3 class="mb-5 card-header text-white text-center mx-auto d-block" style="max-width: 50% !important;">Barangay Chairmans</h3>
	<div class="row">
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{ asset('img/officials/1bch.png')}}" width="200"/>
			<h5 class="text-center mt-2 1bch"></h5>
			<p class="text-center">Alibangsay</p>
		</div>
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{ asset('img/officials/2bch.png')}}" width="200" />
			<h5 class="text-center mt-2 2bch"></h5>
			<p class="text-center">Baay</p>
		</div>

		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{ asset('img/officials/3bch.png')}}" width="200"/>
			<h5 class="text-center mt-2 3bch"></h5>
			<p class="text-center">Cambaly</p>
		</div>
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{ asset('img/officials/4bch.png')}}" width="200" />
			<h5 class="text-center mt-2 4bch"></h5>
			<p class="text-center">Cardiz</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{ asset('img/officials/5bch.png')}}" width="200"/>
			<h5 class="text-center mt-2 5bch"></h5>
			<p class="text-center">Dagup</p>
		</div>
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{ asset('img/officials/6bch.png')}}" width="200" />
			<h5 class="text-center mt-2 6bch"></h5>
			<p class="text-center">Libbo</p>
		</div>

		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{ asset('img/officials/7bch.png')}}" width="200"/>
			<h5 class="text-center mt-2 7bch"></h5>
			<p class="text-center">Suyo</p>
		</div>
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{ asset('img/officials/8bch.png')}}" width="200" />
			<h5 class="text-center mt-2 8bch"></h5>
			<p class="text-center">Tagudtud</p>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0"></div>
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{ asset('img/officials/9bch.png')}}" width="200"/>
			<h5 class="text-center mt-2 9bch"></h5>
			<p class="text-center">Tio-angan</p>
		</div>
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0">
			<img class="rounded-circle mx-auto d-block" src="{{ asset('img/officials/10bch.png')}}" width="200"/>
			<h5 class="text-center mt-2 10bch"></h5>
			<p class="text-center">Wallayan</p>
		</div>
		<div class="col-lg-3 mx-auto mt-5 mt-lg-0"></div>
		
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			type: 'POST',
			url: 'admin/f_process',
			data: {posb:1},
			success:function(res){
				res = JSON.parse(res);
				for (var i = 0; i < res.length; i++) {
					let mname = "";
					if (res[i].mname != "") {
						mname = res[i].mname+".";
					}
					$("."+(i+1)+"bch").text("Hon. "+res[i].fname+" "+mname+" "+res[i].lname);
				}
			}
		})
	})
</script>
@endsection