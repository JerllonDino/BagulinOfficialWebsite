@php
$uri = Route::current()->uri;
@endphp
<nav id="sidebar">
  <div class="sidebar-header">
    <h3><img src="{{ asset('img/bagulin.png') }}" alt="bagulin" style="width:100%" class="mx-auto"></h3>
    <strong><img src="{{ asset('img/logo-2.png') }}" alt="bagulin" style="width:100%" class="mx-auto"></strong>
  </div>

  <ul class="list-unstyled components">
    <li class="{{ $uri == 'bagulinDeLaunion/admin/dashboard' ?  'active' : '' }}">
      <a href="/bagulinDeLaunion/admin/dashboard">
        <i class="fas fa-table"></i>
        Dashboard
      </a>
    </li>
    <li class="{{ $uri == 'bagulinDeLaunion/admin/announcements' ?  'active' : '' }}">
      <a href="/bagulinDeLaunion/admin/announcements">
        <i class="fas fa-newspaper"></i>
        Announcements
      </a>
    </li>
    <li class="{{ $uri == 'bagulinDeLaunion/admin/officials' ?  'active' : '' }}">
      <a href="/bagulinDeLaunion/admin/officials">
        <i class="fas fa-users"></i>
        Officials
      </a>
    </li>
    <li class="{{ $uri == 'bagulinDeLaunion/admin/documents/{category?}' ?  'active' : '' }}">
      <a href="/bagulinDeLaunion/admin/documents">
        <i class="fas fa-file"></i>
        Documents
      </a>
    </li>
    <li class="{{ $uri == 'bagulinDeLaunion/admin/municipal-profile/{category?}' ?  'active' : '' }}">
      <a href="/bagulinDeLaunion/admin/municipal-profile">
        <i class="fas fa-file"></i>
        Municipal Profile
      </a>
    </li>
    <li class="{{ $uri == 'bagulinDeLaunion/admin/citizens-charter/{category?}' ?  'active' : '' }}">
        <a href="/bagulinDeLaunion/admin/citizens-charter">
          <i class="fas fa-file"></i>
          Citizens Charter
        </a>
      </li>
    <li class="{{ $uri == 'bagulinDeLaunion/admin/user' ?  'active' : '' }}">
        <a href="/bagulinDeLaunion/admin/user">
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
