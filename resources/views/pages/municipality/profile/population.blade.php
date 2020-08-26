@extends('layouts/app')

@section('styles')
<style type="text/css">
	th{
		font-weight: bold;
	}	
	

</style>
	
@endsection

@section('content')

<!-- Body -->
<div class="container small pt-3 pb-5">
	<div class="row">
		<h3 class="card-header text-white text-center mx-auto d-block" style="max-width: 50% !important;">POPULATION AND SOCIAL PROFILE</h3>
	</div>
	<div class="row mt-3">
		<div class="col-sm-12">
			<section>
				<!-- <h5 class="mb-1 mt-1">ROADS</h5> -->
				<p>
					Almost all residents in Bagulin are Filipinos. No data gathered but observation and interviews with barangay officials reflects only few are foreign citizenship permanently lives in Bagulin.
				</p>				
			</section>

			<section>
				<center>
					<strong>
						TOTAL POPULATION OF BAGULIN as of 2018
						<br />
						<small>Source: MCR, as of Dec.2018</small>
					</strong>
				</center>



				<table class = "table table-condensed table-hover table-bordered table-striped table-sm">
					<tbody>
						<tr>
							<td>
								<p><strong>BARANGAY</strong></p>
							</td>
							<td>
								<p><strong>TOTAL</strong></p>
							</td>
						</tr>
						<tr>
							<td>
								<p>ALIBANGSAY</p>
							</td>
							<td>
								<p>1,305</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>BAAY</p>
							</td>
							<td>
								<p>1,076</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>CAMBALY</p>
							</td>
							<td>
								<p>2,279</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>CARDIZ</p>
							</td>
							<td>
								<p>1,849</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>DAGUP</p>
							</td>
							<td>
								<p>2,434</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>LIBBO</p>
							</td>
							<td>
								<p>946</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>SUYO</p>
							</td>
							<td>
								<p>1,841</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>TAGUDTUD</p>
							</td>
							<td>
								<p>1,0000</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>TIO-ANGAN</p>
							</td>
							<td>
								<p>1,178</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>WALLAYAN</p>
							</td>
							<td>
								<p>1,201</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>TOTAL</strong></p>
							</td>
							<td>
								<p><strong>15,109</strong></p>
							</td>
						</tr>
					</tbody>
				</table>


			</section>

			<section>
				<h5 class="mb-1 mt-1">HISTORICAL GROWTH OF POPULATION</h5>
				<p>
					Its past population prior to becoming a regular municipality was very low especially in 1918 where it had only 2,419 persons. From thereon, its population growth is still low compared to other towns of La Union. It had an annual percent change of 4.07% from 1970 to 1975; 1.82% by 1980; and 2.998% by 1990; 2.56% by 1995 and 2.86% by 2000; 0.18% in 2010. Low growth rate has been attributed to poor road conditions and poor facilities in Bagulin which do not attract migrant economic and social activities. PSA survey in 2015 shows an average growth rate is 1.27%. The 2010 NSO average family size in the Municipality of Bagulin, La Union is 5.2 members per household.

				</p>				
			</section>

			<section>
				<center>
					<strong>
						HISTORICAL GROWTH OF POPULATION & Growth rate
						<br/ >
						1903-2015

						<br />
						<!-- <small>Source: MCR, as of Dec.2018</small> -->
					</strong>
				</center>

				<table class = "table table-condensed table-hover table-bordered table-striped table-sm">
					<tbody>
						<tr>
							<td>
								<p><strong>YEAR</strong></p>
							</td>
							<td>
								<p><strong>POPULATION</strong></p>
							</td>
							<td>
								<p><strong>ABSOLUTE CHANGE INCREASE/DECREASE</strong></p>
							</td>
							<td>
								<p><strong>AVERAGE GROWTH RATE</strong></p>
							</td>
						</tr>
						<tr>
							<td>
								<p>1903</p>
							</td>
							<td>
								<p>_</p>
							</td>
							<td>
								<p>_</p>
							</td>
							<td>
								<p>_</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>1918</p>
							</td>
							<td>
								<p>2,419</p>
							</td>
							<td>
								<p>_</p>
							</td>
							<td>
								<p>_</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>1939</p>
							</td>
							<td>
								<p>3,584</p>
							</td>
							<td>
								<p>1,165</p>
							</td>
							<td>
								<p>2.3</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>1948</p>
							</td>
							<td>
								<p>3,101</p>
							</td>
							<td>
								<p>-483</p>
							</td>
							<td>
								<p>-1.5</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>1960</p>
							</td>
							<td>
								<p>4,407</p>
							</td>
							<td>
								<p>1,306</p>
							</td>
							<td>
								<p>3.5</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>1970</p>
							</td>
							<td>
								<p>5,338</p>
							</td>
							<td>
								<p>931</p>
							</td>
							<td>
								<p>2.1</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>1975</p>
							</td>
							<td>
								<p>6,423</p>
							</td>
							<td>
								<p>1,085</p>
							</td>
							<td>
								<p>4.07</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>1980</p>
							</td>
							<td>
								<p>7,009</p>
							</td>
							<td>
								<p>586</p>
							</td>
							<td>
								<p>1.82</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>1990</p>
							</td>
							<td>
								<p>9,418</p>
							</td>
							<td>
								<p>2,409</p>
							</td>
							<td>
								<p>2.998</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>1995</p>
							</td>
							<td>
								<p>10,857</p>
							</td>
							<td>
								<p>1,362</p>
							</td>
							<td>
								<p>2.56</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>2000</p>
							</td>
							<td>
								<p>11,857</p>
							</td>
							<td>
								<p>1,116</p>
							</td>
							<td>
								<p>2.86</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>2007</p>
							</td>
							<td>
								<p>12,521</p>
							</td>
							<td>
								<p>664</p>
							</td>
							<td>
								<p>0.78</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>2010</p>
							</td>
							<td>
								<p>12,590</p>
							</td>
							<td>
								<p>69</p>
							</td>
							<td>
								<p>0.18</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>2015</p>
							</td>
							<td>
								<p>13,456</p>
							</td>
							<td>
								<p>866</p>
							</td>
							<td>
								<p>1.27</p>
							</td>
						</tr>
					</tbody>
				</table>


			</section>

			<section>
				<p>
					Average HH size computed (as of 2010): = total pop’n/# of HH = 12,590/2,421 = 5.2 person/ HH
				</p>
			</section>





		</div>
	</div>
</div>

@endsection