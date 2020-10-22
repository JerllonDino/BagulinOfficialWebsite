@php
  $offs = array(
    array(
      "name" => "Villaco Tumbaga",
      "year" => "1904-1905",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Cotiog Poclis",
      "year" => "1906-1907",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Way-as Liwangan",
      "year" => "1908-1909",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Malas Alilis",
      "year" => "1910-1911",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Tunged Matias",
      "year" => "1912-1913",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Tuangan Licdan",
      "year" => "1914-1915",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Tunged Matias",
      "year" => "1916-1919",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Lucbao Dangpilen",
      "year" => "1920-1922",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Tuangan Licdan",
      "year" => "1923-1925",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Buansi Tumbaga",
      "year" => "1926-1928",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Victoriano Limpiado",
      "year" => "1929-1931",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Budas Saldo",
      "year" => "1932-1934",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Abalias Saldo",
      "year" => "1935-1937",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Andrew Donguiz",
      "year" => "1938-1940",
      "role" => "Presidente Municipal"
    ),
    array(
      "name" => "Marcelino Soriano",
      "year" => "1941",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Leocadio Soriano",
      "year" => "1942-1943",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Cipriano Jacildone",
      "year" => "1944",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Marcelino Soriano",
      "year" => "1945-1946",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Agustin Lictao",
      "year" => "1947",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Tomas Lictao",
      "year" => "1948-1951",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Alejandro Florendo",
      "year" => "1952-1955",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Felix Rimando",
      "year" => "1956-1959",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Antonio Lictao",
      "year" => "1960-1963",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Florentino Flores",
      "year" => "1964-1967",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Napoleon A. Saldo Sr.",
      "year" => "1968-1971",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Froctuoson Jucutan",
      "year" => "1972-1986",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Eufronsina Calilung",
      "year" => "1986",
      "role" => "OIC-Municipal Mayor"
    ),
    array(
      "name" => "Benjamin C. Flor",
      "year" => "1986",
      "role" => "OIC-Municipal Mayor"
    ),
    array(
      "name" => "Remegio C. Caluza",
      "year" => "1986",
      "role" => "OIC-Municipal Mayor"
    ),
    array(
      "name" => "Salcedo A. Tumbaga",
      "year" => "1986-1998",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Nora D.Tumbaga",
      "year" => "1998-2001",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Salcedo A. Tumbaga",
      "year" => "2001-June 30, 2010",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Ferdinand D. Tumbaga",
      "year" => "2010-June 30, 2019",
      "role" => "Municipal Mayor"
    ),
    array(
      "name" => "Virgilio C. Flor",
      "year" => "July 1, 2019-Present",
      "role" => "Municipal Mayor"
    )
  );
@endphp
@extends('layouts/app')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/timeline-style.css') }}">
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
</style>

@endsection
@section('content')

<header class="cd-main-header text-center flex flex-column flex-center">
  <h1>MUNICIPAL EXECUTIVES</h1>
  <p class="margin-top-sm">1904-Present</p>
</header>

<section class="cd-timeline js-cd-timeline">
  <div class="container max-width-lg cd-timeline__container">
    @foreach ($offs as $off)  
    
      <div class="cd-timeline__block">
        <div class="cd-timeline__img cd-timeline__img--picture">
          
        </div> <!-- cd-timeline__img -->

        <div class="cd-timeline__content text-component">
          <h2>{{ $off['name'] }}</h2>
          <p class="color-contrast-medium">{{ $off['role'] }}</p>

          <div class="flex justify-between items-center">
            <span class="cd-timeline__date">{{ $off['year'] }}</span>
          </div>
        </div> <!-- cd-timeline__content -->
      </div> <!-- cd-timeline__block -->
   
    @endforeach
  </div>  
</section>

@endsection