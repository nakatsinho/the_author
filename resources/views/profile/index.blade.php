@extends('layouts.app')

@section('content')
<div class="container-fluid">
			<!-- Banner -->
			<div class="row">
				<div class="messages text-center col-md-12">
					Find Profiles
					<hr>
				</div>
				<div class="left_side">
					<div class="search-main">
						<form>
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							<input type="text" name="search" placeholder="Enter a keyword....">
						</form>
					</div>
					@foreach($users as $value)
                    <div class="col-md-3 col-xs-12 col-sm-6 p-left">
						<div class="mainbox">
							<div class="imgbox">
								<a href="{{ route('profile.show',$value->id) }}">
                                <img src="images/product/01_liked_img.jpg" alt="">
                                </a>
							</div>
							<div class="lefttext">
								{{$value->name}}
								<p>{{$value->email}}</p>
							</div>
							<div class="righttext">
								<a href="#">Share</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
                    @endforeach
				</div>

			</div>


			<!--#Spiner-->
			<div class="spinner">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
			<br />
			<br />
			<br />
			<br />
			<!--#Spiner-->

			<!-- Sticky Footer -->
			@include('layouts.footer')

		</div>
@endsection