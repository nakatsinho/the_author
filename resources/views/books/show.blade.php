@extends('layouts.app')

@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Banner -->
        <div class="dashboard">
            <div class="advertisment-banner1 col-md-12">
                <img src="{{url('images/banner/e-bg.jpg')}}" alt="" title="">
            </div>
            <div class="main-page">
                <div class=" dash-profile">
                    <img src="{{url('images/books/',$book->cover)}}" width="80%" alt="">
                </div>
                <div class="prompr">
                    <ul class="pull-right prof">
                        <li class="number"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; {{$book->isbn}}
                        </li>
                        <li class="number"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; {{$book->edition}}
                        </li>
                    </ul>
                    <div class="dashname">
                        {{$book->name}}
                        <p>@ {{$book->company}}</p>
                    </div>
                    <div class="liked1">
                        <div class="lokeda">
                            <?php $be_author = DB::table('authors')->where('book_id', $book->id)->get(); ?>
                            @foreach($be_author as $val)
                            @if($val->user_id == Auth::user()->id)
                            <button class="btn btn-success" disabled>Your are Author</button>
                            @else
                            <form action="{{ route('sharing.update', $val->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <input type="text" name="book_id" value="{{$val->id}}" hidden>
                                <button class="btn btn-success" type="submit">Become Author</button>
                            </form>
                            @endif
                            @endforeach
                        </div>
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
                            <a href="setting.html">About </a>
                        </li>
                </div>

            </div>
            </nav>

        </div>
        <div class="row">
            <div class="col-md-7">
                <div class=" locatins">
                    <div class="heading">
                        <img src="images/banner/icon.html" alt="">
                        <h3>
                            Description
                        </h3>
                    </div>
                    <div class="sub-heading">
                        {{$book->description}}.
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="box-left">
                    <div class="rightboxs">
                        <span>Authors List</span>
                        @foreach($author as $value3)
                        <p><a href="{{ route('profile.show',$value3->id ) }}">{{$value3->name}}</a></p>
                        @endforeach
                    </div>
                </div>
                <div class="box-left">
                    <div class="rightboxs">
                        <span>{{$book->name}} </span>
                        <p>{{$book->edition}}</p>
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
    <!-- /.content-wrapper -->
</div>
@endsection