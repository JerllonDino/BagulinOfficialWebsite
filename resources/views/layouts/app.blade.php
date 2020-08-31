<!DOCTYPE html>
<html>
    <head>
        <title>Bagulin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        @yield('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/solid.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="shortcut icon" href="{{ asset('img/logo-2.png') }}"/>

        <style>
          .p-5{
              background: url('img/samplebg.png');
              background-size: cover;
              text-shadow: 0px 0px 8px rgba(0,0,0,0.9);
            }
            #intro{
              width: 100%;
              background-color: rgba(0,0,0,0.1);
              box-shadow: 0px 5px 10px rgba(0,0,0,0.3);
              padding: 20px;
              margin: none;
              border-collapse: collapse;
            }
            .carousel-item {
              width: 100%;
            }
            .m-frame{

              margin-top: 50%;
              border:5px solid #B53A3A;
              box-shadow: 0px 5px 10px rgba(0,0,0,0.3);
              background-color: rgba(0,0,0,0.09);
            }
            .ch{
              overflow: hidden;
            }
            a .ch-click{
              opacity: 0.9;
              border-radius: 3%;
              filter: alpha(opacity=50);
              transition: transform 0.2s;
            }
          a:hover .ch-click{
              transform: scale(1.05);
              transform-origin: 50% 50%;
              opacity: 1;
              filter: alpha(opacity=50);
              box-shadow: -3px 3px 10px -1px black;
            }
            .italic{
              font-style: italic;
              font-family: Monospace;
            }


            .par{
              margin-top: -15px;
            }
            h4{
              color: #B53A3A;
            }
        </style>
    </head>
    <body class="bg-body">
        @include('layouts/incs/navbar')
        @include('layouts/incs/banner')

        @yield('content')

        @include('layouts/incs/footers')
        @yield('scripts')
    </body>
</html>