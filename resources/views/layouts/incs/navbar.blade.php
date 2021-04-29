<!-- Navbar -->
<nav class="navbar navbar-fluid navbar-expand-lg navbar-dark bg-dark small border-0 fixed-top">
	<div class="container p-0">
		<a class="navbar-brand" href="https://www.gov.ph/">
			<img id="govLogo" src="{{asset('img/logo-2.png')}}" class="img-fluid d-block d-md-none float-left mr-1"
				width="30">
			<h5 class="float-left mb-0" id="govPH">GOVPH</h5>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link text-white" href="/">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white" id="navbarDropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						The Municipality
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a class="dropdown-item" href="/municipality/message">Welcome Message</a></li>
						<li class="dropdown-submenu">
							<a class="dropdown-item dropdown-toggle" href="#">General Information</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="{{url('municipality/vision-mission')}}">Vision and
										Mission</a></li>
								<li><a class="dropdown-item" href="{{url('municipality/history')}}">Bagulin History</a>
								</li>
								<li><a class="dropdown-item" href="{{url('municipality/hymns')}}">Bagulin Hymn</a></li>
							</ul>
						</li>
						<li class="dropdown-submenu">
							<a class="dropdown-item dropdown-toggle" href="#">Government</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a class="dropdown-item dropdown-toggle" href="#">Municipal Officials</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item"
												href="{{url('municipality/government/officials/mayor')}}">Mayor</a></li>
										<li><a class="dropdown-item"
												href="{{url('municipality/government/officials/vicemayor')}}">Vice
												Mayor</a></li>
										<li><a class="dropdown-item"
												href="{{url('municipality/government/officials/councilors')}}">Councilors</a>
										</li>
										<li><a class="dropdown-item"
												href="{{url('municipality/government/past-executives')}}">Past Local
												Chief Officials</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a class="dropdown-item dropdown-toggle" href="#">Barangay Officials</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item"
												href="{{url('municipality/government/barangay/chairmans')}}">Barangay
												Chairmans</a></li>
										<li><a class="dropdown-item"
												href="{{url('municipality/government/barangay/skchairmans')}}">Barangay
												SK Chairmans</a></li>
									</ul>
								</li>
							</ul>
						</li>

						<li class="dropdown-submenu">
							<a class="dropdown-item" href="/municipal-profile">Municipal Profile</a>
							{{-- <ul class="dropdown-menu">
								<li><a class="dropdown-item" href="{{url('municipality/profile/geophysical')}}">Geophysical Environment</a>
						</li>
						<li><a class="dropdown-item"
								href="{{url('municipality/profile/infrastructure')}}">Infrastracture/Utilities/Facilities</a>
						</li>
						<li><a class="dropdown-item" href="{{url('municipality/profile/population')}}">Population and
								Social Profile</a></li>
						<li><a class="dropdown-item" href="{{url('municipality/profile/health')}}">Health</a></li>
						<li><a class="dropdown-item" href="{{url('municipality/profile/education')}}">Education</a></li>
						<li><a class="dropdown-item" href="{{url('municipality/profile/local')}}">Local Institutional
								Capability</a></li>
						<li><a class="dropdown-item" href="{{url('municipality/profile/local-economy')}}">Local
								Economy</a></li>
					</ul> --}}
				</li>
			</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="/official-documents">
					Transparency
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-white" id="navbarDropdownMenuLink" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					Agri-Tourism
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<li><a class="dropdown-item" href="{{url('agri-tour/tourism')}}">Tourism</a></li>
					<li><a class="dropdown-item" href="{{url('agri-tour/agriculture')}}">Agriculture</a></li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="/citizens-charter">Citizen's Charter</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link text-white" href="/announcements">Announcements</a>
			</li>
			</ul>
		</div>
	</div>
</nav>