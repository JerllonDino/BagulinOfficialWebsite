<?php
$url = "http://localhost/bagulin/";
$path = $_SERVER['DOCUMENT_ROOT'] . "/bagulin";
require_once "$path/incs/headers.php";
require_once "$path/incs/navbar.php";
require_once "$path/incs/banner.php";
?>
<style type="text/css">
	.card-body{
		background:#efefef;
	}
	.card,.btn-dark{
		width: 100% !important;
	}
	.btn{
		border:none;
	}
	.btn-dark{
		background:#efefef;
		font-family: 'Droid Serif', serif;
		font-size: 1.5rem;
	}
	.btn-dark:after {
		content: '\2796'; /* Unicode character for "plus" sign (+) */
		font-size: 13px;
		color: white;
		float: right;
		margin-left: 5px;
	}

	.collapsed:after {
		content: "\02795"; /* Unicode character for "minus" sign (-) */
	}
	
	.wc{
		width: 90% !important;
		margin-bottom: 6%;
		
		border-radius: 3% !important;
		/*border: 1px solid grey !important;*/
		box-shadow: 1px 2px 5px 0px;
	}
	.bg-klight{
		background: #efefef !important;
	}
	.card-img-top{
		width: 20%;
	}
	.ico{
		width: 50%;
	}
	.butts{
		width: 25%;
		border-radius: 50%;
		box-shadow: 1px 1px 10px -5px;
		padding: 5% 0 5% 0;
	}
	.butts:hover{
		background-color: #B53A3A !important;
	}
	.btn-light{
		background-color: #ff9696 !important;
	}
	.title-card{
		max-width: 100% !important;
		height: 10% !important;
		color: white;
	}
	.bord{
		border-radius: 3% !important;
	}
	#seal{
		position: absolute;
		top: 24%;
		right: 2%;
		width: 10%;
	}

	@media (max-width: 992px) {
		#seal{
			top:25%;
			width: 13%;
		}

	}
	@media (max-width: 768px) {
		#seal{
			top:10%;
			width: 15%;
		}
	</style>
	<img src="<?=$url?>img/transparency-seal.png" id="seal">
	<div class="container my-5">
		<div class="row">
			<div class="col-12">
				<h3 class="mb-5 mt-1 card-header text-white text-center mx-auto d-block" style="max-width: 50% !important;">OFFICIAL DOCUMENTS</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div id="accordion">
					<div class="card">
						<div class="card-title" id="headingOne">
							<h3 class="mb-0">
								<button class="btn btn-dark collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									Executive Orders
								</button>
							</h3>
						</div>

						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body bg-klight">
								<div class="row">
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center">Executive-Order-16</p>

												<a href="<?=$url?>docs/Ordinances.php" target="_blank" class="float-left mt-0 ml-4 view-file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-16.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>

											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center">Executive-Order-17</p>

											<!-- <a href="#" class="btn btn-light butts float-left my-1 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right my-1 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-17.pdf" target="_blank" class="float-left mt-0 ml-4 view-file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-17.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>

											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center">Executive-Order-18</p>

											<!-- <a href="#" class="btn btn-light butts float-left my-1 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right my-1 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-18.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-18.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>

											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center">Executive-Order-19</p>

											<!-- <a href="#" class="btn btn-light butts float-left my-1 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right my-1 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-19.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-19.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>

											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center">Executive-Order-20</p>

											<!-- <a href="#" class="btn btn-light butts float-left my-1 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right my-1 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-20.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-20.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>

											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center">Executive-Order-21</p>

											<!-- <a href="#" class="btn btn-light butts float-left my-1 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right my-1 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-21.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-21.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>

											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center">Executive-Order-22</p>

											<!-- <a href="#" class="btn btn-light butts float-left my-1 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right my-1 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-22.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-22.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>

											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center">Executive-Order-23</p>

											<!-- <a href="#" class="btn btn-light butts float-left my-1 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right my-1 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-23.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-23.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>

											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Executive-Order-24</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-24.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-24.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Executive-Order-25</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-25.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-25.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Executive-Order-26</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-26.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-26.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Executive-Order-27</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-27.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-27.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Executive-Order-28</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-28.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-28.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Executive-Order-29</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-29.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-29.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Executive-Order-30</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-30.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-30.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Executive-Order-31</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-31.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-31.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Executive-Order-32</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-32.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-32.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Executive-Order-33</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-33.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-33.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Executive-Order-34</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/executive_orders/Executive-Order-34.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/executive_orders/Executive-Order-34.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-title" id="headingTwo">
							<h3 class="mb-0">
								<button class="btn btn-dark collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Resolution
								</button>
							</h3>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body bg-klight">
								<div class="row">
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center">2018 List of Resolutions</p>

											<!-- <a href="#" class="btn btn-light butts float-left my-1 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right my-1 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/resolutions/Resolutions.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/resolutions/Resolutions.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>

											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Resolutions-2</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="#" class="float-left mt-0 ml-4"><u>View</u></a>
												<a href="#" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-title" id="headingThree">
							<h3 class="mb-0">
								<button class="btn btn-dark collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Ordinances
								</button>
							</h3>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body bg-klight">
								<div class="row">
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center">2018 List of Appropriation Ordinances</p>

											<!-- <a href="#" class="btn btn-light butts float-left my-1 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right my-1 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/Ordinances.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/Ordinances.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>

											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">2019 List of Appropriation Ordinances</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="#" class="float-left mt-0 ml-4"><u>View</u></a>
												<a href="#" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-title" id="headingFour">
							<h3 class="mb-0">
								<button class="btn btn-dark collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Invitation to Bid
								</button>
							</h3>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
							<div class="card-body bg-klight">
								<div class="row">
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center">Invitation to Bid-2</p>

											<!-- <a href="#" class="btn btn-light butts float-left my-1 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right my-1 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="#" class="float-left mt-0 ml-4"><u>View</u></a>
												<a href="#" class="float-right mt-0 mr-4" download><u>Download</u></a>

											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Invitation to Bid-3</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="#" class="float-left mt-0 ml-4"><u>View</u></a>
												<a href="#" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-title" id="headingFive">
							<h3 class="mb-0">
								<button class="btn btn-dark collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									Miscellaneous
								</button>
							</h3>
						</div>
						<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
							<div class="card-body bg-klight">
								<div class="row">
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center">List of Accredited Organizations 2016</p>

											<!-- <a href="#" class="btn btn-light butts float-left my-1 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right my-1 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/Organizations-2016.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/Organizations-2016.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>

											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">List of Accredited Organizations 2019</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/Organizations-2019.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/Organizations-2016.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Supply & Delivery Of Medical & Laboratory Supplies</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/Supplies.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/Supplies.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6 col-6">
										<div class="card wc mx-auto d-block bg-light">
											<img src="<?=$url?>img/pdf.png" class="card-img-top mx-auto d-block my-3" alt="...">
											<div class="card-body bord px-0 pt-0 mb-0 pb-1 clearfix">
												<p class="h6 card-header title-card text-center mt-0">Protective-Services</p>

											<!-- <a href="#" class="btn btn-light butts float-left mt-0 ml-4"><img src="<?=$url?>img/eye.png" class="ico"></a>
												<a href="#" class="btn btn-light butts float-right mt-0 mr-4" download><img src="<?=$url?>img/dl.png" class="ico"></a> -->
												<a href="<?=$url?>docs/Protective-Services.pdf" target="_blank" class="float-left mt-0 ml-4 view_file"><u>View</u></a>
												<a href="<?=$url?>docs/docs/Protective-Services.pdf" class="float-right mt-0 mr-4" download><u>Download</u></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	require_once "$path/incs/footers.php";
	?>
