@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Banner -->
    <div class="dashboard">
        <div class="advertisment-banner1 col-md-12">
            <img src="images/banner/bg.jpg" alt="" title="">
        </div>
        <div class="main-page">
            <div class=" dash-profile">
                <img src="{{ url('images/profile/',$user->image) }}" width="90%" alt="">
            </div>
            <div class="prompr">
                <ul class="pull-right prof">
                    <li class="number"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; +{{$user->number}}
                        890</li>
                    <li class="number"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; {{$user->country->name}}
                    </li>

                    <li class="borders"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
                </ul>
                <div class="dashname">
                    {{$user->name}}
                    <p>{{$user->email}}</p>
                </div>

            </div>
        </div>
        <div class="clearfix">
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
                        <a href="setting.html">All My Saved Books </a>
                    </li>

                </ul>

            </div>
        </div>

    </div>
    <div class="row">
        <div class=" mylisting">
            @foreach($book as $value)
            <div class="col-md-3 col-xs-12 ">
                <div class="box">
                    <div class="box-img">
                        <a href="{{ route('books.show',$value->id) }}"> <img src="{{ url('images/books/',$value->cover) }}" class="img" alt="" title="">
                        </a>
                    </div>
                    <div class="box-heading1">
                        {{$value->name}}
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; {{$value->edition}}
                        </div>
                    </div>

                    <div class="box-radius">
                        <img src="images/homepage/latest/01_dp.png" class="img" alt="" title="">
                    </div>
                    <div class="box-heading3">
                        {{$value->company}} <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix"></div>
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
    <!-- /.content-wrapper -->
</div>
@endsection