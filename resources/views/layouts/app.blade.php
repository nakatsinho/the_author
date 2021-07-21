<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  
<!--   15:40:28 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="">
<!-- Favicon -->
	<link href="images/header/fav.png" rel="shortcut icon" type="image/x-icon"/>

    <title>{{ config('app.name', 'The Author') }}</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
	    <link href="css/responsive.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
     <link rel="stylesheet" href="css/portfolio.css" type="text/css">
     <link rel="stylesheet" href="css/dropdown.css" type="text/css">
    <link rel="stylesheet" href="css/owlslider.css" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-md navbar-light fixed-top sticky-top nav-menu">

     <div class="col-md-2 col-xs-12 p-left  p-right">

      <button  class="btn btn-link btn-sm text-white order-1 order-sm-0"  id="sidebarToggle" >
        <i class="fas fa-bars"></i>
      </button>
		<div class="logo">
			<a href="#">
			<img src="images/header/logo.png" alt="logo" >
			</a>
		</div>
	</div>
      <!-- Navbar -->
		<div class="col-md-5 col-xs-12 p-left  p-right">
			 <div class="searching">
				<form>
				<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				<input type="text" name="search" placeholder="Search Places, Events, House, Shop, Bike, Car, Mobile etc...">
				</form>
			</div>
		</div>
			<div class="col-md-5 col-xs-12 p-left p-right">
			 <div class="add-listing">
				<a href="upload.html">
				<img src="images/header/plus-ico.png" alt="">
				Add Listing</a>
			 </div>
			 <div class="home">
				<ul>
					<li>
						<a  href="index-2.html"><img src="images/header/home.png" alt="" title="" >
							<span>1</span>
						</a>
					</li>
					<li class="popup"  onclick="myFunctionmsg()">
						<img src="images/header/mgs.png" alt="" title="" >
						<span>4</span>
						<div class="popuptext" id="message">
							<div class="notfication-details">
								<div class="noty-user-img">
									<img src="images/resources/ny-img1.png" alt="">
								</div>
								<div class="notification-info">
									<h5><a href="message.html">Jassica William</a>
									Lorem ipsum dolor sit amet, 
									consectetur adipisicing elit,</h5>
									<p>2 min ago</p>
								</div><!--notification-info -->
							</div>
							<div class="notfication-details">
								<div class="noty-user-img">
									<img src="images/resources/ny-img1.png" alt="">
								</div>
								<div class="notification-info">
									<h5><a href="message.html">Jassica William</a>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
									.</h5>
									<p>2 min ago</p>
								</div><!--notification-info -->
							</div>

							<div class="notfication-details">
								<div class="noty-user-img">
									<img src="images/resources/ny-img1.png" alt="">
								</div>
								<div class="notification-info">
									<h5><a href="message.html">Jassica William</a> 
									Lorem ipsum dolor sit amet, consectetur adipisicing elit,
									</h5>
									<p>2 min ago</p>
								</div><!--notification-info -->
							</div>
							
						 </div>
				
					</li>
					<li class="popup"  onclick="myFunctionicon()">
						<img src="images/header/notification.png" alt="" title="" >
					<span>2</span>
					<div class="popuptext" id="icon">
							<div class="notfication-details">
								<div class="noty-user-img">
									<img src="images/resources/ny-img1.png" alt="">
								</div>
								<div class="notification-info">
									<h3><a href="message.html">Jassica William</a> Comment on your project.</h3>
									<p>2 min ago</p>
								</div><!--notification-info -->
							</div>
							<div class="notfication-details">
								<div class="noty-user-img">
									<img src="images/resources/ny-img1.png" alt="">
								</div>
								<div class="notification-info">
									<h3><a href="message.html">Jassica William</a> Comment on your project.</h3>
									<p>2 min ago</p>
								</div><!--notification-info -->
							</div>
							<div class="notfication-details">
								<div class="noty-user-img">
									<img src="images/resources/ny-img1.png" alt="">
								</div>
								<div class="notification-info">
									<h3><a href="message.html">Jassica William</a> Comment on your project.</h3>
									<p>2 min ago</p>
								</div><!--notification-info -->
							</div>
						 </div>
					
					</li>
					  
				</ul>
			 </div>
			 <!--#Home-->
			 <div class="login popup"  onclick="signin()">
				
				<img src="images/header/u-icon.png" title="" alt="">
				John Deo
				<div class="popuptext1" id="signin">
							<div class="notfication-details">
								<div class="notification-info">
									<a href="my_profile_account.html" >Profile </a>
								
								</div>
							</div>
							<div class="notfication-details">
								<div class="notification-info">
									<a href="my_profile_dashboard.html">Dashboard</a>
								</div>
							</div>
							<div class="notfication-details">
								<div class="notification-info">
									<a href="my_profile_view_detail.html">Profile Detail</a>
								</div>
							</div>
							<div class="notfication-details">
								<div class="notification-info">
									<a href="signin.html" >Sign In</a>
								</div><!--notification-info -->
							</div>
						 </div>
				
			
				
			 </div>
			</div>
    </nav>
    <div id="wrapper">
      <!-- Sidebar -->
		  <ul class="sidebar navbar-nav">
			<li class="nav-item active">
			<a href="index-2.html"><img src="images/menu-icon/Homeicon.png" title="" alt=""> <div class="fos" id="foo">Home</div></a></li>
			<li><a href="listing.html"><img src="images/menu-icon/Categoryicon.png" title="" alt=""><div class="fos" id="foo1"> Listing </div> </a></li>
			<li><a href="find_profiles.html"><img src="images/menu-icon/flag.png" title="" alt=""> <div class="fos" id="foo2">Find Profiles</div></a></li>
			<li class="mpadding"><a href="message.html"><img src="images/menu-icon/message.png" title="" alt=""><div class="fos" id="foo3"> Messages</div></a></li>
			
			<li><a href="saved.html"> <img src="images/menu-icon/favicon.png" title="" alt=""><div class="fos" id="foo4">Saved</div></a></li>
			<li> <a href="my_profile_view_detail.html"> <img src="images/menu-icon/eye.png" title="" alt=""><div class="fos" id="foo5">Most Viewed</div></a></li>
			<li> <a href="electronics.html"><img src="images/menu-icon/Shape.png" title="" alt=""><div class="fos" id="foo6">Liked</div></a></li>
			<li class="mpadding"><a href="other_user.html"><img src="images/menu-icon/card-payment.png" title="" alt=""> <div class="fos" id="foo7">Payment</div></a></li>
			
			<li> <a href="helps.html"><img src="images/menu-icon/info.png" title="" alt=""><div class="fos" id="foo8">Help</div></a></li>
			<li> <a href="setting.html"><img src="images/menu-icon/setting.png" title="" alt=""><div class="fos" id="foo9">Setting</div></a></li>
			<li class="mpadding"><a href="feedback.html"><img src="images/menu-icon/user.png" title="" alt=""><div class="fos" id="foo10"> Send Feedback</div></a></li>
			
		  </ul>
		<div id="content-wrapper">
			<div class="container-fluid">
			 <!-- Banner -->
				<div class="row">
					<div class="advertisment-banner col-md-12">
						<img src="images/homepage/Ad_banner.jpg" alt="" title="" >
						<div class="clearfix"></div>
					</div>
				</div>	
				  <!-- Banner Area-->
	<div id="myBtnContainer">
		<div class="col-md-10 p-left">
			<button class="btn active" onclick="filterSelection('all')">  all</button>
			<button class="btn" onclick="filterSelection('Places')"> Places & Events</button>
			<button class="btn" onclick="filterSelection('Real')"> Real Estate</button>
			<button class="btn" onclick="filterSelection('Cars')"> Cars & Bikes</button>
			<button class="btn" onclick="filterSelection('Electronic')"> Electronic</button>
			<button class="btn" onclick="filterSelection('Others')"> Others</button>
		</div>
		<div class="text-right radar col-md-2 p-right">
			<a href="radar.html"><img src="images/icon/reader.png" alt="reader">Radar Scan</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="tabby">
		<div class="htitle col-md-6">
		Latest Listing
		</div>
	<div class="htitle text-right col-md-6">
		<a href="#">Show More</a>
	</div>
	<div class="clearfix"></div>
	<div class="filterDiv Places">
	  <div class="col-md-3 col-xs-12 ">
		<div class="box">
			<div class="box-img">
				<img src="images/homepage/latest/01_img.jpg" class="img" alt="" title="" >
				
			</div>
			<div class="box-heading1">
				Place & Event Name
				<div class="box-heading2">
				<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
				</div>
			</div>
			
			<div class="box-radius">
				<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				
			</div>
			<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
			</div>
		</div>
		</div>
	</div>
	<div class="filterDiv Cars Real">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/12_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
				Real Estate
				<div class="box-heading2">
				<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  New York City
				</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
					
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="filterDiv Places">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/place/9_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
				Place & Event Name
				<div class="box-heading2">
				<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Austrilia
				</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="filterDiv Electronic">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="" >
					
				</div>
				<div class="box-heading1">
					Coffee House 
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  London
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="filterDiv Electronic">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Resturent Name
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; USA
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="filterDiv Cars">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/place/8_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Coffee House 
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  South Africa
					</div>
				</div>
				<div class="box-radius">
				<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	 </div>
	<div class="filterDiv Places Others">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/recomanded/04_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Place & Event Name
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Kenya
					</div>
				</div>
				<div class="box-radius">
				<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	 </div>
	<div class="filterDiv Cars">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/01_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Place & Event Name
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Wembly Studium
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="filterDiv Others">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/place/8_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Event Name
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="filterDiv Others">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/place/7_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Event Name
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	 </div>
	<div class="filterDiv Real">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/10_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Real Estate
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
							
		</div>
	</div>
	<div class="filterDiv Real Others">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/11_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Real Estate
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="filterDiv Real">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/12_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Real Estate
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >	
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="filterDiv Real">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/11_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Real Estate
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="filterDiv Real">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/10_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Real Estate
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
					
		</div>
	</div>
	<div class="filterDiv Others">
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/place/9_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Event Name
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
					By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
