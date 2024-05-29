<nav class="pcoded-navbar  ">
	<div class="navbar-wrapper  ">
		<div class="navbar-content scroll-div ">

			<div class="">
				<div class="main-menu-header">
					<img class="img-radius" src="{{asset('adminAsset')}}/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
					<div class="user-details">
						<span>Admin</span>
					</div>
				</div>

			</div>

			<ul class="nav pcoded-inner-navbar ">

				<li class="nav-item">
					<a href="{{route('dashboard')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
				</li>
				<li class="nav-item">
					<a href="{{route('city.index')}}" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-mountain-city"></i></span><span class="pcoded-mtext">Manage City</span></a>
					
				</li>
				<li class="nav-item">
					<a href="{{route('location.index')}}" class="nav-link"><span class="pcoded-micon"><i class="fa-solid fa-location-crosshairs"></i></span><span class="pcoded-mtext">Manage Location</span></a>
					
				</li>
				<li class="nav-item">
					<a href="{{route('property.types.index')}}" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-house"></i></span><span class="pcoded-mtext">Property Type</span></a>
					
				</li>
				<li class="nav-item pcoded-hasmenu">
					<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Manage Property</span></a>
					<ul class="pcoded-submenu">
						<li><a href="{{route('property.index')}}">All Property</a></li>
						<li><a href="{{route('property.pending')}}">Pending</a></li>
						<li><a href="{{route('property.reject')}}">Reject</a></li>
					</ul>
				</li>

				<li class="nav-item">
					<a href="#" class="nav-link "><span class="pcoded-micon"><i class="fa-brands fa-slack"></i></span><span class="pcoded-mtext">Advertisement</span></a>
					
				</li>

				<li class="nav-item pcoded-hasmenu">
					<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-user"></i></span><span class="pcoded-mtext">Frontend Manager					</span></a>
					<ul class="pcoded-submenu">
						<li><a href="{{route('banner.index')}}">Banner</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="nav-item pcoded-hasmenu">
					<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-user"></i></span><span class="pcoded-mtext">User Management</span></a>
					<ul class="pcoded-submenu">
						<li><a href="#">List Role</a></li>
						<li><a href="#">Create Role</a></li>
						<li><a href="#">Create User</a></li>
					</ul>
				</li>

			

			</ul>


		</div>
	</div>
</nav>