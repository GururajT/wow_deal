
@extends('layouts.default')
@section('content')


<style>
.heart_ico {
    position: absolute;
    left: 15px;
    top: 15px;
    font-size: 30px;
    color: #532979;
}
span.unitsold{
    text-align: center;
    display: block;
    margin-top: 0;
    margin-bottom: 6px;
    font-weight: 800;
    font-size: 14px;
    color: #A5238B;
}
</style>

<div class="container">
    <div class="row">
        <!-- ============================================== CONTENT ============================================== -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div id="product-tabs-slider" class="scroll-tabs wow fadeInUp">
                <div class="more-info-tab clearfix ">
                    <!-- <h3 class="new-product-title pull-left">Most Super Deals</h3> -->
                </div>
                <div class="product-slider">
                  
                    <div class="row">
                        @if(count($getdeals) > 0)
                        @foreach($getdeals as $row)
                        <div class="col-md-6">
                            <div class="products">
                                <div class="product product_left_bordr">
                                    <div class="product-image">
                                        <div class="image">
                                           
                                            <a href="{{url('addfavourite/'.$row->id)}}"> <i class="fa-regular fa-heart heart_ico"></i></a>

                                            <a href="{{url('deals_detail/'.$row->id)}}"> <img src="{{url(explode(',',$row->image)[0])}} " style="height: 250px;
                                                width: 380px;" alt=""> </a>
                                             {{-- <?php $json = explode(',',$row->image);?> --}}


                                        </div>
                                        <div class="discount_card">
                                            
                                            <h6>AFTER - {{$row->discounted_price}}% </h6>
                                         
                                            <h1> OMR {{$row->actual_price}} </h1>
                                            
                                           <a href="{{url('checkout/'.$row->id)}}" ><img class="buynow_btns" src="{{url('public/images/buynow.svg')}}" /></a>
                                           
                                         
                                            {{-- <span class="unitsold">
                                                11 units sold
                                            </span> --}}
                                            {{-- <p style="font-size: 10px; text-align: center; background: transparent; margin-bottom: 0; font-weight: 700;" id="example1" data-countdown="01/01/2023 05:06:59"></p> --}}
                                        </div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('deals_detail/'.$row->id)}}">{{$row->title}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <p class="text-danger text-center">No Data</p>
                        @endif
                    </div>
                 
                </div>
            </div>
            <!-- /.scroll-tabs -->
            <!-- ============================================== SCROLL TABS : END ============================================== -->

            <div class="slider-section">
                <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
                    <div id="hero">
                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                            <div class="item" style="background-image: url(assets/images/sliders/03.jpg);">
                                <div class="container-fluid">
                                    <div class="caption bg-color vertical-center text-left">
                                        <div class="slider-header fadeInDown-1">Top Brands</div>
                                        <div class="big-text fadeInDown-1"> New Collections </div>
                                        <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing.</span> </div>
                                        <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                                    </div>
                                    <!-- /.caption -->
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->
                            <div class="item" style="background-image: url(assets/images/sliders/01.jpg);">
                                <div class="container-fluid">
                                    <div class="caption bg-color vertical-center text-left">
                                        <div class="slider-header fadeInDown-1">Spring 2019</div>
                                        <div class="big-text fadeInDown-1"> Women Fashion </div>
                                        <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</span> </div>
                                        <div class="button-holder fadeInDown-3"> <a href="{{url('index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                                    </div>
                                    <!-- /.caption -->
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->
                        </div>
                        <!-- /.owl-carousel -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

