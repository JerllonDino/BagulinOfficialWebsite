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
		<h3 class="card-header text-white text-center mx-auto d-block" style="max-width: 50% !important;">HEALTH PROFILE</h3>
	</div>
	<div class="row mt-3">
		<div class="col-sm-12">
			<section>
				<!-- <h5 class="mb-1 mt-1">ROADS</h5> -->
				<p>
					Figure on the table below shows that HEALTH PERSONNEL and FACILITIES are adequately provided. It can also be summarized as sufficient. But the BAD side is the delivery of immediate services when needed because of the topography affecting the mobilization and transportation side which leads to inaccessibility specifically during rainy season.
				</p>				
			</section>

			<section class="mt-5">
				<center>
					<strong>
						HEALTH PERSONNEL AND HEALTH FACILITIES
						<br />
						Bagulin, La Union – 2018 RHU report

						<br />
						<small> Source: BAGULIN RHU, ANNUAL REPORT 2018</small>
					</strong>
				</center>


				<table class = "table table-condensed table-hover table-bordered table-striped table-sm mt-3">
					<tbody>
						<tr>
							<td colspan="2" width="258">
								<p><strong>Health Personnel</strong></p>
							</td>
							<td width="78">
								<p>Number</p>
							</td>
							<td width="124">
								<p>Status of employment</p>
							</td>
							<td width="96">
								<p>MOTHER UNIT</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>Doctors</p>
							</td>
							<td width="78">
								<p>1</p>
							</td>
							<td width="124">
								<p>PERMANENT</p>
							</td>
							<td width="96">
								<p>MUNICIPAL</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>Nurses</p>
							</td>
							<td width="78">
								<p>1</p>
							</td>
							<td width="124">
								<p>PERMANENT</p>
							</td>
							<td width="96">
								<p>MUNICIPAL</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>Dentist</p>
							</td>
							<td width="78">
								<p>1</p>
							</td>
							<td width="124">
								<p>PERMANENT (SCHEDULE)</p>
							</td>
							<td width="96">
								<p>PROVINCE</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>Medical Technologist</p>
							</td>
							<td width="78">
								<p>1</p>
							</td>
							<td width="124">
								<p>JOB ORDER</p>
							</td>
							<td width="96">
								<p>MUNICIPAL</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>Midwives</p>
							</td>
							<td width="78">
								<p>2</p>
							</td>
							<td width="124">
								<p>PERMANENT</p>
							</td>
							<td width="96">
								<p>MUNICIPAL</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>&nbsp;</p>
							</td>
							<td width="78">
								<p>2</p>
							</td>
							<td width="124">
								<p>CONTRACTUAL</p>
							</td>
							<td width="96">
								<p>MUNICIPAL</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>&nbsp;</p>
							</td>
							<td width="78">
								<p>4</p>
							</td>
							<td width="124">
								<p>JOB ORDER</p>
							</td>
							<td width="96">
								<p>MUNICIPAL</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>&nbsp;</p>
							</td>
							<td width="78">
								<p>3</p>
							</td>
							<td width="124">
								<p>PERMANENT</p>
							</td>
							<td width="96">
								<p>PROVINCE</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>Dental Aides</p>
							</td>
							<td width="78">
								<p>1</p>
							</td>
							<td width="124">
								<p>PERMANENT (SCHEDULE)</p>
							</td>
							<td width="96">
								<p>PROVINCE</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>Rural Sanitary Inspectors</p>
							</td>
							<td width="78">
								<p>1</p>
							</td>
							<td width="124">
								<p>PERMANENT</p>
							</td>
							<td width="96">
								<p>PROVINCE</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>Volunteer Nurses</p>
							</td>
							<td width="78">
								<p>0</p>
							</td>
							<td width="124">
								<p>0</p>
							</td>
							<td width="96">
								<p>0</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>Driver</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="124">
								<p>&nbsp;</p>
							</td>
							<td width="96">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>UtilityWorker</p>
							</td>
							<td width="78">
								<p>&nbsp;</p>
							</td>
							<td width="124">
								<p>&nbsp;</p>
							</td>
							<td width="96">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>Encoder</p>
							</td>
							<td width="78">
								<p>1</p>
							</td>
							<td width="124">
								<p>JOB ORDER</p>
							</td>
							<td width="96">
								<p>MUNICIPAL</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p><strong>Total</strong></p>
							</td>
							<td colspan="3" width="298">
								<p><strong>17</strong></p>
							</td>
						</tr>
						<tr>
							<td colspan="5" width="556">
								<center>
									<p>&nbsp;</p>
									<p><strong>Facilities</strong></p>
								</center>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="258">
								<p>Rural Health Unit</p>
							</td>
							<td colspan="3" width="298">
								<p>1</p>
							</td>
						</tr>
						<tr>
							<td width="257">
								<p>Barangay Health Stations</p>
							</td>
							<td colspan="4" width="298">
								<p>9</p>
							</td>
						</tr>
						<tr>
							<td width="257">
								<p>Lying- in</p>
							</td>
							<td colspan="4" width="298">
								<p>1</p>
							</td>
						</tr>
					</tbody>
				</table>

			</section>


			<section class="mt-5">
				<center>
					<strong>
						MORTALITY REPORT
						<br />
						FHSIS ANNUAL REPORT FOR 2018
						<br />
						<!-- <small>Source: MCR, as of Dec.2018</small> -->
					</strong>
				</center>

				<table class = "table table-condensed table-hover table-bordered table-striped table-sm mt-3">
					<tbody>
						<tr>
							<td>
								<p>DISEASE</p>
							</td>
							<td>
								<p>MALE</p>
							</td>
							<td>
								<p>FEMALE</p>
							</td>
							<td>
								<p>TOTAL</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>COMMUNITY ACQUIRED PNEUMONIA</p>
							</td>
							<td>
								<p>3</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>5</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>CHRONIC DEGENERATIVE HEART DISEASE</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>4</p>
							</td>
							<td>
								<p>4</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>CEREBRO VASCULAR DISEASE</p>
							</td>
							<td>
								<p>3</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>4</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>CHRONIC KIDNEY DISEASE</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>3</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>CARDIO VASCULAR ACCIDENT</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>2</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>HYPOVOLEMIC SHOCK</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>2</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>CHRONIC OBSTRUCTIVE PULMONARY DISEASE</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>2</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>PNEUMONIA</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>2</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>ANEMIA</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>2</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>DM TYPE II</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>1</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>SUDDEN CARDIAC DEATH</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>1</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>SPASTITIC CEREBRAL PALSY</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>1</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>HYPERTENSION</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>1</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>HEPATITIS</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>1</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>CARCINOMA</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>3</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>CRUSHING INJURY OF AHEAD</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>1</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>DROWING</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>1</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>SEPTICAEMIA</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>1</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>BACTERIAL MENINGITIS</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>1</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>TRACHEOESOPHAGEAL FISTULA</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>1</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>OTHER SUDDEN DEATH</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>2</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>TOTAL</p>
							</td>
							<td>
								<p>26</p>
							</td>
							<td>
								<p>15</p>
							</td>
							<td>
								<p>41</p>
							</td>
						</tr>
					</tbody>
				</table>

				

			</section>

			<section class="mt-5">
				<center>
					<strong>
						MORBIDITY DISEASES REPORT
						<br />
						FHSIS ANNUAL REPORT FOR 2018

						<br />
						<!-- <small>Source: MCR, as of Dec.2018</small> -->
					</strong>
				</center>

				<table class = "table table-condensed table-hover table-bordered table-striped table-sm mt-3">
					<tbody>
						<tr>
							<td>
								<p><strong>DISEASE</strong></p>
							</td>
							<td>
								<p><strong>MALE</strong></p>
							</td>
							<td>
								<p><strong>FEMALE</strong></p>
							</td>
							<td>
								<p><strong>TOTAL</strong></p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>ARI</strong></p>
							</td>
							<td>
								<p>599</p>
							</td>
							<td>
								<p>454</p>
							</td>
							<td>
								<p>1,053</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>HYPERTENSION</strong></p>
							</td>
							<td>
								<p>362</p>
							</td>
							<td>
								<p>315</p>
							</td>
							<td>
								<p>677</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>RHINITIS</strong></p>
							</td>
							<td>
								<p>222</p>
							</td>
							<td>
								<p>166</p>
							</td>
							<td>
								<p>388</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>BRONCHITIS</strong></p>
							</td>
							<td>
								<p>61</p>
							</td>
							<td>
								<p>60</p>
							</td>
							<td>
								<p>121</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>UTI</strong></p>
							</td>
							<td>
								<p>145</p>
							</td>
							<td>
								<p>70</p>
							</td>
							<td>
								<p>215</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>ACUTE TONSILO-PHARYNGITIS</strong></p>
							</td>
							<td>
								<p>43</p>
							</td>
							<td>
								<p>43</p>
							</td>
							<td>
								<p>86</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>DERMATITIS</strong></p>
							</td>
							<td>
								<p>85</p>
							</td>
							<td>
								<p>57</p>
							</td>
							<td>
								<p>142</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>WOUND</strong></p>
							</td>
							<td>
								<p>48</p>
							</td>
							<td>
								<p>70</p>
							</td>
							<td>
								<p>118</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>PUD/ GASTRITIS</strong></p>
							</td>
							<td>
								<p>100</p>
							</td>
							<td>
								<p>69</p>
							</td>
							<td>
								<p>169</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>ARTHRITIS</strong></p>
							</td>
							<td>
								<p>74</p>
							</td>
							<td>
								<p>25</p>
							</td>
							<td>
								<p>99</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>AGE</strong></p>
							</td>
							<td>
								<p>61</p>
							</td>
							<td>
								<p>61</p>
							</td>
							<td>
								<p>122</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>DM</strong></p>
							</td>
							<td>
								<p>51</p>
							</td>
							<td>
								<p>47</p>
							</td>
							<td>
								<p>98</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>BRONCHIAL ASTHMA</strong></p>
							</td>
							<td>
								<p>35</p>
							</td>
							<td>
								<p>27</p>
							</td>
							<td>
								<p>62</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>CUTANEOUS ABSCESS</strong></p>
							</td>
							<td>
								<p>12</p>
							</td>
							<td>
								<p>25</p>
							</td>
							<td>
								<p>37</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>OTITIS MEDIA/EXTERNAL</strong></p>
							</td>
							<td>
								<p>32</p>
							</td>
							<td>
								<p>25</p>
							</td>
							<td>
								<p>57</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>CLUSTER HEADACHE/MIGRAINE</strong></p>
							</td>
							<td>
								<p>37</p>
							</td>
							<td>
								<p>28</p>
							</td>
							<td>
								<p>65</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>CELLULITIS</strong></p>
							</td>
							<td>
								<p>29</p>
							</td>
							<td>
								<p>50</p>
							</td>
							<td>
								<p>79</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>FLU/INFLUENZA</strong></p>
							</td>
							<td>
								<p>24</p>
							</td>
							<td>
								<p>18</p>
							</td>
							<td>
								<p>42</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>ANIMAL BITE</strong></p>
							</td>
							<td>
								<p>7</p>
							</td>
							<td>
								<p>8</p>
							</td>
							<td>
								<p>15</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>ANEMIA</strong></p>
							</td>
							<td>
								<p>22</p>
							</td>
							<td>
								<p>17</p>
							</td>
							<td>
								<p>39</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>DENTAL CARRIES/TOOTHACHE</strong></p>
							</td>
							<td>
								<p>14</p>
							</td>
							<td>
								<p>8</p>
							</td>
							<td>
								<p>22</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>URTICARIA</strong></p>
							</td>
							<td>
								<p>5</p>
							</td>
							<td>
								<p>6</p>
							</td>
							<td>
								<p>11</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>SENILE CATARACT</strong></p>
							</td>
							<td>
								<p>4</p>
							</td>
							<td>
								<p>18</p>
							</td>
							<td>
								<p>22</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>STOMATITIS</strong></p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>4</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>CONJUNCTIVITIS</strong></p>
							</td>
							<td>
								<p>7</p>
							</td>
							<td>
								<p>10</p>
							</td>
							<td>
								<p>17</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>DENGUE FEVER/RELAPSING</strong></p>
							</td>
							<td>
								<p>17</p>
							</td>
							<td>
								<p>17</p>
							</td>
							<td>
								<p>34</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>ABDOMINAL COLIC</strong></p>
							</td>
							<td>
								<p>9</p>
							</td>
							<td>
								<p>6</p>
							</td>
							<td>
								<p>15</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>CYSTITIS</strong></p>
							</td>
							<td>
								<p>12</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>14</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>BURN</strong></p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>4</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>MASS</strong></p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>1</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>PTB</strong></p>
							</td>
							<td>
								<p>3</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>5</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>ERROR OF REFRACTION</strong></p>
							</td>
							<td>
								<p>8</p>
							</td>
							<td>
								<p>13</p>
							</td>
							<td>
								<p>21</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>VIRAL EXANTHEM</strong></p>
							</td>
							<td>
								<p>11</p>
							</td>
							<td>
								<p>12</p>
							</td>
							<td>
								<p>23</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>PHYSICAL INJURY</strong></p>
							</td>
							<td>
								<p>7</p>
							</td>
							<td>
								<p>8</p>
							</td>
							<td>
								<p>15</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>ANGINA PECTORIS</strong></p>
							</td>
							<td>
								<p>4</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>4</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>VERTIGO</strong></p>
							</td>
							<td>
								<p>7</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>8</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>NEUTRIS</strong></p>
							</td>
							<td>
								<p>53</p>
							</td>
							<td>
								<p>13</p>
							</td>
							<td>
								<p>66</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>ACUTE SINUSITIS</strong></p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>2</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>CHF</strong></p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>2</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>COPD</strong></p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>4</p>
							</td>
							<td>
								<p>6</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>IHD</strong></p>
							</td>
							<td>
								<p>1</p>
							</td>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>1</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><strong>CONSTIPATION</strong></p>
							</td>
							<td>
								<p>5</p>
							</td>
							<td>
								<p>2</p>
							</td>
							<td>
								<p>7</p>
							</td>
						</tr>
					</tbody>
				</table>

				
				

			</section>

			<section class="mt-5">
				<center>
					<strong>
						FAMILY PLANNING METHODS AND USERS 2018
						<br />
						<!-- <small>Source: MCR, as of Dec.2018</small> -->
					</strong>
				</center>

				<table class = "table table-condensed table-hover table-bordered table-striped table-sm mt-3">
					<tbody>
						<tr>
							<td rowspan="2" width="79">
								<p><strong>INDICATIONS&nbsp;&nbsp; </strong></p>
								<p><strong>&nbsp;</strong></p>
							</td>
							<td rowspan="2" width="96">
								<p><strong>CURRENT USER</strong></p>
								<p><strong>(BEGIN)</strong></p>
							</td>
							<td width="86">
								<p><strong>ACCEPTORS</strong></p>
								<p><strong>&nbsp;</strong></p>
							</td>
							<td width="60">
								<p><strong>&nbsp;</strong></p>
							</td>
							<td rowspan="2" width="72">
								<p><strong>DROP OUT</strong></p>
							</td>
							<td rowspan="2" width="72">
								<p><strong>CURRENT</strong></p>
								<p><strong>USER</strong></p>
								<p><strong>&nbsp; end</strong></p>
							</td>
							<td rowspan="2" width="72">
								<p><strong>CPR</strong></p>
								<p><strong>1700</strong></p>
							</td>
						</tr>
						<tr>
							<td width="86">
								<p>&nbsp;</p>
								<p><strong>NEW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; OTHERS</strong></p>
							</td>
							<td width="60">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr>
							<td width="79">
								<p><strong>Female Sterility/BTL</strong></p>
							</td>
							<td width="96">
								<p>220</p>
							</td>
							<td width="86">
								<p>&nbsp;&nbsp;&nbsp;&nbsp; 7</p>
							</td>
							<td width="60">
								<p>38</p>
							</td>
							<td width="72">
								<p>5</p>
							</td>
							<td width="72">
								<p>260</p>
							</td>
							<td width="72">
								<p>15.15</p>
							</td>
						</tr>
						<tr>
							<td width="79">
								<p><strong>Male Sterility/ Vasectomy</strong></p>
							</td>
							<td width="96">
								<p>3</p>
							</td>
							<td width="86">
								<p>1</p>
							</td>
							<td width="60">
								<p>1</p>
							</td>
							<td width="72">
								<p>1</p>
							</td>
							<td width="72">
								<p>4</p>
							</td>
							<td width="72">
								<p>0.23</p>
							</td>
						</tr>
						<tr>
							<td width="79">
								<p><strong>Pills</strong></p>
							</td>
							<td width="96">
								<p>312</p>
							</td>
							<td width="86">
								<p>18</p>
							</td>
							<td width="60">
								<p>115</p>
							</td>
							<td width="72">
								<p>104</p>
							</td>
							<td width="72">
								<p>341</p>
							</td>
							<td width="72">
								<p>19.87</p>
							</td>
						</tr>
						<tr>
							<td width="79">
								<p><strong>IUD</strong></p>
							</td>
							<td width="96">
								<p>59</p>
							</td>
							<td width="86">
								<p>8</p>
							</td>
							<td width="60">
								<p>7</p>
							</td>
							<td width="72">
								<p>11</p>
							</td>
							<td width="72">
								<p>63</p>
							</td>
							<td width="72">
								<p>3.67</p>
							</td>
						</tr>
						<tr>
							<td width="79">
								<p><strong>Injectables (DMPA)</strong></p>
							</td>
							<td width="96">
								<p>169</p>
							</td>
							<td width="86">
								<p>10</p>
							</td>
							<td width="60">
								<p>91</p>
							</td>
							<td width="72">
								<p>97</p>
							</td>
							<td width="72">
								<p>173</p>
							</td>
							<td width="72">
								<p>10.08</p>
							</td>
						</tr>
						<tr>
							<td width="79">
								<p><strong>NFP-CM</strong></p>
							</td>
							<td width="96">
								<p>0</p>
							</td>
							<td width="86">
								<p>0</p>
							</td>
							<td width="60">
								<p>0</p>
							</td>
							<td width="72">
								<p>0</p>
							</td>
							<td width="72">
								<p>0</p>
							</td>
							<td width="72">
								<p>0</p>
							</td>
						</tr>
						<tr>
							<td width="79">
								<p><strong>NF-BBT</strong></p>
							</td>
							<td width="96">
								<p>0</p>
							</td>
							<td width="86">
								<p>0</p>
							</td>
							<td width="60">
								<p>0</p>
							</td>
							<td width="72">
								<p>0</p>
							</td>
							<td width="72">
								<p>0</p>
							</td>
							<td width="72">
								<p>0</p>
							</td>
						</tr>
						<tr>
							<td width="79">
								<p><strong>NFP-STM</strong></p>
							</td>
							<td width="96">
								<p>0</p>
							</td>
							<td width="86">
								<p>0</p>
							</td>
							<td width="60">
								<p>0</p>
							</td>
							<td width="72">
								<p>0</p>
							</td>
							<td width="72">
								<p>0</p>
							</td>
							<td width="72">
								<p>0</p>
							</td>
						</tr>
						<tr>
							<td width="79">
								<p><strong>NFP-SDM</strong></p>
							</td>
							<td width="96">
								<p>79</p>
							</td>
							<td width="86">
								<p>19</p>
							</td>
							<td width="60">
								<p>46</p>
							</td>
							<td width="72">
								<p>46</p>
							</td>
							<td width="72">
								<p>94</p>
							</td>
							<td width="72">
								<p>5.48</p>
							</td>
						</tr>
						<tr>
							<td width="79">
								<p><strong>NFP-LAM</strong></p>
							</td>
							<td width="96">
								<p>93</p>
							</td>
							<td width="86">
								<p>35</p>
							</td>
							<td width="60">
								<p>135</p>
							</td>
							<td width="72">
								<p>167</p>
							</td>
							<td width="72">
								<p>96</p>
							</td>
							<td width="72">
								<p>5.59</p>
							</td>
						</tr>
						<tr>
							<td width="79">
								<p><strong>Condom</strong></p>
							</td>
							<td width="96">
								<p>42</p>
							</td>
							<td width="86">
								<p>4</p>
							</td>
							<td width="60">
								<p>31</p>
							</td>
							<td width="72">
								<p>9</p>
							</td>
							<td width="72">
								<p>68</p>
							</td>
							<td width="72">
								<p>3.96</p>
							</td>
						</tr>
						<tr>
							<td width="79">
								<p><strong>Implant</strong></p>
							</td>
							<td width="96">
								<p>19</p>
							</td>
							<td width="86">
								<p>0</p>
							</td>
							<td width="60">
								<p>26</p>
							</td>
							<td width="72">
								<p>12</p>
							</td>
							<td width="72">
								<p>33</p>
							</td>
							<td width="72">
								<p>1.92</p>
							</td>
						</tr>
						<tr>
							<td width="79">
								<p><strong>&nbsp;&nbsp;&nbsp;&nbsp; TOTAL</strong></p>
							</td>
							<td width="96">
								<p>996</p>
							</td>
							<td width="86">
								<p>102</p>
							</td>
							<td width="60">
								<p>486</p>
							</td>
							<td width="72">
								<p>452</p>
							</td>
							<td width="72">
								<p>1132</p>
							</td>
							<td width="72">
								<p>65.97</p>
							</td>
						</tr>
					</tbody>
				</table>
				

			</section>




		</div>
	</div>
</div>
@endsection