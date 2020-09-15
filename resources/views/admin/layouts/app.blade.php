
<html>

<head>
  <title>Bagulin Admin</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/solid.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/sidenav.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
  @yield('styles')
</head>

<body>
  <div class="popup" style="display:none;"></div>
  <div class="wrapper">
    @php
    $uri = Route::current()->uri;
    @endphp
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3><img src="{{ asset('img/bagulin.png') }}" alt="bagulin" style="width:100%" class="mx-auto"></h3>
        <strong><img src="{{ asset('img/logo-2.png') }}" alt="bagulin" style="width:100%" class="mx-auto"></strong>
      </div>

      <ul class="list-unstyled components">
        <li class="{{ $uri == 'admin/dashboard' ?  'active' : '' }}">
          <a href="/admin/dashboard">
            <i class="fas fa-table"></i>
            Dashboard
          </a>
        </li>
        <li class="{{ $uri == 'admin/announcements' ?  'active' : '' }}">
          <a href="/admin/announcements">
            <i class="fas fa-newspaper"></i>
            Announcements
          </a>
        </li>
        <li class="{{ $uri == 'admin/officials' ?  'active' : '' }}">
          <a href="/admin/officials">
            <i class="fas fa-users"></i>
            Officials
          </a>
        </li>
        <li class="{{ $uri == 'admin/documents/{category?}' ?  'active' : '' }}">
          <a href="/admin/documents">
            <i class="fas fa-file"></i>
            Documents
          </a>
        </li>
        <li class="{{ $uri == 'admin/citizens-charter' ?  'active' : '' }}">
          <a href="/admin/citizens-charter">
            <i class="fas fa-file"></i>
            Citizens Charter
          </a>
        </li>
        <li class="{{ $uri == 'admin/user' ?  'active' : '' }}">
            <a href="/admin/user">
              <i class="fas fa-user"></i>
              Users
            </a>
          </li>

      </ul>

      <ul class="list-unstyled CTAs">
        <li>
          <a href="/" class="download"><i class="fas fa-home"></i>Go to the Website</a>
        </li>
      </ul>
    </nav>
    <div id="content">

      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left text-white"></i>
          </button>
          <ul class="navbar-nav navbar-right">
            <li class="nav-item btn-group dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                <span class="d-md-none d-sm-none d-none d-lg-inline text-white">Welcome {{ Auth::user()->name }}!</span> <i
                  class="fas fa-caret-down"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right px-3" aria-labelledby="navbarDropdown">
                <a href="{{ route('logout') }}" class="dropdown-item"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}</form>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      @yield('content')
    </div>
  </div>
  <script src="{{ asset('/js/app.js') }}"></script>
  <script src="{{ asset('js/admin/script.js') }}"></script>
  @yield('scripts')
</body>

</html>
