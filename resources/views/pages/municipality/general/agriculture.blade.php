@extends('layouts/app')

@section('styles')

<style type="text/css">
  .cd-timeline__date {
    color: #303f4a;
    font-weight: bold;
  }
  .cd-timeline {
    background: #efefef;
  }
  .cd-timeline__img--picture {
    background: #B53A3A !important;
  }
  hr{
    border: 0;
    clear:both;
    display:block;
    width: 96%;               
    background-color:#B53A3A;
    height: 5px;
  }
</style>
    
@endsection

@section('content')

<div class="container small pt-3 pb-5">
  <div class="row">
    <h3 class="mb-5 mt-5 card-header text-white text-center mx-auto d-block" style="max-width: 50% !important;">BAGULIN AGRI-PRODUCTS</h3>
    
  </div>

  <!-- <hr> -->

  <div class="row">
    <div class="col-sm-6" id="content">
     <section>

      <h4 class="mb-0">Bagulin Quality Softbrooms</h4>
      <h6 class="mb-3"><small>Bagulin, La Union</small></h6>
      <p>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis arcu purus. Ut id congue turpis, ut venenatis sem. Fusce semper dui ut elit semper tincidunt. Integer mattis eleifend volutpat. Vestibulum sit amet diam pharetra, fermentum lectus in, vehicula nisl. Aenean ut placerat dolor, eget ultrices nulla. In in lectus lobortis, accumsan ex vitae, dictum arcu. Duis interdum in ipsum in sodales. Vestibulum quam ante, maximus sed ultricies nec, malesuada sed quam. Praesent scelerisque iaculis sapien, quis placerat felis facilisis a. In dictum et odio a condimentum. Nunc at nisl non turpis sollicitudin iaculis in quis felis. Mauris sagittis magna vitae varius aliquam. Donec quis feugiat eros.
     </p>


   </section>

 </div>
 <div class="col-sm-6">
   <div class="container w-100" id="caro">
    <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active ">
          <img class="w-100" src="{{asset('img/products/sb1.png')}}">          
        </div>


        <div class="carousel-item ">
          <img class="w-100" src="{{asset('img/products/sb2.png')}}">        
        </div>


        <div class="carousel-item ">
          <img class="w-100" src="{{asset('img/products/sb3.png')}}">        
        </div>


        <div class="carousel-item ">
          <img class="w-100" src="{{asset('img/products/sb4.png')}}">        
        </div>

        <div class="carousel-item ">
          <img class="w-100" src="{{asset('img/products/sb5.png')}}">        
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
</div>
</div>

<hr>

<div class="row mt-5">

  <div class="col-sm-6">
   <div class="container w-100" id="caro">
    <div id="carouselExampleIndicators1" class="carousel slide w-100" data-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active ">
          <img class="w-100" src="{{asset('img/products/ubh1.png')}}">          
        </div>

      </div>
      <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> -->
    </div>
  </div>
</div>

<div class="col-sm-6" id="content">
 <section>

  <h4 class="mb-0">Ube Halaya</h4>
  <h6 class="mb-3"><small>Bagulin, La Union</small></h6>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis arcu purus. Ut id congue turpis, ut venenatis sem. Fusce semper dui ut elit semper tincidunt. Integer mattis eleifend volutpat. Vestibulum sit amet diam pharetra, fermentum lectus in, vehicula nisl. Aenean ut placerat dolor, eget ultrices nulla. In in lectus lobortis, accumsan ex vitae, dictum arcu. Duis interdum in ipsum in sodales. Vestibulum quam ante, maximus sed ultricies nec, malesuada sed quam. Praesent scelerisque iaculis sapien, quis placerat felis facilisis a. In dictum et odio a condimentum. Nunc at nisl non turpis sollicitudin iaculis in quis felis. Mauris sagittis magna vitae varius aliquam. Donec quis feugiat eros.
  </p>


</section>

</div>

<hr>

