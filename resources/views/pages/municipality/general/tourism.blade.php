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

  <div class="row">
    <div class="col-sm-6" id="content">
     <section>

      <h4 class="mb-0">Kudlap Burial Cave</h4>
      <h6 class="mb-3"><small>Cambaly, Bagulin, La Union</small></h6>
      <p>
       Featuring ancient artifacts, the burial cave was declared as a National Cultural Treasure under proclamation No. 1683. The way going to the cave is 300 meter trail which is about 700 feet above sea level. The cave is a preservation of distinct and rich cultural heritage of the people of Bagulin.
     </p>
   </section>
    <div class="row-fluid">
      <div class="span8">
        <iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1351.9631229105487!2d120.46652036839942!3d16.580072659665554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339197229c0d77f5%3A0x7cc2578b7f446a81!2sKudal%20Park!5e0!3m2!1sen!2sus!4v1572939715475!5m2!1sen!2sus"></iframe>        
      </div>
    </div>
  


</div>
<div class="col-sm-6">
 <div class="container w-100" id="caro">
  <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img class="w-100" src="{{asset('img/tspot/Kudlap/Kudlap1.png')}}">          
      </div>


      <div class="carousel-item ">
        <img class="w-100" src="{{asset('img/tspot/Kudlap/Kudlap2.png')}}">          
      </div>


      <div class="carousel-item ">
        <img class="w-100" src="{{asset('img/tspot/Kudlap/Kudlap3.png')}}">          
      </div>


      <div class="carousel-item ">
        <img class="w-100" src="{{asset('img/tspot/Kudlap/Kudlap4.png')}}">          
      </div>

      <div class="carousel-item ">
        <img class="w-100" src="{{asset('img/tspot/Kudlap/Kudlap5.png')}}">          
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
          <img class="w-100" src="{{asset('img/tspot/Tili/Tili1.png')}}">          
        </div>


        <div class="carousel-item ">
          <img class="w-100" src="{{asset('img/tspot/Tili/Tili2.png')}}">          
        </div>

        <div class="carousel-item ">
          <img class="w-100" src="{{asset('img/tspot/Tili/Tili3.png')}}">          
        </div>




      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<div class="col-sm-6" id="content">
 <section>

  <h4 class="mb-0">Tili Nuang Falls</h4>
  <h6 class="mb-3"><small>Cardiz, Bagulin, La Union</small></h6>
  <p>

   Despite it's name roughly translated to "A Water Buffalo's Anus", the place offers a great picnic area and an enjoyable dip to its rushing clear waters in the natural pools.
 </p>
</section>

  <div class="row-fluid">
    <div class="span8">
      <iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1351.9631229105487!2d120.46652036839942!3d16.580072659665554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339197229c0d77f5%3A0x7cc2578b7f446a81!2sKudal%20Park!5e0!3m2!1sen!2sus!4v1572939715475!5m2!1sen!2sus"></iframe>        
    </div>
  </div>

</div>

<hr>

<div class="row mt-5">
  <div class="col-sm-6" id="content">
   <section>
    <h4 class="mb-0">Kudal Park / People's Park</h4>
    <h6 class="mb-3"><small>Tagudtud, Bagulin, La Union</small></h6>
    <p>
    Known as the “Little Baguio” this place offers a taste of soothing pine breeze overlooking the West Philippine Sea</p>
  </section>
  
    <div class="row-fluid">
      <div class="span8">
        <iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1351.9631229105487!2d120.46652036839942!3d16.580072659665554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339197229c0d77f5%3A0x7cc2578b7f446a81!2sKudal%20Park!5e0!3m2!1sen!2sus!4v1572939715475!5m2!1sen!2sus"></iframe>        
      </div>
    </div>
  

