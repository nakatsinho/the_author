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
				<form>
					<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
					<input type="text" name="search" placeholder="Search using Title, Events, House, Shop, etc...">
				</form>
			</div>
		</div>
		<div class="col-md-5 col-xs-12 p-left p-right">
			<div class="add-listing">
				<a href="upload.html">
					<img src="images/header/plus-ico.png" alt="">
					Search Book</a>
			</div>
			<div class="home">
				<ul>
					<li>
						<a href="index-2.html"><img src="images/header/home.png" alt="" title="">
							<span>1</span>
						</a>
					</li>
					

				</ul>
			</div>
			<!--#Home-->
			<div class="login popup" onclick="signin()">

				<img src="images/header/u-icon.png" title="" alt="">
				{{Auth::user()->name}}
				<div class="popuptext1" id="signin">
					<div class="notfication-details">
						<div class="notification-info">
							<a href="my_profile_account.html">Profile </a>

						</div>
					</div>
					<div class="notfication-details">
						<div class="notification-info">
							<a href="my_profile_view_detail.html">Profile Detail</a>
						</div>
					</div>
					<div class="notfication-details">
						<div class="notification-info">
							<a href="signin.html">Sign Out</a>
						</div>
						<!--notification-info -->
					</div>
				</div>



			</div>
		</div>
	</nav>