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
        <div class="col-md-10 p-left">
            <button class="btn active" onclick="filterSelection('all')"> all</button>
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
        <div class="filterDiv Cars Real">
            <div class="col-md-3 col-xs-12 ">
                <div class="box">
                    <div class="box-img">
                        <img src="images/homepage/realestate/12_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Real Estate
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; New York City
                        </div>
                    </div>
                    <div class="box-radius">
                        <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">

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
                        <img src="images/homepage/place/9_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Place & Event Name
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Austrilia
                        </div>
                    </div>
                    <div class="box-radius">
                        <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
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
                        <img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="">

                    </div>
                    <div class="box-heading1">
                        Coffee House
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; London
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
        <div class="filterDiv Electronic">
            <div class="col-md-3 col-xs-12 ">
                <div class="box">
                    <div class="box-img">
                        <img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Resturent Name
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; USA
                        </div>
                    </div>
                    <div class="box-radius">
                        <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
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
                        <img src="images/homepage/place/8_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Coffee House
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; South Africa
                        </div>
                    </div>
                    <div class="box-radius">
                        <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
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
                        <img src="images/homepage/recomanded/04_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Place & Event Name
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Kenya
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
        <div class="filterDiv Cars">
            <div class="col-md-3 col-xs-12 ">
                <div class="box">
                    <div class="box-img">
                        <img src="images/homepage/latest/01_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Place & Event Name
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Wembly Studium
                        </div>
                    </div>
                    <div class="box-radius">
                        <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
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
                        <img src="images/homepage/place/8_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Event Name
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                        </div>
                    </div>
                    <div class="box-radius">
                        <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
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
                        <img src="images/homepage/place/7_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Event Name
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
        <div class="filterDiv Real">
            <div class="col-md-3 col-xs-12 ">
                <div class="box">
                    <div class="box-img">
                        <img src="images/homepage/realestate/10_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Real Estate
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                        </div>
                    </div>
                    <div class="box-radius">
                        <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
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
                        <img src="images/homepage/realestate/11_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Real Estate
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                        </div>
                    </div>
                    <div class="box-radius">
                        <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
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
                        <img src="images/homepage/realestate/12_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Real Estate
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
        <div class="filterDiv Real">
            <div class="col-md-3 col-xs-12 ">
                <div class="box">
                    <div class="box-img">
                        <img src="images/homepage/realestate/11_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Real Estate
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                        </div>
                    </div>
                    <div class="box-radius">
                        <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
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
                        <img src="images/homepage/realestate/10_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Real Estate
                        <div class="box-heading2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                        </div>
                    </div>
                    <div class="box-radius">
                        <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
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
                        <img src="images/homepage/place/9_img.jpg" class="img" alt="" title="">
                    </div>
                    <div class="box-heading1">
                        Event Name
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
                    <img src="images/homepage/recomanded/04_img.jpg" class="img" alt="" title="">
                </div>
                <div class="box-heading1">
                    Real Estate
                    <div class="box-heading2">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; USA...
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


        <div class="col-md-3 col-xs-12 ">
            <div class="box">
                <div class="box-img">
                    <img src="images/homepage/recomanded/06_img.jpg" class="img" alt="" title="">
                </div>
                <div class="box-heading1">
                    Real Estate
                    <div class="box-heading2">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; New York city
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
        <div class="col-md-3 col-xs-12 ">
            <div class="box">
                <div class="box-img">
                    <img src="images/homepage/recomanded/05_img.jpg" class="img" alt="" title="">
                </div>
                <div class="box-heading1">
                    Real Estate
                    <div class="box-heading2">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; New York city
                    </div>
                </div>
                <div class="box-radius">
                    <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
                </div>
                <div class="box-heading3">
                    By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                </div>
            </div>

        </div>
        <div class="col-md-3 col-xs-12 ">
            <div class="box">
                <div class="box-img">
                    <img src="images/homepage/recomanded/04_img.jpg" class="img" alt="" title="">
                </div>
                <div class="box-heading1">
                    Real Estate
                    <div class="box-heading2">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; New York city
                    </div>
                </div>
                <div class="box-radius">
                    <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
                </div>
                <div class="box-heading3">
                    By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                </div>
            </div>

        </div>

        <div class="col-md-3 col-xs-12 ">
            <div class="box">
                <div class="box-img">
                    <img src="images/homepage/recomanded/06_img.jpg" class="img" alt="" title="">
                </div>
                <div class="box-heading1">
                    Real Estate
                    <div class="box-heading2">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; New York city
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

        <div class="col-md-3 col-xs-12 ">
            <div class="box">
                <div class="box-img">
                    <img src="images/homepage/recomanded/04_img.jpg" class="img" alt="" title="">
                </div>
                <div class="box-heading1">
                    Real Estate
                    <div class="box-heading2">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; New York city
                    </div>
                </div>
                <div class="box-radius">
                    <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
                </div>
                <div class="box-heading3">
                    By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-xs-12 ">
            <div class="box">
                <div class="box-img">
                    <img src="images/homepage/recomanded/05_img.jpg" class="img" alt="" title="">
                </div>
                <div class="box-heading1">
                    Real Estate
                    <div class="box-heading2">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; New York city
                    </div>
                </div>
                <div class="box-radius">
                    <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
                </div>
                <div class="box-heading3">
                    By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12 ">
            <div class="box">
                <div class="box-img">
                    <img src="images/homepage/recomanded/06_img.jpg" class="img" alt="" title="">
                </div>
                <div class="box-heading1">
                    Real Estate
                    <div class="box-heading2">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; New York city
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
                                <img src="images/homepage/latest/01_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
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
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/latest/02_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/latest/01_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
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
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/latest/02_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/latest/01_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
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
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/latest/02_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/latest/01_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
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
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/latest/02_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
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
                                <img src="images/homepage/realestate/10_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
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
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/realestate/11_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/realestate/12_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/realestate/10_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
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
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/realestate/11_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/realestate/12_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/realestate/10_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
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
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/realestate/11_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/realestate/12_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/realestate/10_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
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
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/realestate/11_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/02_dp.png" class="img" alt="" title="">
                            </div>
                            <div class="box-heading3">
                                By john Doe <i class="fa pull-right fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="images/homepage/realestate/12_img.jpg" class="img" alt="" title="">
                            </div>
                            <div class="box-heading1">
                                Title Name Here
                                <div class="box-heading2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Location here
                                </div>
                            </div>
                            <div class="box-radius">
                                <img src="images/homepage/latest/03_dp.png" class="img" alt="" title="">
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