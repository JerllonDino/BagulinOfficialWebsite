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
		<h3 class="card-header text-white text-center mx-auto d-block" >GEOPHYSICAL ENVIRONMENT</h3>
	</div>
	<div class="row mt-3">
		<div class="col-3">
			<ul class="nav nav-pills flex-column" id="navs">
			</ul>
		</div>
		<div class="col-9" id="content">
			
			<section>
				<h3 class="mb-3 mt-1">GEOGRAPHIC LOCATION</h3>
				<p>
					The Municipality of Bagulin, La Union is located at the easternmost part of the province of La Union. It is generally mountainous and forested. Though it is already an interior town, it is geographically located at the center of the province.
				</p>
				<p>
					It is situated along latitudes 16 33’30” to 16 40’20” north and longitudes 120 25’to 120 32’25 east. it is bounded by  the following municipalities : 
				</p>
				<ul class="list-unstyled">
					<li>North		-	Municipality of San Gabriel, La Union</li>	
					<li>Northwest	-	Municipality of San Juan, La Union</li>
					<li>West		-	Municipality of San Fernando, La Union</li>
					<li>Southeast	-	Municipality of Naguilian, La Union</li>
					<li>South		-	Municipality of Burgos, La Union</li>
					<li>East		-	Municipality of Kapangan, Benguet</li>
				</ul>
				<p>
					Aside from these politcal boundaries, other natural features serve as landmark of municipal boundaries with other nearby towns. On the north at Mt. Mogong are spot elevations of 1,034 and 1,133 meters in Brgy.  Cardiz is tributary of Cabasitan River, on the northwestern town boundary with San Gabriel. On the southern part, the highest peak at Sitio Mankaeng in San Antonio, Naguilian, has a waterfall where a common boundary with Naguilian is shared.
				</p>
				<p>
					Bagulin is 31 kms away from San Fernando City, the regional center, 13 kms   away from Naguilian, its nearby town and 52 kms away from Baguio City. Its main entrance to lowland municipalities is thru the 13 kms Naguilian-Bagulin Road. Because of fast development that takes place it could now be reached by any type of vehicles of land transportation via the town of Naguilian at any season of the year.
				</p>
				<p>
					Other entrance to the town are thru the San Fernando-Bagulin Road, Balbalosa-Bagulin Road, Duplas–Bagulin road from San Juan, Teklad-Papayo road from San Gabriel and Burgos-Bagulin road, all of the province of La Union, though partly inaccessible during rainy season.
				</p>
			</section>

			<section>
				<h3 class="mt-1 mb-3">TOPOGRAPHY</h3>
				<p>
					Generally, the entire town of Bagulin is mountainous. Lowest spot elevation is found at Barangay Dagup at 155 meters above sea levels, slowly descending to a plateau down to Cabasitan River where the boundary with the town of San Juan is found. The highest peak is at Barangay Cadriz, the northernmost barangay at 1,034 and 1,113 meter above sea level, where a common boundary with the province of Benguet is shared.
				</p>
				<p>
					For propose of uniform description of location, barangay location and directions, the Poblacion will always be referred to as the center, where from there the following directions and locations of barangays:
				</p>
				<ul>
					<li>a. Suyo (poblacion)			-Center</li>
					<li>b. Dagup				-North</li>
					<li>c. Cardiz				-Northernmost</li>
					<li>d .Alibangsay				-Northeast</li>
					<li>e. Cambaly				-Southeast</li>
					<li>f.Wallayan				-Southernmost</li>
					<li>
						G. Interior barangays
						<ul>
							<li>-Tagudtud, Baay, Libbo		-Southeast interior</li>
							<li>-Tioangan				-Northeast interior</li>
						</ul>
					</li>
				</ul>
			</section>

			<section>
				<h3 class="mt-1 mb-3">SLOPES</h3>

				<section class="mt-1">
					<span></span>
					<h5>Suyo (Poblacion)</h5>
					<p>From the steep lands of the northern section of the town, elevation descends from 20-100 meters above sea level, and with slope 8-15% above where there are moderately and undulating land sloping in many directions. Lands with moderate slopes are planted with tiger grass as main source of investment, rice, bananas, root crops and citrus trees. Hilly areas are abundant with cogon. Some high areas are planted with forest trees, having 15- 30%
						<span></span>
					</section>
					<section class="mt-1">
						<span></span>
						<h5>Dagup</h5>
						<p>Found across the Naguilian River from Poblacion, generally having 8-15% slopes on its plateaus; terrain is moderately and undulating and rolling, sloping in many directions. On its northernmost part is 15-30% slopes where land is steeply undulating and sloping, hilly and mountainous.
							<span></span>
						</section>
						<section class="mt-1">
							<span></span>
							<h5>Cambaly and Wallayan</h5>
							<p>Barangay Cambaly is adjacent to the Poblacion, while Wallayan is at the southernmost part of Bagulin. These two barangays share similar terrain, slopes and vegetables cover. Highest spot elevation is found at Mt. Pongpong, 648 meters above sea level in Barangay Cambaly, where common boundary with Barangay Tagudtud is shared. Slope are form 8-15% at the center and goes up to 8-30% on the northern part up to Barangay Alibangsay. Note that on its central portion are found small rice terraces, which looks like miniature of the famous Banaue Rice Terraces. Also found are tiger grass, banana trees, root crops and fruit trees.
								<span></span>
							</section>
							<section class="mt-1">
								<span></span>
								<h5>Alibangsay</h5>
								<p>This ba	rangay is found northeast of the poblacion, one third of its total land area, on its eastern side are steep rock mountainous and thick forests, where slope is from 30-50%. On its western side slope is from 15-30%.
									<span></span>
								</section>
								<section class="mt-1">
									<span></span>
									<h5>Cardiz</h5>
									<p>Cardiz is the northernmost barangay where steep and rugged terrains are found. It is generally forested and heavily planted with wild and common trees. Slopes ranges from 25-50% where terrain is steeply undulating and sloping in many directions to many mountainous and hilly areas. Highest spot elevation is at 1,133 neters above sea level, found at Mt. Mogong.
										<span></span>	
									</section>
									<section class="mt-1">
										<span></span>
										<h5>Tagudtud, Baay, Libbo and Tio-angan</h5>
										<p>Barangay Tagudtud, Baay, Libbo and Tio-angan are considered interior barangays because they are geographically found at the most inner part of Bagulin. They share more or less similar slopes, terrain and vegetative covers. These are generally mountainous areas where high cliffs and huge rock formation are found. Slopes    are generally from 30-50%.
											<span></span>
										</section>
									</section>

									<section>
										<h3 class="mt-1 mb-3">SLOPE RANGES AND AREA COVERED</h3>
										<table class="table table-bordered table-sm">
											<thead>
												<th width=40>Slope</th>
												<th width=80>Land Area</th>
												<th width=120>Slope Grouping Interpretation</th>
												<th width=120>Recommended Use</th>
											</thead>
											<tbody>
												<tr>
													<td>15-18%</td>
													<td></td>
													<td>Moderate Slope</td>
													<td>Intensive for agricultural Tiger grass, rice bananas, root crops and citrus trees.</td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td>Steeply undulating to many directions</td>
													<td>Suitable for Forest trees and pasture lands.</td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>15-30%</td>
													<td></td>
													<td>Hilly</td>
													<td>Intensive for pasturelands</td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>25-50%</td>
													<td></td>
													<td>Terrains is steeply undulating land sloping and many directions</td>
													<td>suited for fruit and root crops</td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>30-50%</td>
													<td></td>
													<td>Steep rock mountains  and thick forest</td>
													<td>suitable for pasturelands</td>
												</tr>
											</tbody>
										</table>
									</section>

			<!-- <section>
				<h3 class="mt-1 mb-3">ADMINISTRATIVE SUBDIVISION</h3>
				<p>Bagulin is sub-divided into ten (10 brgys., Namely: Brgys Alibangsay, Baay, Cardiz, Cambaly, Dagup, Libbo, Suyo, Tagudtud, Tio-angan and Wallayan. Wherein Brgy. Suyo is the center of the municipality which is considered as the only urban brgy.</p>
			</section> -->

			<section>
				<h3 class="mt-1 mb-3">ELEVATION</h3>
				<p>The highest spot elevations at 1,133 meters above sea level found at Mt. MOGONG of Barangay Cardiz and the lowest elevation is at Brgy Dagup at 155 meters above sea level.</p>

				<p class="mb-0 mt-1"><strong>Table 3. Elevation by Land Classification</strong></p>
				<table class="table table-bordered table-sm">
					<thead>
						<th>
							<p align=center><b>Elevation</b></p>
						</th>
						<th>
							<p align=center><b>A&amp;D
							(ha)</b></p>
						</th>
						<th>
							<p align=center><b>Forestland
							(ha)</b></p>
						</th>
						<th>
							<p align=center><b>Total</b></p>
						</th>
					</thead>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>0-100</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>476.08</p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>34.49</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>510.57</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>100-200</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>662.82</p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>409.19</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>1,072.01</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>200-300</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>864.23</p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>778.63</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>1,642.86</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>300-400</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>780.03</p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>828.27</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>1,608.3</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>400-500</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>633.32</p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>779.75</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>1,413.07</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>500-600</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>292.16</p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>712.98</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>1,005.14</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>600-700</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>183.66</p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>737.89</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>921.55</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>700-800</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>38.3</p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>766.77</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>805.07</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>800-900</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center><font color="#000000">&nbsp;</font></p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>739.62</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>739.62</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>900-1000</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center><font color="#000000">&nbsp;</font></p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>608.64</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>608.64</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>1000-1100</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center><font color="#000000">&nbsp;</font></p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>291.72</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>291.72</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>1100-1200</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center><font color="#000000">&nbsp;</font></p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>77.06</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>77.06</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>1200-1300</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center><font color="#000000">&nbsp;</font></p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>22.59</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>22.59</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center>1300-1400</p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center><font color="#000000">&nbsp;</font></p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>3.15</p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center>3.15</p>
						</td>
					</tr>
					<tr>
						<td width=120 valign=top bgcolor="#ffffff">
							<p align=center><b>total</b></p>
						</td>
						<td width=121 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center><b>3,930.6</b></p>
						</td>
						<td width=144 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center><b>6,790.75</b></p>
						</td>
						<td width=92 valign=bottom bgcolor="#ffffff">
							<p class="western" align=center><b>10,721.35</b></p>
						</td>
					</tr>
				</table>
				<small>Data source:  LMB, DENR</small>
			</section>
			<section>
				<h3 class="mt-1 mb-3">TERRAIN / RELIEF</h3>

				<p>The Municipality has a very rugged terrain, consisting of hills and mountains. As    one goes east, the municipality contour becomes higher.</p>

			</section>

			<section>
				<h3 class="mt-1 mb-3">DRAINAGE AND WATER SURFACE</h3>

				<p>Major water surface is the Naguilian River, which comes directly from the mountains of Benguet where its major tributaries are found. It flows from Bagulin down to Naguilian and to Bauang. Said river virtually bisects the whole town into two, that of the north and south of the said river. Other water surface is the Cabassitan River, which flows down to the lowlands of the Municipality of San Gabriel down again to the Municipality of San Juan, La Union. Other bodies of water are creeks, brooks that are primarily tributaries of the Naguilian River. Naguilian River is the only river in Region 1 that discharges large volume of water during summer; it is feasible also for HYDROPOWER plant development and already surveyed by ABOITIZ group of companies in 1995. All rivers, creeks and ditches serve as drainage system of the Municipality.</p>

				<p>The Cabasitan river wherein it is a common boundary with San Gabriel is also a natural drainage. This is also surveyed and proposed by the TEAM ENERGY for a series of 3 mini-dams for the proposed site of Mini hydro power plant that is proposed to generate a total power of 5 MVa.</p>
			</section>

			<section>
				<h3 class="mt-1 mb-3">EROSION</h3>

				<p>Areas having slopes of more than 30% without protective coating are prone to erosions, likewise, with areas along rivers and creeks. Although rivers and creeks serve as drainage, an evident of erosion is also observed after heavy rainfall. Some areas of soft foundation also erode even without rain. This is found in sitio Gueday at barangay  Tio-angan. Terraces hillside where rice is planted, erosion is minimal.</p>
			</section>

			<section>
				<h3 class="mt-1 mb-3">VEGETATIVE COVER</h3>

				<p>The hills and mountain of Bagulin are sparely forested and wood is scarce because of the excessive cutting of wood and practice of “kaingin”.  Dominant cover of hills and mountain are tiger grass, cogon grass and banana plantation. Because of the limited primary agricultural lands, people in the place made some terraces among mountains and hills where water is abundant and irrigation can be made.</p>
			</section>

			<section>
				<h3 class="mt-1 mb-3">GEOLOGY</h3>

				<p>
					The inner structures of Bagulin, La Union were developed on hard igneous bedrock.  They have developed from the andesitic rocks.  Rocks on the south-western portion of the town are of Oligocene Miocene while other portions are of the upper Miocene Pliocene.
				</p>
				<section class="mt-1">
					<span></span>
					<h5>Soils Types, Land Capacity, Soil Suitability and Load Bearing Capability</h5>
					<span></span>


					Data taken from the 1981 La Union Provincial Socio-Economic Profile and the 1958 Municipal Atlas of Bagulin, there are three (3) types and classes of soils in town described as follows:
					<ul>
						<li class="mt-2"><strong>1. Bauang Clay:</strong>   Alibangsay, Cambaly, Suyo, Dagup, and Wallayan</li>
						Soil is prone to erosion due to steep slope and rather fine subsoil. This type of clay is recommended for forest and woodland uses, controlled and rotated grazing, fertilization and liming, too shallow for cultivation. Good for pasture or forest with careful management.

						<li class="mt-2"><strong>2. Burgos Clay:</strong> Barangays Cardiz and portion of Dagup</li>
						Soil with prone to erosion due to steep slope and fine subsoil. The soil is too shallow for cultivation but not prone to flooding. It is recommended for forest or woodland, controlled and rotated grazing, fertilization and liming.

						<li class="mt-2"><strong>3. Mountain Soils:</strong> Interior barangays of Tio-angan and Baay</li>
						With very hilly and mountainous soil it is prone to erosion because of rugged mountain, but not prone to flooding. It should be reserved for reforestation, wildlife preservation and for recreation.
					</ul>
				</section>
				<section class="mt-1">
					<h5>Mineral and Geologic Characteristics</h5>
					Sometime ago, geologist discovered mineral reserves in Bagulin, namely white clay, which is potential source for ceramics, coal deposits, copper and gold. Coal is found abundant Naguilian River particularly in Tabelew of brgy Alibangsay  and other minerals like gold and copper in Barangay Alibangsay up to Tio-angan .There is no extensive study or exploration of the geologic characteristics of the town to be able to determine the exact or estimated volume of these mineral deposits.
				</section>	  				
			</section>

			<section>
				<h3 class="mt-1 mb-3">LAND AREA</h3>

				<p>
					The municipal atlas map gathered from the NAMREA, Bagulin has a total land area of 10,010 hectares, but later survey that uses more precise measuring devices under CAD Survey # 812-D approved on October 26,1986, the total land area of Bagulin is 10,721.35 hectares.
				</p>
				<p>
					Bagulin is 7.18% of the provincial land area. The Poblacion which is considered urban has a land area of 498.227 hectares or 4.64% of the municipal area, the rest 95.36% are the remaining barangays.
				</p>
			</section>

			<section>
				<h3 class="mt-1 mb-3">EXISTING LAND USES</h3>

				<p>
					Only the Poblacion (Brgy, Suyo ) has a total land area of 492.36 hectares is indentified as the municipality’s urban core considering the strategic location. Development is started in this barangay and spreads to Barangay Cambaly, the two being adjacent to the Poblacion.
				</p>
				<ul>
					<li><strong> A.	RESIDENTIAL</strong>
						<p>
							Residential area occupies a total area of 6.81 hectares or 1.38% of the total urban area. Buildings are single detached or multi-detached dwelling unit are built along major thoroughfares and some are found in all directions adjacent to the Municipal Building.
						</p>

					</li>

					<li><strong> B.	COMMERCIAL</strong>
						<p>
							The 0.027 hectares commercial area or 0.0055% of the urban barangay is scattered near the municipal building where the demolished public market is located. Commercial district is gradually expanding along main roads from the front of the municipal building going to Naguilian; going to 3 Northern barangays of the Municipality like Dagup, Alibangsay and Cardiz; and going to Southern barangays of the municipality like Cambaly, Tagudtud, Baay and Libbo. The 1.0 hectare site of the new Public Market is not of strategic location because old commercial centers still exist and all goods offered in the new Public Market is also there.
						</p>

					</li>


					<li><strong> C.	INDUSTRIAL</strong>
						<p>
							Business activity within the industrial area includes Rice Mill, Hollow Blocks Making and Bakeries. These business establishments occupy a total area of 0.04 hectares or 0.005% of the total urban area. These establishments are located within the mixed uses along major roads leading to the Municipality of Naguilian from the front of the Municipal Building.
						</p>

					</li>

					<li><strong> D.	INSTITUTIONAL</strong>
						<p>
							The zone occupies a total land area of 1.92 hectares or 0.39% of the total urban area. It is being used for religious, educational, social and for government purposes. Only a government-ran educational institution offering an Elementary and High School education is located within the Educational Zone. A Roman Catholic and Baptist Church occupies a total land area of 0.7179 hectares or 0.137% of the total urban area. The Rural Health Unit, the PNP and the Municipal Building, which occupies a total area of 0.368 hectares, is within the zone.
						</p>

					</li>

					<li><strong> E.	AGRICULTURAL</strong>
						<p>
							Agriculture is the main source of income of the people of Bagulin. Agricultural land occupies a total area of 408.19 hectares or 82.90% of the total urban area. Most of these lands are located at Sitio Ogaoan, Nanagalisan, Picao and at Suyo Central of Poblacion. Some are at foot of the mountains and a terraces type along creeks and rivers and some are at hills.
						</p>

					</li>

					<li><strong>F.	ESPECIAL USES</strong>
						<ol class="ml-3">
							<li>
								<strong>1. Cemetery</strong>
								<p>0.27 hectares or 0.17%of the total urban area is devoted to the only cemetery but government owned in Bagulin. This cemetery is located 0.80 Kms away from the municipal hall and along Suyo-Cambaly road. Its elevation is higher than that of the residential zone in the Poblacion</p>
							</li>
							<li>
								<strong> 2.	Slaughterhouse</strong>
								<p>0.27 hectares or 0.17%of the total urban area is devoted to the only cemetery but government owned in Bagulin. This cemetery is located 0.80 Kms away from the municipal hall and along Suyo-Cambaly road. Its elevation is higher than that of the residential zone in the Poblacion</p>
							</li>
						</ol>
					</li>

					<li><strong>G.	PARKS AND PLAYGROUND</strong>
						<p>
							Only the municipal plaza has a covered Basketball Court, is considered playground. It has also a small space of about 500 square meters. Its surrounding is temporarily used as for Park. 
						</p>

					</li>

					<li><strong> H.	ROAD NETWORK</strong>
						<p>
							Road in the Urban area has a total length of 10.46 kms or 9.53% of the total road length of the municipality. 9.36 Kms of which is concrete road and is being maintained by the provincial government for the Provincial road same with National and Municipal roads. With 33.0 linear meters concrete bridge (named Suyo bridge #1) located at Coruz, Suyo along Bagulin-Naguilian Road. Another bridge is the Suyo bridge #2 having a total length of 220 meters, connecting the Bagulin – San Fernando road. The municipal government is maintaining 0.70 kms concrete road and 1.1 kms earth/dirt road is owned by the barangay government and jointly maintained with the municipal government.
						</p>

					</li>

					<li><strong> I.	CREEKS/RIVERS</strong>
						<p>
							The Bagulin-Naguilian River is the biggest body of water traversing the Poblacion. It virtually bisects the Poblacion into two, which is the north and south portion. Other creeks are the Pumayaspas, Lowetan, Picao, Nangalisan, Loslosi and Ogaoan creeks. All these creeks were primarily utilized for irrigation purposes, and act as drainage/waterways during rainy season. Another is the Cabasitan river wherein it is the common boundary with San Gabriel.
						</p>

					</li>
					<li><strong> Table: EXISTING URBAN LAND-USE (2017)</strong>
						<small class="mt-1">Data Source:  Office of the Mun Assessor </small>
						<table class="table table-bordered table-sm">
							<tr>
								<th>
									<strong>LAND-USE CATEGORY</strong>
								</th>
								<th>
									<strong> EXISTING</strong>
								</th>
							</tr>
							<tr>
								<td colspan = "2">
									<strong> BUILD-UP:</strong>
								</td>

							</tr>

							<tr>
								<td>
									Residential	
								</td>
								<td>
									6.81
								</td>
							</tr>
							<tr>
								<td>
									Settlement
								</td>
								<td>

								</td>
							</tr>
							<tr>
								<td>
									Commercial
								</td>
								<td>
									0.027
								</td>
							</tr>
							<tr>
								<td>

									Infrastructure/utilities (Roads and bridges = 9.1kms to 10.2kms)

								</td>
								<td>
									7.28
								</td>
							</tr>
							<tr>
								<td>
									Institutional (Sch, Church, Brgy Hall & Mun Bldg)
								</td>
								<td>
									1.92
								</td>
							</tr>
							<tr>
								<td>
									Parks/Playground and other recreational spaces (Covered court)
								</td>
								<td>
									0.5
								</td>
							</tr>
							<tr>
								<td>
									Industrial
								</td>
								<td>
									0
								</td>
							</tr>
							<tr>
								<td>
									Agriculture
								</td>
								<td>
									408.19
								</td>
							</tr>

							<tr>
								<td colspan="2">
									<strong>FOREST AND FOREST USE CATEGORIES</strong>
								</td>
							</tr>

							<tr>
								<td>
									Grassland/pasture (Nangalisan-9 has; Kimalogong-3has; Krus -3has; along cambaly road-0.0172has)
								</td>
								<td>
									15.0172
								</td>
							</tr>

							<tr>
								<td>
									Inland Water
								</td>
								<td>
									45.78
								</td>
							</tr>

							<tr>
								<td>
									Agro Industrial
								</td>
								<td>

								</td>
							</tr>

							<tr>
								<td>
									ECO-TOURISM ( Loslosi Falls)
								</td>
								<td>
									1.0
								</td>
							</tr>

							<tr>
								<td colspan="2">
									<strong>
										OTHER LAND USES CATEGORIES:
									</strong>
								</td>
							</tr>

							<tr>
								<td>
									Cemeteries
								</td>
								<td>
									0.27
								</td>
							</tr>

							<tr>
								<td>
									Controlled Dumpsite (A=0.3658 has)
								</td>
								<td>
									0.3658
								</td>
							</tr>

							<tr>
								<td>
									Others, (river sand/gravel quarrying, coral reef, seagrass beds)
								</td>
								<td>
									5.0
								</td>
							</tr>

							<tr>
								<td>
									<strong>
										Grand Total
									</strong>
								</td>	
								<td>
									492.36
								</td>
							</tr>
							
						</table>



					</li>


					<li>
						<strong> Table: EXISTING URBAN LAND-USE (2017)</strong>
						<small>Data Source: Municipal Assessors Office Tax Mapping Result</small>
						<table class="table table-bordered table-sm">
							<tr>
								<th>
									<strong>LAND USE</strong>
								</th>
								<th>
									<strong>LAND AREA (in hectares)</strong>

								</th>
								<th>
									<strong>% to TOTAL</strong>
								</th>
							</tr>

							<tr>
								<td>
									Residential
								</td>
								<td>
									31.812
								</td>
								<td>
									0.296
								</td>
							</tr>

							<tr>
								<td>
									Institutional
								</td>
								<td>
									51.611
								</td>
								<td>
									0.481
								</td>
							</tr>

							<tr>
								<td>
									Comercial
								</td>
								<td>
									1.215
								</td>
								<td>
									0.0113
								</td>
							</tr>

							<tr>
								<td>
									Agricultural
								</td>
								<td>
									8,095.165
								</td>
								<td>
									75.423
								</td>
							</tr>

							<tr>
								<td>
									Timberland (Classified )
								</td>
								<td>
									120
								</td>
								<td>
									1.118
								</td>
							</tr>

							<tr>
								<td>
									Road Networks (102.07kmX6m width)
								</td>
								<td>
									61.242
								</td>
								<td>
									0.571
								</td>
							</tr>

							<tr>
								<td>
									Creeks/Rivers/Water Bodies
								</td>
								<td>
									2,369.22
								</td>
								<td>
									22.074
								</td>
							</tr>

							<tr>
								<td>
									Open Spaces
								</td>
								<td>
									0
								</td>
								<td>
									0
								</td>
							</tr>

							<tr>
								<td>
									Industrial
								</td>
								<td>
									0.263
								</td>
								<td>
									0.00245
								</td>
							</tr>

							<tr>
								<td>
									Parks and Playground
								</td>
								<td>
									0.112
								</td>
								<td>
									0.00104
								</td>
							</tr>

							<tr>
								<td>
									Special Uses
								</td>
								<td>
									2.3563
								</td>
								<td>
									0.0219
								</td>
							</tr>

							<tr>
								<td>
									<strong>
										Total
									</strong>
								</td>
								<td>
									<strong>
										10,721.36	Has
									</strong>
								</td>
								<td>
									<strong>
										100%
									</strong>
								</td>
							</tr>


						</table>






					</li>

					<li><strong><h4 class="mt-1 mb-3">OTHER EXISTING LAND USES</h4></strong>
						<ul class="ml-3">

							<li><strong>Agricultural</strong>
								<p>
									Based on the latest Tax Mapping Survey conducted by the Municipal Assessor’s Office, 8,095.165 hectares or 75.423% of the total municipal land area is used for agricultural purposes. These include irrigated, unirrigated lands and rainfed lands, kaingin and previously developed for various farming purposes. The remaining agricultural areas especially upland, pasture land, cogon land suitable for cultivation, forest land and  unclassified timberland are generally located at all barangays.
								</p>
							</li>

							<li><strong>Fishpond (Creeks, Rivers and Water Bodies)</strong>
								<p>
									There were no fishponds operating for commercial purposes. Only the Bagulin River that tilapia fingerlings were freed for communal fishing. Variety of freshwater fish is also found like carp, tilapia, commonly named bunog, tibek, kampa, porong and other fresh water fish. Eel is also abundant in the river.
								</p>
							</li>

							<li><strong>Institutional:  </strong>
								<p>
									Institutional land area in Bagulin totals to 51.611 hectares or 0.481% distributed as 3.02 hectares for government; 1.09 hectares for religious dominated by the Roman Catholic Church; 16.72 hectares for education purposes purely owned by the government and 30.39 hectares for other uses, the Rural Health Unit and the municipal building.
								</p>
							</li>

							<li><strong>Special Uses </strong>
								<p>
									As discussed in the urban land uses, those having environmental impact and significance consist of slaughterhouse, cemeteries, cockpits, parks and playgrounds  and all together they occupy about 2.3563 hectares or 0.22% of the total municipal land area.
								</p>
							</li>

							<li><strong>Road Network </strong>
								<p>
									Road length in the municipality totals to142.265 kms of which 5.21 km is national road, 14.057 km is provincial, and 123.29 is barangay roads.
								</p>
								<p>
									A total concreted road is 98.54 kms or 69.07% of which 4.77 kms is National Road; 14.057 km is Provincial Road.
								</p>
								<p>
									A total of 41.45 km or 29.14% is Earth Road wherein Some portions of these roads are NOT passable during rainy season.
								</p>
							</li>

							<li><strong>Parks & playground: </strong>
								<p>
									In sitio Kudal of Barangay Tagudtud, one of the highest peak is where the PEOPLES PARK is located. Its attraction is overlooking the Lingayen gulf and the whole Province of La Union and Pangasinan. Its is planted with Pine trees that makes the wind blows cool.
								</p>
							</li>

						</ul>

					</li>

					<li>
						<strong> Table: LAND AREA PER BARANGAY (Built Up, Agricultural & forest land)
</strong>
						<small>Data Source: 1. Municipal Assessor (CAD 812 - D)
</small>
						<table class="table table-bordered table-sm">
							<tr>
								<th>
									<strong>
											BARANGAYS
									</strong>
								</th>
								<th>
									<strong>
											TOTAL AREA
									</strong>
								</th>
								<th>
									<strong>
											BUILT UP AREA <SMALL>(IN HECTARS)</SMALL>
									</strong>
								</th>
								<th>
									<strong>
											PERCENT TO TOTAL LAND AREA <SMALL>(BUILT UP)</SMALL>
									</strong>
								</th>
								<th>
									<strong>
											AGRICULTURAL AREA <SMALL>(IN HAS.)</SMALL>
									</strong>
								</th>
								<th>
									<strong>
											FOREST AREA <SMALL>(IN .HAS)</SMALL>
									</strong>
								</th>
							</tr>

							<tr>
								<td colspan="6">
									<strong>
										Urban Barangay
									</strong>
								</td>
							</tr>

							<tr>
								<td>
									 Suyo (Poblacion)
								</td>
								<td>
									492.36
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									0
								</td>
							</tr>

							<tr>
								<td>
									 Sub-Total 
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									0
								</td>
							</tr>

							<tr>
								<td colspan="6">
									<strong>
										Rural Barangay
									</strong>
								</td>
							</tr>

							<tr>
								<td>
									 Alibangsay
								</td>
								<td>
									1119.90
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									165
								</td>
								<td>
									440.70
								</td>
							</tr>

							<tr>
								<td>
									 Baay
								</td>
								<td>
									470.78
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									116
								</td>
								<td>
									470.78
								</td>
							</tr>

							<tr>
								<td>
									 Cambaly
								</td>
								<td>
									854.37
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									232
								</td>
								<td>
									93.98
								</td>
							</tr>

							<tr>
								<td>
									 Cardiz
								</td>
								<td>
									2256.09
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									195
								</td>
								<td>
									2147.98
								</td>
							</tr>

							<tr>
								<td>
									Dagup
								</td>
								<td>
									1411.82
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									226
								</td>
								<td>
									11.96
								</td>
							</tr>

							<tr>
								<td>
									 Libbo
								</td>
								<td>
									1744.20
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									107
								</td>
								<td>
									1744.20
								</td>
							</tr>

							<tr>
								<td>
									 Tagudtud
								</td>
								<td>
									436.16
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									122
								</td>
								<td>
									283.57
								</td>
							</tr>

							<tr>
								<td>
									 Tio-angan
								</td>
								<td>
									1431.84
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									154
								</td>
								<td>
									1431.84
								</td>
							</tr>

							<tr>
								<td>
									 Wallayan
								</td>
								<td>
									503.84
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									128
								</td>
								<td>
									165.74
								</td>
							</tr>

							<tr>
								<td>
									 Sub-Total  
								</td>
								<td>
									<strong>									10,288.99
									</strong>
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									<strong>
										1,437.00
									</strong>
								</td>
								<td>
									<strong>
										6,790.75
									</strong>
								</td>
							</tr>

							<tr>
								<td>
									 T O T A L
								</td>
								<td>
									<strong>
										10,721.35
									</strong>
								</td>
								<td>
									
								</td>
								<td>
									
								</td>
								<td>
									<strong>
										1,533.00
									</strong>
								</td>
								<td>
									<strong>
										6,790.75
									</strong>
								</td>
							</tr>

						</table>
						
					</li>




				</ul>
				
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
			$('#navs .active').removeClass('active');
			$(this).children('.nav-link').addClass('active');

			$('#content > section').eq($(this).index()).addClass('show').removeClass('d-none');
		});

	})
</script>
@endsection