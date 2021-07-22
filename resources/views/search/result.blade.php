@extends('layouts.app')

@section('content')
<div class="container-fluid">
			<!-- Banner -->
			<div class="row">
				<div class="messages text-center col-md-12">
					Find Books between "{{ Request::input('queryBook') }}"
					<hr>
				</div>
				<div class="left_side">
					@foreach($books as $value)
                    <div class="col-md-3 col-xs-12 col-sm-6 p-left">
						<div class="mainbox">
							<div class="imgbox">
								<a href="{{ route('books.show',$value->id) }}">
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