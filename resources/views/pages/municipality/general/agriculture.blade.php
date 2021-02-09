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
    <h3 class="mb-5 mt-5 card-header text-white text-center mx-auto d-block" >BAGULIN AGRI-PRODUCTS</h3>
    
  </div>

  <!-- <hr> -->

  @foreach ($agricultures as $index => $agriculture)
  @php
      $counter = $index + 1;
  @endphp
  <div class="row">
      <div class="col-sm-6 {{ $counter == 1 || $counter%2 == 1 ? '' : 'order-sm-12' }}" id="content">
        <section>
            <h4 class="mb-0">{{ $agriculture->product_name }}</h4>
            <h6 class="mb-3"><small>{{ $agriculture->product_location }}</small></h6>
            <p>
              {{ $agriculture->product_description }}
            </p>
        </section>
      </div>

      <div class="col-sm-6 {{ $counter == 1 || $counter%2 == 1 ? '' : 'order-sm-1' }}">
        <div class="w-100" id="caro">
          <div id="carousel-{{ $index }}" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner">
              @foreach ($agriculture->agriproduct_images as $key => $image)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                  <img class="w-100" src="/storage/{{ $agriculture->directory }}/{{ $image->file_name }}">          
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