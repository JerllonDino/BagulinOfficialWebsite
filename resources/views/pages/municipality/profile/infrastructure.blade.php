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
		<h3 class="card-header text-white text-center mx-auto d-block" >INFRASTRUCTURE/UTILITIES/FACILITIES</h3>
	</div>
	<div class="row mt-3">
		<div class="col-sm-12">
			<section>
				<h5 class="mb-1 mt-1">ROADS</h5>
				<p>
					Total road length constructed in bagulin is 142.265 kms. 4.77 kms is National road; 14.057 kms is provincial road and 123.29 kms is barangay road. The actual road exceeded the required road on Urban as well as in Rural. (See accompanying table below please).
				</p>				
			</section>

			<section>
				<center>
					<strong>
						INVENTORY OF EXISTING ROADS
						<br />
						<small>As of December, 2018</small>
						<br />
						<small>Source: MPDO 2018 road update using GPS</small>
					</strong>
				</center>

				<table class="table table-bordered table-hover table-sm">
					<tbody>
						<tr>
							<td rowspan="2" width="174">
								<strong>
									<p>Name of Barangays</p>
									<p>&nbsp;</p>
								</strong>
							</td>
							<td rowspan="2" width="78">
								<strong>
									<p>Distance from</p>
									<p>Poblacion (meters)</p>
								</strong>
							</td>
							<td rowspan="2" width="61">
								<strong>
									<p>Road Length</p>
									<p>(meters)</p>
								</strong>
							</td>
							<td colspan="3" width="186">
								<strong>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Road Surface</p>
								</strong>
							</td>
						</tr>
						<tr>
							<td width="66">
								<strong>
									<p>&nbsp;</p>
									<p>Concrete</p>
								</strong>
							</td>
							<td width="60">
								<strong>
									<p>&nbsp;</p>
									<p>Asphalt</p>
								</strong>
							</td>
							<td width="60">
								<strong>
									<p>&nbsp;</p>
									<p>Earthfill</p>
								</strong>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p><strong>URBAN</strong></p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p><strong>&nbsp;</strong></p>
							</td>
							<td width="66">
								<p><strong>&nbsp;</strong></p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p><strong>&nbsp;</strong></p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p><strong>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>SUYO </strong></p>
							</td>
							<td width="78">
								<p>0</p>
							</td>
							<td width="61">
								<p><strong>&nbsp;</strong></p>
							</td>
							<td width="66">
								<p><strong>&nbsp;</strong></p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p><strong>&nbsp;</strong></p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>National road</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>2.01</p>
							</td>
							<td width="66">
								<p>2.01</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>Provincial road</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>14.057</p>
							</td>
							<td width="66">
								<p>1.9</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>Barangay roads</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>6.1</p>
							</td>
							<td width="66">
								<p>6.1</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>&nbsp;</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p><strong>RURAL</strong></p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p><strong>&nbsp;</strong></p>
							</td>
							<td width="66">
								<p><strong>&nbsp;</strong></p>
							</td>
							<td width="60">
								<p><strong>&nbsp;</strong></p>
							</td>
							<td width="60">
								<p><strong>&nbsp;</strong></p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p><strong>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Cambaly</strong></p>
							</td>
							<td width="78">
								<p>4</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>Barangay road</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>16.74</p>
							</td>
							<td width="66">
								<p>13.58</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>3.16</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>&nbsp;</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p><strong>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Baay</strong></p>
							</td>
							<td width="78">
								<p>12</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>Barangay roads</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>6.61</p>
							</td>
							<td width="66">
								<p>4.61</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>2.0</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>&nbsp;</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<ol>
									<p><strong>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Tagudtud </strong></p>
								</ol>
							</td>
							<td width="78">
								<p>10</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>Barangay roads</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>8.37</p>
							</td>
							<td width="66">
								<p>7.79</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>0.58</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>&nbsp;</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<ol>
									<p><strong>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Wallayan </strong></p>
								</ol>
							</td>
							<td width="78">
								<p>13</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>Barangay roads</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>5.03</p>
							</td>
							<td width="66">
								<p>5.03</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>0</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>&nbsp;</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<ol>
									<p><strong>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Libbo </strong></p>
								</ol>
							</td>
							<td width="78">
								<p>15.5</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>Barangay roads</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>12.17</p>
							</td>
							<td width="66">
								<p>6.76</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>5.41</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>&nbsp;</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<ol>
									<p><strong>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Dagup </strong></p>
								</ol>
							</td>
							<td width="78">
								<p>2.5</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>Barangay roads</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>8.54</p>
							</td>
							<td width="66">
								<p>3.73</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>4.81</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>Provincial road</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>12.127</p>
							</td>
							<td width="66">
								<p>8.37</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>3.757</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>National road</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>2.76</p>
							</td>
							<td width="66">
								<p>2.76</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>0</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<ol>
									<p><strong>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Alibangsay </strong></p>
								</ol>
							</td>
							<td width="78">
								<p>7.5</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>Barangay roads</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>15.98</p>
							</td>
							<td width="66">
								<p>8.98</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>7.0</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>&nbsp;</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p><strong>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Cardiz</strong></p>
							</td>
							<td width="78">
								<p>10.3</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>Barangay roads</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>31.48</p>
							</td>
							<td width="66">
								<p>12.45</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>19.03</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>&nbsp;</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<ol>
									<p><strong>10.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Tio-angan </strong></p>
								</ol>
							</td>
							<td width="78">
								<p>19</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p>Barangay roads</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>11.62</p>
							</td>
							<td width="66">
								<p>8.44</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>3.18</p>
							</td>
						</tr>
						<tr>
							<td width="174">
								<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="61">
								<p>&nbsp;</p>
							</td>
							<td width="66">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td rowspan="3" width="174">
								<p><strong>&nbsp;</strong></p>
								<p><strong>&nbsp;</strong></p>
								<p><strong>&nbsp;</strong></p>
								<p><strong>TOTAL</strong></p>
							</td>
							<td width="78">
								<p><strong>National</strong></p>
							</td>
							<td width="61">
								<p><strong>4.77</strong></p>
							</td>
							<td rowspan="3" width="66">
								<p><strong>&nbsp;</strong></p>
								<p><strong>92.11</strong></p>
								<p><strong>&nbsp;</strong></p>
								<p><strong>&nbsp;</strong></p>
							</td>
							<td rowspan="3" width="60">
								<p><strong>&nbsp;</strong></p>
							</td>
							<td rowspan="3" width="60">
								<p><strong>&nbsp;</strong></p>
								<p><strong>50.007</strong></p>
							</td>
						</tr>
						<tr>
							<td width="78">
								<p><strong>Provincial</strong></p>
							</td>
							<td width="61">
								<p><strong>14.057</strong></p>
							</td>
						</tr>
						<tr>
							<td width="78">
								<p><strong>Brgy</strong></p>
							</td>
							<td width="61">
								<p><strong>123.29</strong></p>
							</td>
						</tr>
					</tbody>
				</table>
				
			</section>



			<section>
				<h5 class="mb-1 mt-1">BRIDGES</h5>
				<p>
					The municipality has a total number of bridges equals to 38 units. 2 - units Reinforced Concrete bridge which is of good condition and 2 - under construction but needs completion. 34 - of it is hanging footbridges passable, 5- units for repair. 
				</p>				
			</section>

			<section>
				<center>
					<strong>
						INVENTORY OF BARANGAY BRIDGES
						<br />
						<small>Source: MPDO & Eng’g. Office</small>
					</strong>
				</center>

				<table class="table table-bordered table-hover table-sm">
					<tbody>
						<tr>
							<td>
								<p><strong>Location of Bridge</strong></p>
							</td>
							<td>
								<p><strong>No. of Units</strong></p>
							</td>
							<td>
								<p><strong>Type</strong></p>
							</td>
							<td>
								<p><strong>Remarks</strong></p>
							</td>
						</tr>
						<tr>
							<td>
								<p>SUYO</p>
							</td>
							<td>
								<p>3</p>
							</td>
							<td>
								<p>Hanging Footbridge</p>
							</td>
							<td>
								<p>Good condition</p>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>Reinforced Concrete</p>
							</td>
							<td>
								<p>Good condition</p>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>Reinforced Concrete</p>
							</td>
							<td>
								<p>Good condition</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Cambaly</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>Hanging Footbridge</p>
							</td>
							<td>
								<p>Good condition</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Tagudtud</p>
							</td>
							<td>
								<p>3</p>
							</td>
							<td>
								<p>Hanging footbridge</p>
							</td>
							<td>
								<p>1 needs repair</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Baay</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>Hanging footbridge</p>
							</td>
							<td>
								<p>Needs repair</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Libbo</p>
							</td>
							<td>
								<p>3</p>
							</td>
							<td>
								<p>Hanging footbridge</p>
							</td>
							<td>
								<p>Good condition</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Wallayan</p>
							</td>
							<td>
								<p>4</p>
							</td>
							<td>
								<p>Hanging footbridge</p>
							</td>
							<td>
								<p>Good condition</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Tio-angan</p>
							</td>
							<td>
								<p>7</p>
							</td>
							<td>
								<p>Hanging footbridge</p>
							</td>
							<td>
								<p>Good condition</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Cardiz</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>Hanging footbridge</p>
							</td>
							<td>
								<p>Good condition</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Alibangsay</p>
							</td>
							<td>
								<p>6</p>
							</td>
							<td>
								<p>Hanging footbridge</p>
							</td>
							<td>
								<p>Good condition</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Dagup</p>
							</td>
							<td>
								<p>4</p>
							</td>
							<td>
								<p>Hanging footbridge</p>
							</td>
							<td>
								<p>2 needs repair</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong> Total</strong></p>
							</td>
							<td>
								<p><strong>38</strong></p>
							</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</tbody>
				</table>
				
			</section>

			<section>
				<h5 class="mb-1 mt-1">FLOOD CONTROL</h5>
				<p>
					An approximate length of 650 meters stone masonry flood control and retaining wall structure were constructed by the joint effort of the National Government and residents along riverside are found at barangay Suyo along Bagulin River to protect them from flooding. In sitio nangalisan and Picao, series of temporary ripraps along riverbanks were constructed by residents to protect themselves from flush floods. Most were already destroyed by typhoon <strong>“pepeng”</strong>. 
				</p>				
			</section>

			<section>
				<h5 class="mb-1 mt-1">DRAINAGE AND WATER SURFACE</h5>
				<p>
					There are three (3) major rivers namely Naguilian River, Wallayan River and Cabassitan  River including their various naturally formed streams, creeks and ditches which serves as drainage system of the town. 
				</p>				
			</section>

			<section>
				<h5 class="mb-1 mt-1">CEMETERY</h5>
				<p>
					There is only One (1) cemetery in Bagulin with an area of 2.356 hectares, located in Brgy Suyo (the Poblacion).
				</p>				
			</section>

			<section>
				<h5 class="mb-1 mt-1">PUBLIC MARKET</h5>
				<p>
					Because of damages brought about by typhoon “Pepeng” on October 2009, the only one but not yet completed Public market was not in operational. Its previous area is One (1) hectare but due to current of Flush flood its soil was carried away and its area was reduced to 0.70 hectares. In 2014, Bagulin purchased an additional lot of 1,000 Sq meter just adjacent to the Market lot for the now on-going Market improvement.
				</p>	
				<p>
					In 2017, there was a New two storey public market building constructed provided with stalls is now ready for occupancy by stall awardees. 
				</p>			
			</section>





		</div>
	</div>
</div>
	
@endsection