</div>
				  <!-- container Tab End -->
				  <!-- container Recomanded End -->
 <div class="clearfix"></div>
<div class="tabby">
	<div class="htitle col-md-6">
	Recommended
	</div>
	<div class="htitle text-right col-md-6">
	<a href="#">Show More</a>
	</div>
	<div class="clearfix"></div>
	
	  <div class="col-md-3 col-xs-12 ">
		<div class="box">
			<div class="box-img">
				<img src="images/homepage/recomanded/04_img.jpg" class="img" alt="" title="" >
			</div>
			<div class="box-heading1">
					Real Estate
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; USA...
					</div>
				</div>
			<div class="box-radius">
				<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
			</div>
			<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
			</div>
		</div>
		</div>
	
 
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/recomanded/06_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Real Estate
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; New York city
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		
	</div>
	<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/recomanded/05_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Real Estate
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; New York city
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		
	</div>
	<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/recomanded/04_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Real Estate
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  New York city
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		
	</div>
	
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/recomanded/06_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Real Estate
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  New York city
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		
	</div>
	
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/recomanded/04_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Real Estate
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  New York city
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/recomanded/05_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Real Estate
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  New York city
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 ">
			<div class="box">
				<div class="box-img">
					<img src="images/homepage/recomanded/06_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Real Estate
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  New York city
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
</div>
<!--#Recomamded End-->
<!--#Places & Events Listing Start -->
<div class="clearfix"></div>
<div class="htitle col-md-6">
	Places & Events Listing