<div class="row mt-5">
  <div class="col-sm-6" id="content">
   <section>

    <h4 class="mb-0">Ube Puto</h4>
    <h6 class="mb-3"><small>Bagulin, La Union</small></h6>
    <p>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis arcu purus. Ut id congue turpis, ut venenatis sem. Fusce semper dui ut elit semper tincidunt. Integer mattis eleifend volutpat. Vestibulum sit amet diam pharetra, fermentum lectus in, vehicula nisl. Aenean ut placerat dolor, eget ultrices nulla. In in lectus lobortis, accumsan ex vitae, dictum arcu. Duis interdum in ipsum in sodales. Vestibulum quam ante, maximus sed ultricies nec, malesuada sed quam. Praesent scelerisque iaculis sapien, quis placerat felis facilisis a. In dictum et odio a condimentum. Nunc at nisl non turpis sollicitudin iaculis in quis felis. Mauris sagittis magna vitae varius aliquam. Donec quis feugiat eros.
   </p>


 </section>

</div>
<div class="col-sm-6">
 <div class="container w-100" id="caro">
  <div id="carouselExampleIndicators2" class="carousel slide w-100" data-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img class="w-100" src="{{asset('img/products/ubp1.png')}}">          
      </div>
      

    </div>
   <!--  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> -->
  </div>
</div>
</div>
</div>

<hr>

<div class="row mt-5">

  <div class="col-sm-6">
   <div class="container w-100" id="caro">
    <div id="carouselExampleIndicators3" class="carousel slide w-100" data-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="{{asset('img/products/ubc1.png')}}">          
        </div>
        <div class="carousel-item">
          <img class="w-100" src="{{asset('img/products/ubc2.png')}}">          
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<div class="col-sm-6" id="content">
 <section>

  <h4 class="mb-0">Ube Chips</h4>
  <h6 class="mb-3"><small>Bagulin, La Union</small></h6>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis arcu purus. Ut id congue turpis, ut venenatis sem. Fusce semper dui ut elit semper tincidunt. Integer mattis eleifend volutpat. Vestibulum sit amet diam pharetra, fermentum lectus in, vehicula nisl. Aenean ut placerat dolor, eget ultrices nulla. In in lectus lobortis, accumsan ex vitae, dictum arcu. Duis interdum in ipsum in sodales. Vestibulum quam ante, maximus sed ultricies nec, malesuada sed quam. Praesent scelerisque iaculis sapien, quis placerat felis facilisis a. In dictum et odio a condimentum. Nunc at nisl non turpis sollicitudin iaculis in quis felis. Mauris sagittis magna vitae varius aliquam. Donec quis feugiat eros.
  </p>
</section>

</div>

</div>

<hr>

<div class="row mt-5">
  <div class="col-sm-6" id="content">
   <section>

    <h4 class="mb-0">Bugnay Wine</h4>
    <h6 class="mb-3"><small>Bagulin, La Union</small></h6>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis arcu purus. Ut id congue turpis, ut venenatis sem. Fusce semper dui ut elit semper tincidunt. Integer mattis eleifend volutpat. Vestibulum sit amet diam pharetra, fermentum lectus in, vehicula nisl. Aenean ut placerat dolor, eget ultrices nulla. In in lectus lobortis, accumsan ex vitae, dictum arcu. Duis interdum in ipsum in sodales. Vestibulum quam ante, maximus sed ultricies nec, malesuada sed quam. Praesent scelerisque iaculis sapien, quis placerat felis facilisis a. In dictum et odio a condimentum. Nunc at nisl non turpis sollicitudin iaculis in quis felis. Mauris sagittis magna vitae varius aliquam. Donec quis feugiat eros.
    </p>


  </section>

</div>
<div class="col-sm-6">
 <div class="container w-100" id="caro">
  <div id="carouselExampleIndicators4" class="carousel slide w-100" data-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img class="w-100" src="{{asset('img/products/bw1.png')}}">        
      </div>
      <div class="carousel-item ">
        <img class="w-100" src="{{asset('img/products/bw2.png')}}">        
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
</div>




</section>

</div>
</div>

</div>
</div>

    
@endsection