@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Banner -->
    <div class="row">
        <div class="advertisment-banner col-md-12">
            <img src="images/homepage/Ad_banner.jpg" alt="" title="">
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Banner Area-->
    <div id="myBtnContainer">

        <div class="clearfix"></div>
    </div>
    @foreach($caty as $value)
    <div class="tabby">
        <div class="htitle col-md-6">
            {{$value->name}}
        </div>
        <div class="clearfix"></div>
        <div class="filterDiv Places">
            <div class="col-md-3 col-xs-12 ">
                <div class="box">
                    <div class="box-img">
                        <img src="images/homepage/latest/01_img.jpg" class="img" alt="" title="">

                    </div>
                    <div class="box-heading1">
                        Place & Event Name
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                        </div>
                    </div>

                    <div class="box-radius">
                        <img src="images/homepage/latest/01_dp.png" class="img" alt="" title="">

                    </div>
                    <div class="box-heading3">
                        By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- container Tab End -->
    <!-- container Recomanded End -->



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
                    <a href="#"> Advertise</a> |
                    <a href="#">Term & Conditions </a>
                    <a href="#">Sitemap </a>|
                    <a href="#">Tags </a>|
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
@endsection