</div>
<div class="col-sm-6">
 <div class="container w-100" id="caro">
  <div id="carouselExampleIndicators2" class="carousel slide w-100" data-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img class="w-100" src="{{asset('img/tspot/Kudal/Kudal1.png')}}">          
      </div>
      <div class="carousel-item">
        <img class="w-100" src="{{asset('img/tspot/Kudal/Kudal2.png')}}">          
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
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
    <div id="carouselExampleIndicators3" class="carousel slide w-100" data-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="{{asset('img/tspot/Loslosi/Loslosi1.png')}}">          
        </div>

      </div>
     <!--  <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> -->
    </div>
  </div>
</div>


<div class="col-sm-6" id="content">
 <section>

  <h4 class="mb-0">Loslosi Falls</h4>
  <h6 class="mb-3"><small>Suyo, Bagulin, La Union</small></h6>
  <p>
  Stands high and welcome its visitors with a majestic view. The waterfalls are made up of different cascades. It is about four (4) tiers and cascades down at different heights. The place offers a great picnic area and an enjoyable dip to its rushing clear waters in the natural pools and cascades. Tourists will enjoy its fresh air, sleep under the trees and also a plunge in a river downhill near the waterfalls. </p>
</section>

  <div class="row-fluid">
    <div class="span8">
      <iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.257650938679!2d120.4440805141279!3d16.61383338854653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339196a86f26d849%3A0xbb179417f4945280!2sLoslosi%20Water%20Falls!5e0!3m2!1sen!2sus!4v1572939890083!5m2!1sen!2sus"></iframe>        
    </div>
  </div>


</div>

</div>

<hr>

<div class="row mt-5">
  <div class="col-sm-6" id="content">
   <section>

    <h4 class="mb-0">Suyo-Picao Hanging Footbridge</h4>
    <h6 class="mb-3"><small>Tagudtud, Bagulin, La Union</small></h6>
    <p>
      With 74 meters from the Municipal Town Hall it is the longest hanging footbridge in La Union (220 meters length and 1.30 meters width) and 15 meters high above the Bagulin river.
    </p>
  </section>
  
    <div class="row-fluid">
      <div class="span8">
        <iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1351.9631229105487!2d120.46652036839942!3d16.580072659665554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339197229c0d77f5%3A0x7cc2578b7f446a81!2sKudal%20Park!5e0!3m2!1sen!2sus!4v1572939715475!5m2!1sen!2sus"></iframe>        
      </div>
    </div>
  
</div>
<div class="col-sm-6">
 <div class="container w-100" id="caro">
  <div id="carouselExampleIndicators4" class="carousel slide w-100" data-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img class="w-100" src="{{asset('img/tspot/bridge/Bridge1.png')}}">          
      </div>
      <div class="carousel-item">
        <img class="w-100" src="{{asset('img/tspot/bridge/Bridge2.png')}}">          
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

<hr>


<div class="row mt-5">

  <div class="col-sm-6">
   <div class="container w-100" id="caro">
    <div id="carouselExampleIndicators5" class="carousel slide w-100" data-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="{{asset('img/tspot/Bulalakaw/Bulalakaw1.png')}}">          
        </div>
        <div class="carousel-item">
          <img class="w-100" src="{{asset('img/tspot/Bulalakaw/Bulalakaw2.png')}}">          
        </div>
        <div class="carousel-item">
          <img class="w-100" src="{{asset('img/tspot/Bulalakaw/Bulalakaw3.png')}}">          
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators5" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<div class="col-sm-6" id="content">
 <section>

  <h4 class="mb-0">Bulalakaw Falls</h4>
  <h6 class="mb-3"><small>Alibangsay, Bagulin, La Union</small></h6>
  <p>
    Its an amazing waterfall with crystal clear water that would entice everyone to swim which also includes a breathtaking 15-20 minutes trekking adventure that will make your visit more enjoyable and memorable
  </p>
</section>

  <div class="row-fluid">
    <div class="span8">
      <iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.4977125445553!2d120.48013441412779!3d16.601771888553813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391967d791db8f1%3A0x9fe39beabc56741f!2sBulalakaw%20Falls!5e0!3m2!1sen!2sus!4v1572939979522!5m2!1sen!2sus"></iframe>        
    </div>
  </div>

</div>
</div>

</div>
</div>
    
@endsection
