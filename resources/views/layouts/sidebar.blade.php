<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
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
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Property Type</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="{{route('property.types.index')}}">Manage Property</a></li>
					    </ul>
					</li>
			
				</ul>
			

			</div>
		</div>
	</nav>