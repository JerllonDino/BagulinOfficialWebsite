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
		<h3 class="card-header text-white text-center mx-auto d-block" style="max-width: 50% !important;">EDUCATIONAL PROFILE</h3>
	</div>
	<div class="row mt-3">
		<div class="col-sm-12">
			<section>
				<!-- <h5 class="mb-1 mt-1">ROADS</h5> -->
				<p>
					Among the school age population, the elementary registered a quite high participation rate of 93.95%. one reason for this that it did not hit the l00% participation rate is that students enrolled in other municipalities were not included in the report from the schools concerned the report relied mainly on the number of enrolled students in the different schools. The high school level on the other hand, reported a very low participation rate of 85.63%. The reason for this is that the Municipality belongs to a mountainous area and that some indigenous school age population did not enroll in high school but preferred to stop because of the distance of school in the barangay. Some goes to other school in the adjacent municipalities of La Union unlike in the elementary level that almost all barangay has school building established near their residences.
				</p>				
			</section>

			<section>
				<!-- <h5 class="mb-1 mt-1">ROADS</h5> -->
				<p>
					There are nineteen (19) schools found in Bagulin, La Union, Fourteen (14) of which are Public Elementary School and five (5) Public High School. Tables below shows the population of enrollment in elementary and high school.
				</p>				
			</section>



			<section class="mt-5">
				<center>
					<strong>
						EDUCATIONAL STATISTICAL DATA
						<br />
						Public Elementary Schools SY 2018-2019


					<!-- 	<br />
						<small> Source: BAGULIN RHU, ANNUAL REPORT 2018</small> -->
					</strong>
				</center>


				<table class = "table table-condensed table-hover table-bordered table-striped table-sm">
					<tbody>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>&nbsp;</strong></p>
								<p><strong>&nbsp;</strong></p>
								<p><strong>Name of School</strong></p>
							</td>
							<td rowspan="2" width="84">
								<p><strong>&nbsp;</strong></p>
								<p><strong>Grade Level</strong></p>
							</td>
							<td colspan="3" width="210">
								<p><strong>Enrollment</strong></p>
							</td>
							<td rowspan="2" width="84">
								<p><strong>&nbsp;</strong></p>
								<p><strong>No. of teachers</strong></p>
							</td>
						</tr>
						<tr>
							<td width="64">
								<p>&nbsp;</p>
								<p>MALE</p>
							</td>
							<td width="72">
								<p>&nbsp;</p>
								<p>FEMALE</p>
							</td>
							<td width="74">
								<p>&nbsp;</p>
								<p>TOTAL</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>Dagup Integrated School&nbsp; (Elementary)</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>20</p>
							</td>
							<td width="72">
								<p>15</p>
							</td>
							<td width="74">
								<p>35</p>
							</td>
							<td rowspan="2" width="84">
								<p>14</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>123</p>
							</td>
							<td width="72">
								<p>106</p>
							</td>
							<td width="74">
								<p>229</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>Upper Wallayan Elem School</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>5</p>
							</td>
							<td width="72">
								<p>3</p>
							</td>
							<td width="74">
								<p>8</p>
							</td>
							<td rowspan="2" width="84">
								<p>5</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>20</p>
							</td>
							<td width="72">
								<p>27</p>
							</td>
							<td width="74">
								<p>47</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>Pila Elementary School (Cambaly)</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>8</p>
							</td>
							<td width="72">
								<p>10</p>
							</td>
							<td width="74">
								<p>18</p>
							</td>
							<td rowspan="2" width="84">
								<p>6</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>36</p>
							</td>
							<td width="72">
								<p>36</p>
							</td>
							<td width="74">
								<p>72</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>Libbo Elementary School</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>7</p>
							</td>
							<td width="72">
								<p>5</p>
							</td>
							<td width="74">
								<p>12</p>
							</td>
							<td rowspan="2" width="84">
								<p>6</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>29</p>
							</td>
							<td width="72">
								<p>32</p>
							</td>
							<td width="74">
								<p>61</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>`Cambaly Elem school</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>7</p>
							</td>
							<td width="72">
								<p>14</p>
							</td>
							<td width="74">
								<p>21</p>
							</td>
							<td rowspan="2" width="84">
								<p>9</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>74</p>
							</td>
							<td width="72">
								<p>41</p>
							</td>
							<td width="74">
								<p>115</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>Bagulin Central School</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>16</p>
							</td>
							<td width="72">
								<p>23</p>
							</td>
							<td width="74">
								<p>39</p>
							</td>
							<td rowspan="2" width="84">
								<p>12</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>125</p>
							</td>
							<td width="72">
								<p>105</p>
							</td>
							<td width="74">
								<p>230</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>Baay Integrated School (Elementary)</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>18</p>
							</td>
							<td width="72">
								<p>8</p>
							</td>
							<td width="74">
								<p>26</p>
							</td>
							<td rowspan="2" width="84">
								<p>10</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>64</p>
							</td>
							<td width="72">
								<p>54</p>
							</td>
							<td width="74">
								<p>118</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>Sinabugan Primary School</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>6</p>
							</td>
							<td width="72">
								<p>9</p>
							</td>
							<td width="74">
								<p>15</p>
							</td>
							<td rowspan="2" width="84">
								<p>5</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>38</p>
							</td>
							<td width="72">
								<p>20</p>
							</td>
							<td width="74">
								<p>58</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>Tio-angan Elementary School</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>9</p>
							</td>
							<td width="72">
								<p>5</p>
							</td>
							<td width="74">
								<p>14</p>
							</td>
							<td rowspan="2" width="84">
								<p>6</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>43</p>
							</td>
							<td width="72">
								<p>35</p>
							</td>
							<td width="74">
								<p>78</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>Papayo Elementary School</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>4</p>
							</td>
							<td width="72">
								<p>8</p>
							</td>
							<td width="74">
								<p>12</p>
							</td>
							<td rowspan="2" width="84">
								<p>6</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>34</p>
							</td>
							<td width="72">
								<p>26</p>
							</td>
							<td width="74">
								<p>60</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>Lower Wallayan Elementary School</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>9</p>
							</td>
							<td width="72">
								<p>3</p>
							</td>
							<td width="74">
								<p>12</p>
							</td>
							<td rowspan="2" width="84">
								<p>6</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>43</p>
							</td>
							<td width="72">
								<p>44</p>
							</td>
							<td width="74">
								<p>87</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>Tagudtud Elementary School</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>11</p>
							</td>
							<td width="72">
								<p>17</p>
							</td>
							<td width="74">
								<p>28</p>
							</td>
							<td rowspan="2" width="84">
								<p>9</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>59</p>
							</td>
							<td width="72">
								<p>58</p>
							</td>
							<td width="74">
								<p>117</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>Cardiz Elementary School</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>8</p>
							</td>
							<td width="72">
								<p>10</p>
							</td>
							<td width="74">
								<p>18</p>
							</td>
							<td rowspan="2" width="84">
								<p>8</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>62</p>
							</td>
							<td width="72">
								<p>59</p>
							</td>
							<td width="74">
								<p>121</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>Alibangsay Elementary School</strong></p>
							</td>
							<td width="84">
								<p>Pre-Elem</p>
							</td>
							<td width="64">
								<p>7</p>
							</td>
							<td width="72">
								<p>10</p>
							</td>
							<td width="74">
								<p>17</p>
							</td>
							<td rowspan="2" width="84">
								<p>7</p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p>1-6</p>
							</td>
							<td width="64">
								<p>49</p>
							</td>
							<td width="72">
								<p>43</p>
							</td>
							<td width="74">
								<p>92</p>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="276">
								<p><strong>&nbsp;</strong></p>
								<p><strong>TOTAL</strong></p>
							</td>
							<td width="84">
								<p><strong>Pre-Elem</strong></p>
							</td>
							<td width="64">
								<p><strong>135</strong></p>
							</td>
							<td width="72">
								<p><strong>140</strong></p>
							</td>
							<td width="74">
								<p><strong>275</strong></p>
							</td>
							<td width="84">
								<p><strong>&nbsp;</strong></p>
							</td>
						</tr>
						<tr>
							<td width="84">
								<p><strong>1-6</strong></p>
							</td>
							<td width="64">
								<p><strong>799</strong></p>
							</td>
							<td width="72">
								<p><strong>686</strong></p>
							</td>
							<td width="74">
								<p><strong>1,485</strong></p>
							</td>
							<td width="84">
								<p><strong>&nbsp;</strong></p>
							</td>
						</tr>
					</tbody>
				</table>
			</section>

			<section class="mt-5">
				<center>
					<strong>
						EDUCATIONAL STATISTICAL DATA
						<br />
						Public High Schools SY 2018-2019



					<!-- 	<br />
						<small> Source: BAGULIN RHU, ANNUAL REPORT 2018</small> -->
					</strong>
				</center>

				<table class = "table table-condensed table-hover table-bordered table-striped table-sm">
					<tbody>
						<tr>
							<td rowspan="2" width="258">
								<p><strong>&nbsp;</strong></p>
								<p><strong>&nbsp;</strong></p>
								<p><strong>Name of School</strong></p>
							</td>
							<td rowspan="2" width="60">
								<p><strong>&nbsp;</strong></p>
								<p><strong>Grade Level</strong></p>
							</td>
							<td colspan="2" width="144">
								<p><strong>Enrollment</strong></p>
							</td>
							<td rowspan="2" width="108">
								<p>&nbsp;</p>
								<p><strong>TOTAL</strong></p>
							</td>
						</tr>
						<tr>
							<td width="60">
								<p>MALE</p>
							</td>
							<td width="84">
								<p>FEMALE</p>
							</td>
						</tr>
						<tr>
							<td width="258">
								<p><strong>DAGUP Integrated School</strong></p>
							</td>
							<td width="60">
								<p>7-12</p>
							</td>
							<td width="60">
								<p>130</p>
							</td>
							<td width="84">
								<p>122</p>
							</td>
							<td width="108">
								<p>252</p>
							</td>
						</tr>
						<tr>
							<td width="258">
								<p><strong>BAAY Integrated School</strong></p>
							</td>
							<td width="60">
								<p>7-12</p>
							</td>
							<td width="60">
								<p>-</p>
							</td>
							<td width="84">
								<p>-</p>
							</td>
							<td width="108">
								<p>-</p>
							</td>
						</tr>
						<tr>
							<td width="258">
								<p><strong>SUYO National High School</strong></p>
							</td>
							<td width="60">
								<p>7-12</p>
							</td>
							<td width="60">
								<p>132</p>
							</td>
							<td width="84">
								<p>133</p>
							</td>
							<td width="108">
								<p>265</p>
							</td>
						</tr>
						<tr>
							<td width="258">
								<p><strong>TAGUDTUD National High School</strong></p>
							</td>
							<td width="60">
								<p>7-12</p>
							</td>
							<td width="60">
								<p>123</p>
							</td>
							<td width="84">
								<p>93</p>
							</td>
							<td width="108">
								<p>216</p>
							</td>
						</tr>
						<tr>
							<td width="258">
								<p><strong>CAMBALY National High School</strong></p>
							</td>
							<td width="60">
								<p>7-12</p>
							</td>
							<td width="60">
								<p>-</p>
							</td>
							<td width="84">
								<p>-</p>
							</td>
							<td width="108">
								<p>-</p>
							</td>
						</tr>
						<tr>
							<td width="258">
								<p><strong>TOTAL</strong></p>
							</td>
							<td width="60">
								<p><strong>&nbsp;</strong></p>
							</td>
							<td width="60">
								<p><strong>385</strong></p>
							</td>
							<td width="84">
								<p><strong>348</strong></p>
							</td>
							<td width="108">
								<p><strong>733</strong></p>
							</td>
						</tr>
					</tbody>
				</table>
			</section>



		</div>
	</div>
</div>

@endsection