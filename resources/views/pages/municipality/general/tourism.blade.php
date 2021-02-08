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
    <h3 class="mb-5 mt-5 card-header text-white text-center mx-auto d-block" >BAGULIN TOURIST DESTINATIONS</h3>
    
  </div>

  <!-- <hr> -->
@foreach ($tourisms as $tourism)
    

  <div class="row">
    <div class="col-sm-6" id="content">
     <section>

      <h4 class="mb-0">{{ $tourism->spot_name }}</h4>
      <h6 class="mb-3"><small>{{ $tourism->spot_location }}</small></h6>
      <p>
       {{ $tourism->spot_description }}
     </p>
   </section>
    <div class="row-fluid">
      <div class="span8">
        {!! $tourism->spot_geolocation !!}     
      </div>
    </div>
  


</div>
<div class="col-sm-6">
 <div class="container w-100" id="caro">
  <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">

    <div class="carousel-inner">
      @foreach ($tourism->tourism_images as $key => $image)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
          <img class="w-100" src="/storage/{{ $image->directory }}/{{ $image->file_name }}">          
        </div>  
      @endforeach
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
@endforeach
</div>
    
@endsection
