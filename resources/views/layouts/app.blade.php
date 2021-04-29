<!DOCTYPE html>
<html>

<head>
  <title>Municipality of Bagulin</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Municipality of Bagulin Government Website">

  @yield('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/solid.css') }}">
  <link rel="stylesheet" href="{{ asset('css/brands.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/logo-2.png') }}" />

  <style>
    .p-5 {
      background: url('img/samplebg.png');
      background-size: cover;
      text-shadow: 0px 0px 8px rgba(0, 0, 0, 0.9);
    }

    #intro {
      width: 100%;
      background-color: rgba(0, 0, 0, 0.1);
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
      padding: 20px;
      margin: none;
      border-collapse: collapse;
    }

    .carousel-item {
      width: 100%;
    }

    .m-frame {
      /* margin-top: 50%; */
      border: 5px solid #B53A3A;
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
      background-color: rgba(0, 0, 0, 0.09);
    }

    .ch {
      overflow: hidden;
    }

    a .ch-click {
      opacity: 0.9;
      border-radius: 3%;
      filter: alpha(opacity=50);
      transition: transform 0.2s;
    }

    a:hover .ch-click {
      transform: scale(1.05);
      transform-origin: 50% 50%;
      opacity: 1;
      filter: alpha(opacity=50);
      box-shadow: -3px 3px 10px -1px black;
    }

    .italic {
      font-style: italic;
      font-family: Monospace;
    }


    .par {
      margin-top: -15px;
    }

    h4 {
      color: #B53A3A;
    }
  </style>
</head>

<body class="bg-body">
  @include('layouts/incs/navbar')
  @include('layouts/incs/banner')

  @yield('content')

  @include('layouts/incs/footers')
  <script>
    function setCookie(name,value,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
          }
          function getCookie(name) {
              var nameEQ = name + "=";
              var ca = document.cookie.split(';');
              for(var i=0;i < ca.length;i++) {
                  var c = ca[i];
                  while (c.charAt(0)==' ') c = c.substring(1,c.length);
                  if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
              }
              return null;
          }

          if (getCookie('page_viewed') === null) {
            $.ajax({
              url: '/views-counter',
              method: 'POST',
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              error: function(res) {
                console.log(res);
              }
            });
            setCookie('page_viewed', 'TRUE', 1);
          }
  </script>
  @yield('scripts')
</body>

</html>