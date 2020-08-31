<html>

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Bagulin Admin</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/solid.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/auth.css') }}">
  @yield('auth-styles')
</head>

<body>
  <div id="overlay"></div>
  @yield('content')
  <script src="{{ asset('/js/jquery.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.js') }}"></script>
  <script src="{{ asset('js/admin/script.js') }}"></script>
  @yield('auth-scripts')
</body>

</html>