</div>
<div class="htitle text-right col-md-6">
		<a href="#">Show More</a>
</div>
<section id="demos1">
      <div class="col-md-12">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/01_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/02_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
             <div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/01_img.jpg" class="img" alt="" title="" >
				</div>
			<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius"> 
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/02_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/01_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/02_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/01_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
             <div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/02_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
          </div>
        </div>
	</div>
</section>
<div class="clearfix"></div>
<!--#owl Slider End-->	
<!--#Real Estate Start -->

<div class="htitle col-md-6">
	Real Estate
</div>
<div class="htitle text-right col-md-6">
		<a href="#">Show More</a>
	</div>
<section id="demos">
      <div class="col-md-12">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/10_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/11_img.jpg" class="img" alt="" title="" >
				</div>
			<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
             <div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/12_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/10_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/11_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/12_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/10_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/11_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/12_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/10_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/01_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
             <div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/11_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/02_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
            <div class="item">
              <div class="box">
				<div class="box-img">
					<img src="images/homepage/realestate/12_img.jpg" class="img" alt="" title="" >
				</div>
				<div class="box-heading1">
					Title Name Here
					<div class="box-heading2">
						<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;  Location here
					</div>
				</div>
				<div class="box-radius">
					<img src="images/homepage/latest/03_dp.png" class="img" alt="" title="" >
				</div>
				<div class="box-heading3">
				By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
            </div>
          </div>
        </div>
	</div>
</section>	
	<div class="clearfix"></div>
   <!--#Spiner-->
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
   <!--#Spiner-->
			<!-- Sticky Footer -->
			<footer class="sticky-footer col-md-12">
			  <div class="container my-auto">
				<div class="copyright text-center my-auto">
				 
				<div class="footer-info">
							<a href="#">About </a> | 
							<a href="#">Faq’s </a> | 
							<a href="#">Privacy</a>
							<a href="#"> Advertise</a>  | 
							<a href="#">Term & Conditions </a>
							<a href="#">Sitemap  </a>| 
							<a href="#">Tags  </a>| 
							<a href="#">Blog</a>
						</div>
						<div class="copy-right">
						<a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
						</div>
				</div>
			  </div>
			</footer>

		</div>
      <!-- /.content-wrapper -->
    </div>
	</div>
    <!-- /#wrapper -->
	
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
	 <script src="js/portfolio.js"></script>
	 <script src="js/you-listing.js"></script>
	 <script src="js/menurght.js"></script>
	 <script src="js/crausal1.js"></script>
	 <script src="js/dropdown.js"></script>
	     <!-- Demo scripts for this page-->
   	<script src="js/slick.min.js"></script>.
	 <!-- Assect scripts for this page-->
	<script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
	 <script src="assets/vendors/highlight.js"></script>
    <script src="assets/js/app.js"></script>
	
  </body>


<!--   15:44:08 GMT -->
</html>

