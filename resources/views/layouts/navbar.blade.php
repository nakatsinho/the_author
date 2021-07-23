<nav class="navbar navbar-expand-md navbar-light fixed-top sticky-top nav-menu">

	<div class="col-md-2 col-xs-12 p-left  p-right">

		<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle">
			<i class="fas fa-bars"></i>
		</button>
		<div class="logo">
			<a href="#">
				<img src="images/header/logo.png" alt="logo">
			</a>
		</div>
	</div>
	<!-- Navbar -->
	<div class="col-md-5 col-xs-12 p-left  p-right">
		<div class="searching">
			<form action="{{route('search.books')}}">
				<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				<input type="text" name="queryBook" placeholder="Search using Title, Events, House, Shop, etc...">
			</form>
		</div>
	</div>
	<div class="col-md-5 col-xs-12 p-left p-right">
		<div class="add-listing">
			<a href="{{ route('sharing.create') }}">
				<img src="images/header/plus-ico.png" alt="">
				Share a Book</a>
		</div>
		<div class="home">
			<ul>
				<li>
					<a href="#"><img src="images/header/home.png" alt="" title="">
						<span>1</span>
					</a>
				</li>
			</ul>
		</div>
		<!--#Home-->
		<div class="login popup" onclick="signin()">

			<img src="{{ url('images/profile/',Auth::user()->image) }}" title="" alt="">
			{{Auth::user()->name}}
			<div class="popuptext1" id="signin">
				<div class="notfication-details">
					<div class="notification-info">
						<a href="{{ route('profile.index') }}">Profile </a>
					</div>
				</div>
				<div class="notfication-details">
					<div class="notification-info">
						<a class="logout" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); 
          document.getElementById('logout-form').submit();">
							<i class="fa fa-power"></i> Sign Out
						</a>

						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
							<?php echo csrf_field(); ?>
						</form>
					</div>
					<!--notification-info -->
				</div>
			</div>



		</div>
	</div>
</nav>