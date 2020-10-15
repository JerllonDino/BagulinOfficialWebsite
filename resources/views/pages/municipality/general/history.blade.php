@extends('layouts/app')

@php
$offs = array(
    array(
      "desc" => "In 1903, the American regime established a parliamentary government and institutional facilities established. Education was introduced and a bamboo community hall roofed with cogon grass was erected. Bagulin was then under the jurisdiction of Mountain Province, sub-province of Benguet with La Trinidad as its capital. By 1918, under the agreement of Governor Guzman of Mt. Province and Governor Pio Ancheta of La Union, Bagulin became a municipal district of Burgos under the Province of La Union.",
      "year" => "1903",
    ),
    array(
      "desc" => "In 1922, Mt. Province totally relinquished the municipality of Bagulin to the Province of La Union. During that time, however Bagulin was considered only a municipal district of La Union. In 1928, the community center was moved to a nearby settlement called Suyo where the present poblacion is situated. The former community was named Nangalisan, which means an abandoned place in ilocano dialect. Settlers who improved Suyo were ilocanos from Naguilian. At that time, a bamboo chalet was constructed to serve as an Administrative hall. ",
      "year" => "1922",
    ),
    array(
      "desc" => "It was only in June 25, 1963, by virtue of Executive Order No. 42 issued by President Diosdado Macapagal that Bagulin was converted into a regular municipality.",
      "year" => "1963",
    ),
    array(
      "desc" => "In 1970, a combined concrete and bamboo chalet municipal building was constructed and improved in 1991.",
      "year" => "1970",
    ),
    array(
      "desc" => "Another development was the construction of two (2) storey reinforced Concrete Municipal building funded by the Earthquake rehabilitation fund in 1991.",
      "year" => "1991",
    ),
    array(
      "desc" => "In 2008, the Municipal Government applied for a loan with the Development Bank of the Philippines for the Construction of a 2 Storey Municipal Building which is now the present Municipal Building.",
      "year" => "2008",
    )
);
@endphp

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/timeline-style.css') }}">
<style>
html {
    font-family: sans-serif !important;
  line-height: 1.15 !important;
  -webkit-text-size-adjust: 100% !important;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0) !important;
}
</style>
@endsection

@section('content')
<div class="container small pt-3 pb-5">
    <div class="row">
        <div class="col-12" id="content">
        <section>
        <h3 class="mb-5 mt-5 card-header text-white text-center mx-auto d-block" style="min-width: 50% !important;">THE HISTORY OF BAGULIN, LA UNION</h3>
        <h4 class="mb-5 mt-5 ">MYTHICAL ORIGIN</h4>
        <p>
        Its name “Bagulin” was coined from “Bago” and “Ulin”. It is said that during the early days, an Igorot named Bago wanted to find out what the bluish crystal part of the earth that he saw from the upland areas. One day, he set out towards the west and upon reaching the shores of China Sea, he found out it was a body of salty water. While he was day dreaming along the shore, he saw a beautiful lass drowning in the waves. Bago immediately went to rescue the girl. That was the first acquaintance of Bago, the young and daring highlander with Ulin, the lowlander lass. They fell in love with each other and air castles found their way in these young hearts. Plans for their wedding had been the subject for their whispers. Unfortunately, Bago was not welcomed by Ulin’s parents. However, love knew no bound, the two eloped and they settled in the place now called Bagulin, coined after their names.
        </p>
        <h4 class="mb-5 mt-5">THE FOUNDING OF THE TOWN</h4>
        <section class="cd-timeline js-cd-timeline">
        <div class="container max-width-lg cd-timeline__container">
        @foreach ($offs as $off)
        <div class="cd-timeline__block">
            <div class="cd-timeline__img cd-timeline__img--picture">
            </div> <!-- cd-timeline__img -->
            <div class="cd-timeline__content text-component">
                <p class="h6">{{$off['desc']}}</p>
                <div class="flex justify-between items-center">
                    <span class="cd-timeline__date">{{$off['year']}}</span>
                </div>
            </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->
        @endforeach

        </section>
    </div>
</div>
</div>

@endsection