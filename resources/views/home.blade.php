@extends('layouts/app')

@section('content')
<!-- Body -->
<div id="body" class="container pt-3 pb-5 small">
    <div class="row">
      <div class="col-md-9">
        <div>

        </div>
        <!-- Carousel -->
        <div class="container w-100" id="caro">
          <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active ">
              <img class="w-100" src="img/1.jpg">
            </div>


            <div class="carousel-item ">
              <img class="w-100" src="img/2.jpg">
            </div>


            <div class="carousel-item ">
              <img class="w-100" src="img/3.jpg">
            </div>


            <div class="carousel-item ">
              <img class="w-100" src="img/4.jpg">
            </div>


            <div class="carousel-item ">
              <img class="w-100" src="img/5.jpg">
            </div>


            <div class="carousel-item ">
              <img class="w-100" src="img/6.jpg">
            </div>

            <div class="carousel-item ">
              <img class="w-100" src="img/7.jpg">
            </div>

            <div class="carousel-item ">
              <img class="w-100" src="img/8.jpg">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>


  <div class="container mt-3">
    <div class="row">
      <div class="col-6 col-md-4 my-1">
        <a class="ch" href="municipality/general/bagulin_history.php">
          <img class="img-fluid" src="img/c-history.png" />
        </a>

      </div>
      <div class="col-6 col-md-4 my-1">
        <a class="ch" href="municipality/general/bagulin_tourism.php">
          <img class="img-fluid" src="img/c-tourism.png" />
        </a>
      </div>
      <div class="col-6 col-md-4 my-1 mx-auto">
        <a class="ch" href="municipality/general/bagulin_agriculture.php">
          <img class="img-fluid" src="img/c-agriculture.png" />
        </a>
      </div>

    </div>

  </div>



  </div><!--Left-->

  <div class="col-md-3 pt-3 pt-lg-0">
    <div class="sticky-top">

      <!-- Anouncements -->
      <div class="bg-light" id="anouncements">
        <h6 class="p-2 text-white text-center mb-1 card-header">Announcements</h6>
        <div class="list-group small">
        </div>
      </div>

      <!-- Quick Facts -->
      <div class="bg-light mt-3">
        <h6 class="p-2 text-white text-center mb-0 mb-3 card-header">Quick Facts</h6>
        <div class="" id="facts">
          <div class="p-5 text-center text-white show">
            <h6>Land Area</h6>
            <h4>10,733 hectares</h4>
          </div>
          <div class="p-5 text-center text-white" style="display: none;">
            <h6>Population</h6>
            <h4>15,109</h4>
          </div>
          <div class="p-5 text-center text-white" style="display: none;">
            <h6>Number of Barangays</h6>
            <h4>10 barangays</h4>
          </div>
          <div class="p-5 text-center text-white" style="display: none;">
            <h6>Classification</h6>
            <h4>5th class</h4>
          </div>
          <div class="p-5 text-center text-white" style="display: none;">
            <h6>Fiestas and Festivals</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Foundation Day/Bagulin Day (June 25)</li>
              <li class="list-group-item">Boyboy Festival (March), Pudit (March)</li>
              <li class="list-group-item">Patronal Fiesta (St. Joseph Parish) March 19</li>
              <li class="list-group-item">Cambaly Day (February 21)</li>
            </ul>
          </div>
          <div class="p-5 text-center text-white" style="display: none;">
            <h6>Tourist Attractions</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Kudlap Cave (Burial Cave)</li>
              <li class="list-group-item">Bulalakaw Falls</li>
              <li class="list-group-item">People"s Park (Kudal Park)</li>
              <li class="list-group-item">Tili Nuang Falls</li>
              <li class="list-group-item">Nakapandagan Falls</li>
              <li class="list-group-item">Bagulin Hanging</li>
              <li class="list-group-item">Footbridge</li>
              <li class="list-group-item">Loslosi Falls</li>
            </ul>
          </div>
          <div class="p-5 text-center text-white" style="display: none;">
            <h6>Products</h6>
            <p>
              Rice, Softbrooms, Fresh water fish, corn,
              vegetables, livestock, fruits (banana,
              rambutan, lansones,)
            </p>
          </div>
          <div class="p-5 text-center text-white" style="display: none;">
            <h6>Market day</h6>
            <h5>Fridays</h5>
          </div>

        </div>
      </div>
    </div>

  </div><!--Right-->

  </div>
  </div>
@endsection