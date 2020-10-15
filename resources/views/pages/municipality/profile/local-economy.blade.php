@extends('layouts/app')

@section('styles')
<style type="text/css">
	#navs .nav-item {
		max-width: 100% !important;
		background: transparent;
		padding-bottom: 0;
		padding-top: 0;
	}
	#navs .nav-link {
		max-width: 100%;
		background: #fceded !important;
		color: black;
		border-bottom: 2px solid white;
	}
	#navs .active {
		background: #B53A3A !important;
		color: white;
	}
</style>
@endsection

@section('content')
<div class="container small pt-3 pb-5">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-9">
		<h3 class="card-header text-white text-center mx-auto d-block" >Local Economy</h3>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-3">
			<ul class="nav nav-pills flex-column" id="navs">
			</ul>
		</div>
		<div class="col-9" id="content">
			
			<section>
				<h3 class="mb-3 mt-1">THE LOCAL ECONOMY</h3>
				<p>
					The local economy in our town is made up of 2 sectors namely the primary and the secondary sectors. Considering that Bagulin, La Union belongs to the upland Municipality, the primary sector is composed of agriculture, livestock and forestry.  The secondary sector consists of all activities like trade and commerce, personal & community services and transportation. The two sectors do not contribute uniformly to total output. 
				</p>
				<section class="mt-1">
					<span></span>
					<h5>STRUCTURE OF BAGULIN ECONOMY</h5>
					<p>By the sheer size of agricultural land area utilized and the number of persons/households involved, it is easy to see that the primary sector, primarily agriculture dominates the local economy of Bagulin, La Union. There is, however a small portion of the secondary sector activities like trading and services. The secondary sector  has a small contribution to the economy of Bagulin, La Union like small businesses which is located at the town center specially at the Public Market where trading is done.</p>
						<span></span>
					</section>
			</section>

			<section>
				<h3 class="mt-1 mb-3">THE PRIMARY SECTOR</h3>
				<section class="mt-1">
					<span></span>
					<h5>AGRICULTURAL CROPLANDS</h5>
					<p>There are several agricultural crops grown in Bagulin, La Union. This can be classified into seasonal and permanent crops. Seasonal crops are dominated by rice including irrigated, rain fed and upland varieties. Other seasonal crops include corn, vegetables and root crops. Permanent crops are dominated by tiger grass. They also include fruit trees and bananas.</p>
						<span></span>
					</section>
				<p>
					The total area planted to crops by the end of 2018 was estimated (see accompanying table)
				</p>
				<section class="mt-3">
					<span></span>
					<h6 class="text-center">AREA PLANTED TO SEASONAL AND PERMANENT CROPS</h6>
					<p class="text-center">Bagulin, La Union</p>
						<span></span>
						<table class="table table-bordered table-sm table-sm">
						<thead>
						<th width="120">
						<p>Crops</p>
						</th>
						<th width="120">
						<p>Area Planted (ha)</p>
						</th>
						<th width="126">
						<p>Percent of Total</p>
						</th>
					</thead>
						<tbody>
							<tr>
							<td width="120">
							<p>&nbsp;</p>
							<p>1.&nbsp; Seasonal Crops</p>
							<p>&nbsp; &nbsp; &nbsp;Irrigated rice</p>
							<p>&nbsp; &nbsp; &nbsp;Non-Irrigated rice</p>
							<p>&nbsp; &nbsp; &nbsp;Upland rice</p>
							<p>&nbsp; &nbsp; &nbsp;Fruit Vegetables</p>
							<p>&nbsp; &nbsp; &nbsp;Leafy vegetables</p>
							<p>&nbsp; &nbsp; &nbsp;Root crops</p>
							<p>&nbsp; &nbsp; &nbsp;Legumes</p>
							<p>2.&nbsp; Permanent Crops</p>
							<p>&nbsp; &nbsp; &nbsp;Banana</p>
							<p>&nbsp; &nbsp; &nbsp;Fruit Crops</p>
							<p>&nbsp; &nbsp; &nbsp;Tiger grass</p>
							</td>
							<td style="text-align: center;" width="120">
							<p>&nbsp;</p>
							<p style="text-align: center;">&nbsp;</p>
							<p>293</p>
							<p>545</p>
							<p>5</p>
							<p>13.05</p>
							<p>55.15</p>
							<p>28.25</p>
							<p>23.25</p>
							<p>&nbsp;</p>
							<p>35</p>
							<p>13.05</p>
							<p>650</p>
							</td>
							<td style="text-align: center;" width="126">
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<p>17.81</p>
							<p>33.14</p>
							<p>0.303</p>
							<p>0.79</p>
							<p>3.35</p>
							<p>1.72</p>
							<p>1.41</p>
							<p>&nbsp;</p>
							<p>2.13</p>
							<p>0.79</p>
							<p>38.55</p>
							</td>
							</tr>
							<tr>
							<td width="120">
							<p>&nbsp; &nbsp; &nbsp;Total Crop area</p>
							</td>
							<td style="text-align: center;" width="120">
							<p>1,660.75</p>
							</td>
							<td style="text-align: center;" width="126">
							<p>100</p>
							</td>
							</tr>
						</tbody>
						</table>
						<small>Data source: MAO (annual report 2018)</small>
					</section>
			</section>

			<section>
				<h3 class="mt-1 mb-3">CROP PRODUCTION</h3>

				<section class="mt-1">
					<span></span>
					<p>The total crop production in Bagulin, La Union is estimated at close to 6,834.35 metric tons (see accompanying table). Of this, all types of rice has totaled to 5,117.2 tons or 75.08% of the total production, tiger-grass follows at a 780.8 metric tons or 11.167%, and vegetable and root crops almost of the same percentage is produced. Banana, Fruit trees and legumes contributed to the small percentage of 13.76% of the total municipal production of 2018. </p>
						<span></span>
					</section>
					<section class="mt-1">
						<span></span>
						<h6 class="text-center">CROP PRODUCTION BY VOLUME OF YIELD</h6>
						<p class="text-center">Bagulin, La Union, 2018</p>
							<span></span>
							<table class="table table-bordered table-sm table-sm">
								<thead>
								<th width="300">
								<p>Crops</p>
								</th>
								<th width="98">
								<p>Area ( in has. )</p>
								</th>
								<th width="110">
								<p>Production ( tons )</p>
								</th>
								<th width="112">
								<p>Percent of Total</p>
								</th>
								</thead>
								<tbody>
								<tr>
								<td width="300">
								<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rice, all types &ndash; irrigated</p>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-unirrigated</p>
								<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Banana</p>
								<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fruit trees (Mango, avocado, guyabano,papaya, Jackfruit, Santol )</p>
								<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fruit vegetables (solanaceous &amp; cucurbits )</p>
								<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Leafy Vegetables( Pechay &amp; cabbage, ampalaya, camote tops, bean tops, Gabi stalks &amp; runners)</p>
								<p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Root crops (Cassava, Sweet potatoe, Tugui/Ube, Gabi &amp; Ginger)</p>
								<p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Legumes</p>
								<p>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Commercial crops:</p>
								<p>-Tiger grass</p>
								<p>&nbsp;</p>
								</td>
								<td width="98">
								<p>&nbsp;</p>
								<p>293</p>
								<p>545</p>
								<p>35</p>
								<p>13.05</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>55.15</p>
								<p>&nbsp;</p>
								<p>34.4</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>28.25</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>23.25</p>
								<p>&nbsp;</p>
								<p>650</p>
								</td>
								<td width="110">
								<p>&nbsp;</p>
								<p>1,390.58</p>
								<p>3,726.82</p>
								<p>117</p>
								<p>65.9</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>394.20</p>
								<p>&nbsp;</p>
								<p>70.5</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>241.25</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>48.1</p>
								<p>&nbsp;</p>
								<p>780</p>
								</td>
								<td width="112">
								<p>&nbsp;</p>
								<p>20.4</p>
								<p>54.68</p>
								<p>1.72</p>
								<p>0.97</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>5.78</p>
								<p>&nbsp;</p>
								<p>1.03</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>3.54</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>0.71</p>
								<p>&nbsp;</p>
								<p>11.16</p>
								</td>
								</tr>
								<tr>
								<td width="300">
								<p>Total Crop Production</p>
								</td>
								<td width="98">
								<p>&nbsp;</p>
								</td>
								<td width="110">
								<p>6,834.35</p>
								</td>
								<td width="112">
								<p>100</p>
								</td>
								</tr>
								</tbody>
								</table>
								<small>Data source: MAO</small>

						</section>
						<section class="mt-5">
								<p>
									The total production of rice, tiger grass, vegetables, banana, fruit trees and legumes benefits the entire population in general. But for the rice and tiger grass production benefits the farmers belonging to the urban poor.
								</p>
						</section>
			</section>

			<!-- <section>
				<h3 class="mt-1 mb-3">ADMINISTRATIVE SUBDIVISION</h3>
				<p>Bagulin is sub-divided into ten (10 brgys., Namely: Brgys Alibangsay, Baay, Cardiz, Cambaly, Dagup, Libbo, Suyo, Tagudtud, Tio-angan and Wallayan. Wherein Brgy. Suyo is the center of the municipality which is considered as the only urban brgy.</p>
			</section> -->

			<section>
				<h3 class="mt-1 mb-3">LIVESTOCK AND POULTRY</h3>
				<p>Available data for purposes of this characterization are as follows. The distribution of the animal population is not done by the barangay but rather on the total population of the different existing animals in the Municipality.</p>

				<p>1.	Carabao – Carabao population in 2016 was estimated to be 829. The carabao population in the Municipality has declined tremendously due to limited pastureland. Some do not use carabao already for plowing but rather use a mechanize farm equipment which do not require pasture.</p>
				<p>2.	Cattle – Cattle population in the Municipality is only 493 heads. It has not attained increase. This is true because of limited pastureland and reproduction areas. Most of the production is being sold to middle men for butchering.</p>
				<p>3.	Hog/Swine – Hog population registered as 2,409 heads. Hogs are only produced through backyard production ranges from 3 to 30 heads. Some are used for food consumption and some are for business. There is no large scale piggery in the Municipality.</p>
				<p>4.	Goat – only a handful of families are engaged in raising goat in the Municipality. It has an estimated count of 1,163 heads. Almost all of the produce are for family consumption with a minimal percentage are for business purposes.</p>
				<p>5.	Chicken- poultry population accounts for almost 42,530 heads, this were raised at their backyard for family consumption and some for sale at their neighbors. There is no poultry farm found in the municipality. <p>
				<section>
					<h6 class="mt-5 text-center">LIVESTOCK & POULTRY POPULATION</h6>
					<p class="text-center">Bagulin, La Union, 2016</p>
					<table class="table table-bordered table-sm table-sm">
						
						<thead>
						<th width="306">
						<p>Identification</p>
						</th>
						<th width="180">
						<p>Population</p>
						</th>
						</thead>
						<tbody>
						<tr>
						<td width="306">
						<p>&nbsp;</p>
						<p>Carabao</p>
						<p>Cattle</p>
						<p>Hog swine</p>
						<p>Goat</p>
						<p>Chicken</p>
						<p>Other Poultry</p>
						<p>&nbsp;</p>
						</td>
						<td width="180">
						<p>&nbsp;</p>
						<p>1,249</p>
						<p>544</p>
						<p>2,623</p>
						<p>690</p>
						<p>14,642</p>
						<p>&nbsp;</p>
						<p>none</p>
						</td>
						</tr>
						</tbody>
						</table>
						<small>Data source: MAO (Annual report 2018)</small>
				</section>
			</section>
			<section>
				<h3 class="mt-1 mb-3">FORESTRY</h3>

				<p>Area of Forest in the municipality registered a big figure 120 hectares or 1.118%  
            of the total land area of the municipality. These area were those planted through  
            Community Based Forest Management System (CBFMS) found in barangay 
			Alibangsay. Species of trees planted were varieties of narra, gemilena  and not 
			well known specy. Another is the Philippine Business for Social Progress (PBSP)project with an estimated area of 80 hectares which were made possible under the joint effort of the Bauang Power Plant Corporation,   the provincial government of La union and the Ayala Business club. Plant specy are Mahogany and Gemelina. It is quite successful because its implementation was closely monitored by the PBSP.
				</p>
				<p>Forest can be seen in the barangays of Cardiz, Tio-angan, Alibangsay and Libbo, but now slightly deteriorating due to “kaingin” system of farming that gives immediate livelihood of people occupying the area.</p>
				<p>There is no timber produced because forest are being left unattended by DENR personnel.</p>

			</section>

			<section>
				<h3 class="mt-1 mb-3">AGRICULTURAL SUPPORT FACILITIES</h3>

				<h6>Agricultural Support Facilities are classified into two types:</h6>
				<p class="ml-2 mt-3">1.	Those that support production</p>
				<p class="ml-2">2.	Post harvest facilities</p>
				<section>
					<h6>PRODUCTION SUPPORT FACILITES</h6>
					<p class="mt-3">1. Irrigation System</p>
					<p>Irrigation water in the Municipality is sourced from the two creeks namely; Cambaly and Loslosi. Others from Tio-angan river in brgy Tio-angan,  Kumanongkung creek in Tagudtud, cabassitan river in Cardiz, Alibangsay creek in Alibangsay, Wallayan creek in Wallayan and others were sourced from springs. Most irrigated area is found in brgy Cambaly and Suyo which registers a percentage of 1.89% and 0.65%, respectively. These irrigation systems were privately owned by the users.</p>
					<h6 class="text-center">AREAS OF POTENTIAL IRRIGATION</h6>
					<table class="table table-bordered table-sm table-sm">
						
						<thead>
						<th width="148">
						<p>BARANGAY</p>
						</th>
						<th width="141">
						<p>TOTAL AREA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Has.)</p>
						</th>
						<th width="154">
						<p>AGRICULTURAL AREA</p>
						</th>
						<th width="148">
						<p>POTENTIAL AREA FOR IRRIGATION</p>
						</th>
						</thead>
						<tbody>
						<tr>
						<td width="148">
						<p>Alibangsay</p>
						</td>
						<td width="141">
						<p>113.4357</p>
						</td>
						<td width="154">
						<p>163</p>
						</td>
						<td width="148">
						<p>161</p>
						</td>
						</tr>
						<tr>
						<td width="148">
						<p>Baay</p>
						</td>
						<td width="141">
						<p>470.2854</p>
						</td>
						<td width="154">
						<p>116</p>
						</td>
						<td width="148">
						<p>114.8</p>
						</td>
						</tr>
						<tr>
						<td width="148">
						<p>Cambaly</p>
						</td>
						<td width="141">
						<p>886.5251</p>
						</td>
						<td width="154">
						<p>232</p>
						</td>
						<td width="148">
						<p>203</p>
						</td>
						</tr>
						<tr>
						<td width="148">
						<p>Cardiz</p>
						</td>
						<td width="141">
						<p> 598.9</p>
						</td>
						<td width="154">
						<p>195</p>
						</td>
						<td width="148">
						<p>194</p>
						</td>
						</tr>
						<tr>
						<td width="148">
						<p>Dagup</p>
						</td>
						<td width="141">
						<p> 1,420.98</p>
						</td>
						<td width="154">
						<p>226</p>
						</td>
						<td width="148">
						<p>222</p>
						</td>
						</tr>
						<tr>
						<td width="148">
						<p>Libbo</p>
						</td>
						<td width="141">
						<p>606.979</p>
						</td>
						<td width="154">
						<p>107</p>
						</td>
						<td width="148">
						<p>107</p>
						</td>
						</tr>
						<tr>
						<td width="148">
						<p>Suyo</p>
						</td>
						<td width="141">
						<p> 523.967</p>
						</td>
						<td width="154">
						<p>96</p>
						</td>
						<td width="148">
						<p>86</p>
						</td>
						</tr>
						<tr>
						<td width="148">
						<p>Tagudtud</p>
						</td>
						<td width="141">
						<p>432.83</p>
						</td>
						<td width="154">
						<p>122</p>
						</td>
						<td width="148">
						<p>120.80</p>
						</td>
						</tr>
						<tr>
						<td width="148">
						<p>Tioangan</p>
						</td>
						<td width="141">
						<p>1,439.41</p>
						</td>
						<td width="154">
						<p>154</p>
						</td>
						<td width="148">
						<p>151</p>
						</td>
						</tr>
						<tr>
						<td width="148">
						<p>Wallayan</p>
						</td>
						<td width="141">
						<p>363.77</p>
						</td>
						<td width="154">
						<p>128</p>
						</td>
						<td width="148">
						<p>126.7</p>
						</td>
						</tr>
						<tr>
						<td width="148">
						<p>&nbsp;&nbsp;&nbsp;&nbsp; TOTAL</p>
						</td>
						<td width="141">
						<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8,289.84</strong></p>
						</td>
						<td width="154">
						<p>1,533</p>
						</td>
						<td width="148">
						<p>1,486.30</p>
						</td>
						</tr>
						</tbody>
						</table>
						<small>Data Source: MAO</small>
				</section>
				<section class="mt-3">
					<h6 class="text-center">AREA COVERED BY COMMUNAL IRRIGATION SYSTEM</h6>
					<table class="table table-bordered table-sm table-sm">
						
						<thead>
						<th width="164">
						<p>BARANGAY</p>
						</th>
						<th width="213">
						<p>IRRIGATED AREA (Has.)</p>
						</th>
						<th width="213">
						<p>% SHARE (Agr&rsquo;l. Area)</p>
						</th>
						</thead>
						<tbody>
						<tr>
						<td width="164">
						<p>Alibangsay</p>
						</td>
						<td width="213">
						<p>2</p>
						</td>
						<td width="213">
						<p>0.13</p>
						</td>
						</tr>
						<tr>
						<td width="164">
						<p>Baay</p>
						</td>
						<td width="213">
						<p>1.2</p>
						</td>
						<td width="213">
						<p>0.08</p>
						</td>
						</tr>
						<tr>
						<td width="164">
						<p>Cambaly</p>
						</td>
						<td width="213">
						<p>29</p>
						</td>
						<td width="213">
						<p>1.89</p>
						</td>
						</tr>
						<tr>
						<td width="164">
						<p>Cardiz</p>
						</td>
						<td width="213">
						<p>1.0</p>
						</td>
						<td width="213">
						<p>0.06</p>
						</td>
						</tr>
						<tr>
						<td width="164">
						<p>Dagup</p>
						</td>
						<td width="213">
						<p>4</p>
						</td>
						<td width="213">
						<p>0.26</p>
						</td>
						</tr>
						<tr>
						<td width="164">
						<p>Libbo</p>
						</td>
						<td width="213">
						<p>&nbsp;</p>
						</td>
						<td width="213">
						<p>&nbsp;</p>
						</td>
						</tr>
						<tr>
						<td width="164">
						<p>Suyo</p>
						</td>
						<td width="213">
						<p>10</p>
						</td>
						<td width="213">
						<p>0.65</p>
						</td>
						</tr>
						<tr>
						<td width="164">
						<p>Tagudtud</p>
						</td>
						<td width="213">
						<p>1.2</p>
						</td>
						<td width="213">
						<p>0.08</p>
						</td>
						</tr>
						<tr>
						<td width="164">
						<p>Tioangan</p>
						</td>
						<td width="213">
						<p>3</p>
						</td>
						<td width="213">
						<p>0.19</p>
						</td>
						</tr>
						<tr>
						<td width="164">
						<p>Wallayan</p>
						</td>
						<td width="213">
						<p>1.3</p>
						</td>
						<td width="213">
						<p>0.08</p>
						</td>
						</tr>
						<tr>
						<td width="164">
						<p>&nbsp;&nbsp;&nbsp;&nbsp; TOTAL</p>
						</td>
						<td width="213">
						<p>52.5</p>
						</td>
						<td width="213">
						<p>&nbsp;</p>
						</td>
						</tr>
						</tbody>
						</table>
						<small>Data Source: MAO</small>
				</section>
				<section class="mt-5">
					<p>b. Hand Tractors</p>
					<p>It was noted when the Municipal officials went on Outreach Program sa Barangay that even in the upland barangays uses Hand tractors to prepare their farm for planting. It was also estimated that an average of 289  “kuliglig”  is operating within the municipality. Some owned by private & others distributed by the provincial and municipal governments.</p>
				</section>
				<section class="mt-2">
					<p>c. Agricultural Supplies and Credit</p>
					<p>Agriculture supplies were being provided by the sari-sari stores in the poblacion and some business oriented individual in the municipality. Another is the Bagulin Multi-Purpose Credit cooperative incorporation offering agricultural and financial needs to member farmer.</p>
				</section>
				<section class="mt-2">
					<p>d.	Extension Services</p>
					<p>Agriculture supplies were being provided by the sari-sari stores in the poblacion and some business oriented individual in the municipality. Another is the Bagulin Multi-Purpose Credit cooperative incorporation offering agricultural and financial needs to member farmer.</p>
				</section>
				<section class="mt-2">
					<p>d.	Extension Services</p>
					<p>Extension service being is provided by the Municipal Agriculture Office (MAO) in the form of technical assistance to farmers, livestock and poultry raisers.</p>
				</section>
				<section class="mt-4">
					<h6>1.	Services to crop farmers includes:</h6>
					<p class="ml-2">a. Crop production and protection covering rice, vegetables, corn, banana & root crops</p>
					<p class="ml-2">b. Conducting farmer class, meetings, trainings, fieldtrips, hose visits and monitoring & evaluation.</p>
					<p class="ml-2">c. Providing access to palay seeds. Vegetable seeds, fruit tree seedlings fertilizers and other farm inputs.</p>
				</section>
				<section class="mt-2">
					<h6>2. Services to livestock and poultry raiser includes:</h6>
					<p class="ml-2">a. Animal dispersal-cattle, carabao, goat & swine</p>
					<p class="ml-2">b. Veterinary services-treatment./medications, vaccination, castration, supplementary injections & deworming</p>
					<p class="ml-2">c. Technical services - artificial insemination, pregnancy diagnosis, conduct of training & seminars.</p>
				</section>
				<section class="mt-2">
				    <h6>3. Post harvest facilities-includes facilities for handling rice harvests &  animal produced.</h6>
					<p class="ml-2">a. Post harvest facilities available in Bagulin, La Union include:</p>
					<p class="ml-4">1. Rice mills distributed in the different barangays by the provincial government</p>
					<p class="ml-4">2. Multi Purpose Drying pavements</p>
					<p class="ml-4">3. Other rice   and tiger grass facilities public and privately owned include rice threshers, depolinators, rice blowers and other post harvest facilities.</p>
					</section>
				<section>
					
				</section>
			</section>
	</div>
</div>
</div>

@endsection


@section('scripts')
<script type="text/javascript">
	$(document).ready(function() {
		console.clear();
		$sections = $('#content > section');
		
		$sections.addClass('d-none').eq(0).addClass('show').removeClass('d-none');

		var navs = '';
		for (x = 0; x < $sections.length; x++) {
			var content = $sections.eq(x).find('h3').text();
			navs = `<li class="nav-item">
			<a class="nav-link" href="#">${content}</a>
			</li>`;
			$('#navs').append(navs);
		}

		$('#navs .nav-link').eq(0).addClass('active');


		$('#navs .nav-item').click(function() {
			$('#content .show').addClass('d-none').removeClass('show');
			
			console.clear();
			//console.log($(this).index());
			$('#navs .active').removeClass('active');
			$(this).children('.nav-link').addClass('active');

			$('#content > section').eq($(this).index()).addClass('show').removeClass('d-none');
		});

	})
</script>
	
@endsection