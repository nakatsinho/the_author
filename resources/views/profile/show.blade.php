@extends('layouts.app')

@section('content')
<div class="container-fluid">
				<!-- Banner -->
				<div class="row">
					<div class="messages text-center col-md-12">
						Setting Profile of {{$user->name}}
						<hr>
					</div>
				</div>
				<!-- Banner Area-->
				<div class="settingmenu">
					<div class="navbar navbar-expand-md navbar-light">
						<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
							<span class="navbar-toggler-icon "></span>
						</button>
						<div class="collapse navbar-collapse  visible-title" id="navbarNav">
							<ul class="navbar-nav ">
								<li>
									<a href="#">OverView </a>
								</li>
							</ul>

						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-md-7">
						<div class=" locatins">
							<div class="heading">
								<img src="images/banner/icon.html" alt="">
								<h3>
									About
								</h3>
							</div>
							<div class="sub-heading">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a
								interdum neque. Nullam mi sem, tristique vel volutpat ac, consectetur sit
								amet massa. Curabitur at ipsum leo. Morbi porttitor lorem velit, at lacinia
								magna pretium at. Duis id mattis nisl. In sit amet eros sed lorem hendrerit
								ornare quis in mauris. Sed nec purus euismod, pharetra nibh a, aliquet lorem..
								Suspendisse pretium ullamcorper neque et aliquam.
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="locatins heading">
							<img src="images/banner/Icon3.png" alt="">
							<h3>
								Profile Photo
							</h3>
							<div class="tag">
								<img src="{{url('images/profile/',$user->image)}}" width="50%" height="70%" alt="">
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="box-left">
							<div class="rightboxs">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<span>Email Address</span>
								<p>{{optional($user)->email}}</p>
							</div>
						</div>
						<div class="box-left">
							<div class="rightboxs">
								<i class="fa fa-mobile" aria-hidden="true"></i>
								<span>Phone Number </span>
								<p>{{$user->number}}</p>
							</div>
						</div>
						<div class="box-left">
							<div class="rightboxs">
								<i class="fa fa-globe" aria-hidden="true"></i>
								<span>Books</span>
								@foreach($books as $val)
								<p><a href="{{ route('books.show',$val->id) }}">{{$val->name}}</a></p>
								@endforeach
							</div>
						</div>
						<div class="box-left">
							<div class="rightboxs">
								<img src="images/banner/Icon9.png" alt="">
								<span>Region</span>
								<p>{{$user->country->name}}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<!--#Spiner-->
				<div class="spinner">
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
				</div>
				<!--#Spiner-->
				<!-- Sticky Footer -->
				@include('layouts.footer')

			</div>
@endsection