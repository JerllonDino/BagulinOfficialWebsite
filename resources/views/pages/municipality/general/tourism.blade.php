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

@foreach ($tourisms as $index => $tourism)
  @php
      $counter = $index + 1;
  @endphp
  <div class="row">
      <div class="col-sm-6 {{ $counter == 1 || $counter%2 == 1 ? '' : 'order-sm-12' }}" id="content">
        <section>
            <h4 class="mb-0">{{ $tourism->spot_name }}</h4>
            <h6 class="mb-3"><small>{{ $tourism->spot_location }}</small></h6>
            <p>
              {{ $tourism->spot_description }}
            </p>
        </section>
        <div class="row-fluid">
          <div class="span8">
            @if ($tourism->spot_geolocation)
              <iframe src="{{ $tourism->spot_geolocation }}" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            @endif
          </div>
        </div>
      </div>

      <div class="col-sm-6 {{ $counter == 1 || $counter%2 == 1 ? '' : 'order-sm-1' }}">
        <div class="w-100" id="caro">
          <div id="carousel-{{ $index }}" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner">
              @foreach ($tourism->tourism_images as $key => $image)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                  <img class="w-100" src="/storage/{{ $tourism->directory }}/{{ $image->file_name }}">          
                </div>  
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carousel-{{ $index }}" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-{{ $index }}" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
</div>

<br>
<br>
<br>
<br>
@endforeach
</div>
    
@endsection
