@php
$uri = Route::current()->uri;
@endphp

<style>
.scrollbar::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  background-color: #F5F5F5;
}

.scrollbar::-webkit-scrollbar
{
  width: 3px;
  background-color: #F5F5F5;
}

.scrollbar::-webkit-scrollbar-thumb
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
  background-color: #555;
}

</style>
<nav id="sidebar" class="scrollbar" style="overflow-y: scroll; overflow-x: hidden">
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
    <li class="{{ $uri == 'bagulinDeLaunion/admin/tourism' ?  'active' : '' }}">
      <a href="{{ route('tourism.index') }}">
        <i class="fas fa-map-marker-alt"></i>
        Tourism
      </a>
    </li>
    <li class="{{ $uri == 'bagulinDeLaunion/admin/agriculture' ?  'active' : '' }}">
      <a href="{{ route('agriculture.index') }}">
        <i class="fas fa-map-marker-alt"></i>
        Agriculture
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
