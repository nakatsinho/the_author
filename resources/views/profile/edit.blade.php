@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Banner -->

    <!-- Banner Area-->
    <div class="settingmenu">
        <div class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse  visible-title" id="navbarNav">


            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('profile.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
            <div class="locatins heading">
                <div class="email-input">
                    <div class="midemail1">
                        <img src="images/feedback/img1.png" alt="">
                        Name
                    </div>
                    <input type="text" name="name" value="{{$user->name}}">
                </div>
                <div class="email-input">
                    <div class="midemail1">
                        <img src="images/feedback/img1.png" alt="">
                        Number
                    </div>
                    <input type="text" name="number" value="{{$user->number}}">
                </div>
            </div>
            <div class="locatins heading">
                <div class="email-input">
                    <div class="midemail1">
                        <img src="images/feedback/img1.png" alt="">
                        Profile Photo
                    </div>
                    <div class="editors">
                        <input type="file" name="image" value="Upload">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="box-left">
                <div class="rightboxs">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <span>Email Address</span>
                    <p>{{$user->email}}</p>
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
                    <span>Website</span>
                    <p>www.example.com</p>
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