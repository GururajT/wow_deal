
@extends('layouts.default')
@section('content')

<style>
.optionbar {
    font-size: 14px;
    border: 1px solid #000 !important;
    display: inline-block !important;
    width: auto;
}
.buyknow_sec{
    margin-top: 16px;
}

.heart_ico {
    position: absolute;
    top: 25px;
    font-size: 30px;
    color: #532979;
    right: 25px;
}
i.share_ico{
    position: absolute;
    right: -125px;
    font-size: 25px;
    margin-top: 5px;
}
span.unitsold{
    text-align: center;
    display: block;
    margin-top: 0;
    margin-bottom: 0px;
    font-weight: 800;
    font-size: 14px;
    color: #A5238B;
}
.buyknow_sec h4{margin-bottom: 0; margin-top: -8px;}
</style>

<div class='container'>
    <div class='row single-product'>
        <!-- /.sidebar -->
        <div class='col-md-12'>
            <div class="detail-block" style="padding-bottom: 0px;">
                <!--<h3 class="new-product-title" style="margin-top: 0; margin-bottom: 25px; font-weight: 700; font-size: 22px; text-align: left; color: #000;"> Category Name </h3>-->
                <div class="row  wow fadeInUp">
                    <div class="col-xs-12 col-sm-5 col-md-4 gallery-holder">
                        <div class="product-item-holder size-big single-product-gallery small-gallery">
                            <div id="owl-single-product">
                                <div class="single-product-gallery-item" id="slide1">
                                            <i class="fa-regular fa-heart heart_ico"></i>
                                            
                                    <a data-lightbox="image-1" data-title="Gallery" href="{{url(explode(',',$getdeals->image)[0])}} " style="height: 665x; width: 520px;"> <img class="img-responsive" alt="" src="{{url(explode(',',$getdeals->image)[0])}} " style="height: 300px;
                                                width: 300px;" /> </a>
                                </div>
                            
                            </div>
                            <!-- /.single-product-slider -->
                            <div class="single-product-gallery-thumbs gallery-thumbs">
                                <div id="owl-single-product-thumbnails">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-holder -->
                    <div class='col-sm-7 col-md-6 product-info-block'>
                        <div class="product-info">
                            <section style="min-height: 250px;">
                                {{-- <i class="fa-solid fa-arrow-up-from-bracket share_ico"></i> --}}
                                <p class="name">{{$getdeals->title}}</p>
                                <p class="paragraph">
                                    {{$getdeals->discription}}
                                </p>
                                {{-- <div class="form-group">
                                    <label style="display: block"> Type </label>
                                    <select style="font-weight: 600;" class="form-control optionbar">
                                        <option selected disabled> Choose an Option... </option>
                                        <option> 15 Kids </option>
                                        <option> 20 kids + KD19.00 </option>
                                    </select>
                                </div> --}}
                            </section>
                            
                            
                            <div class="buyknow_sec">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <h4>AFTER -{{$getdeals->discounted_price}}% </h4>
                                        {{-- <span class="unitsold">
                                            11 units sold
                                        </span> --}}
                                        <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example12" data-countdown="12/014/2023 05:06:59"></p>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="price-box"> <span class="price"></span> <span class="price-strike">OMR {{$getdeals->actual_price}}</span> </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="add-btn"> 
                                            <a href="{{url('checkout/'.$getdeals->id)}}">
                                                <img class="buynow_btns" src="{{url('public/images/buynow.svg')}}" />
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tabs inner-bottom-xs  wow fadeInUp" style="background: transparent; box-shadow: none;">
                <div class="deals_card">
                    <h5> Deal Details </h5>
                    <ul>
                        <li> Valid from: 10 November 2022 </li>
                        <li> Valid to: 10 December 2022 </li>
                        <li> Value: KD7 </li>
                    </ul>
                </div>
                <div class="deals_card">
                    <h5> Conditions </h5>
                    <ul>
                        <li> Coupons will be sent by e-mail only and it can be redeemed by simply showing it on your smartphone or by giving the coupon code over the telephone to the merchant </li>
                        <li> Coupons will be sent by e-mail only and it can be redeemed by simply showing it on your smartphone or by giving the coupon code over the telephone to the merchant </li>
                        <li> Coupons will be sent by e-mail only and it can be redeemed by simply showing it on your smartphone or by giving the coupon code over the telephone to the merchant </li>
                    </ul>
                </div>
                <div class="deals_card">
                    <h5> Location </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li> Free Trade Zone, Kuwait </li>
                            </ul>
                            <iframe style="width: 100%; height: 300px; border: 0px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6955.239179867464!2d47.90630062736689!3d29.352142428557748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf8f91b5243055%3A0xd80d6eba8d694835!2sKuwait%20Free%20Trade%20Zone%2C%20Kuwait!5e0!3m2!1sen!2sin!4v1671457193107!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li> Free Trade Zone, Kuwait </li>
                            </ul>
                            <iframe style="width: 100%; height: 300px; border: 0px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6955.239179867464!2d47.90630062736689!3d29.352142428557748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf8f91b5243055%3A0xd80d6eba8d694835!2sKuwait%20Free%20Trade%20Zone%2C%20Kuwait!5e0!3m2!1sen!2sin!4v1671457193107!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <!--<div class="row">-->
                <!--    <div class="col-sm-3">-->
                <!--        <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">-->
                <!--            <li class="active"><a data-toggle="tab" href="#description">Deal Details</a></li>-->
                <!--            <li><a data-toggle="tab" href="#vendor">Location</a></li>-->
                <!--            <li><a data-toggle="tab" href="#review">What is the Deal</a></li>-->
                <!--            <li><a data-toggle="tab" href="#tags">Conditions </a></li>-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--    <div class="col-sm-9">-->
                <!--        <div class="tab-content">-->
                <!--            <div id="description" class="tab-pane in active">-->
                <!--                <div class="product-tab">-->
                <!--                    <ul>-->
                <!--                        <li> <img src="assets/css/images/list_ico.png" /> Valid from: 10 November 2022 </li>-->
                <!--                        <li> <img src="assets/css/images/list_ico.png" /> Valid to: 10 December 2022 </li>-->
                <!--                        <li> <img src="assets/css/images/list_ico.png" /> Value: KD7 </li>-->
                <!--                    </ul>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div id="vendor" class="tab-pane">-->
                <!--                <div class="product-tab">-->
                <!--                    <div class="row">-->
                <!--                        <div class="form-group col-md-4">-->
                <!--                            <label style="display: block; font-size: 16px;"> Location </label>-->
                <!--                            <ul>-->
                <!--                                <li> <img src="https://cdn-icons-png.flaticon.com/512/25/25613.png" /> Free Trade Zone, Kuwait </li>-->
                <!--                                <li> <img src="https://cdn-icons-png.flaticon.com/512/25/25613.png" /> Free Trade Zone, Kuwait </li>-->
                <!--                                <li> <img src="https://cdn-icons-png.flaticon.com/512/25/25613.png" /> Free Trade Zone, Kuwait </li>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                        <div class="form-group col-md-12">-->
                <!--                            <label style="display: block; font-size: 16px;"> Map Location </label>-->
                <!--                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.9845997119787!2d75.88536997610602!3d22.728813779380737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fd47d43f557f%3A0xf04761078255979c!2sOnam%20Plaza%2C%20AB%20Rd%2C%20Near%20Industry%20House%2C%20New%20Palasia%2C%20Indore%2C%20Madhya%20Pradesh%20452001!5e0!3m2!1sen!2sin!4v1668170440529!5m2!1sen!2sin" height="250" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div id="review" class="tab-pane">-->
                <!--                <div class="product-tab">-->
                <!--                    <ul>-->
                <!--                        <li> <img src="assets/css/images/list_ico.png" /> To inquire: 97754040 </li>-->
                <!--                        <li> <img src="assets/css/images/list_ico.png" /> Advanced reservation is required </li>-->
                <!--                        <li> <img src="assets/css/images/list_ico.png" /> Working Times from 9 am to 9 pm </li>-->
                <!--                        <li> <img src="assets/css/images/list_ico.png" /> Can not be used with another offers </li>-->
                <!--                        <li> <img src="assets/css/images/list_ico.png" /> No cash back </li>-->
                <!--                    </ul>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div id="tags" class="tab-pane">-->
                <!--                <div class="product-tab">-->
                <!--                    <ul>-->
                <!--                        <li> <img src="assets/css/images/list_ico.png" /> Coupons will be sent by e-mail only and it can be redeemed by simply showing it on your smartphone or by giving the coupon code over the telephone to the merchant </li>-->
                <!--                        <li> <img src="assets/css/images/list_ico.png" /> Coupons will be sent by e-mail only and it can be redeemed by simply showing it on your smartphone or by giving the coupon code over the telephone to the merchant </li>-->
                <!--                        <li> <img src="assets/css/images/list_ico.png" /> Coupons will be sent by e-mail only and it can be redeemed by simply showing it on your smartphone or by giving the coupon code over the telephone to the merchant </li>-->
                <!--                    </ul>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <!-- ============================================== RELATED PRODUCTS ============================================== -->
            <!--<section class="section wow fadeInUp">-->
            <!--    <h3 class="section-title">Related Deals</h3>-->
            <!--    <div class="product-slider">-->
            <!--        <div class="row">-->
            <!--            <div class="col-md-6">-->
            <!--                <div class="products">-->
            <!--                    <div class="product product_left_bordr">-->
            <!--                        <div class="product-image">-->
            <!--                            <div class="image">-->
            <!--                                <a href="deals-detail.php"> <img src="https://img.freepik.com/free-vector/makeup-cosmetics-accessories-shelf-realistic-image_1284-9312.jpg" alt=""> </a>-->
            <!--                            </div>-->
            <!--                            <div class="tag new"><span>15%</span></div>-->
            <!--                            <div class="box-timer">-->
            <!--                                <div class="countbox_1 timer-grid"></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="product-info text-left">-->
            <!--                            <div class="dataflex">-->
            <!--                                <div class="brand"> Breakfast & Dinner for 2 Persons at Millennium </div>-->
            <!--                                <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example1" data-countdown="01/01/2023 05:06:59"></p>-->
            <!--                            </div>-->
            <!--                            <h3 class="name"><a href="deals-detail.php">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>-->
                                      
            <!--                            <div class="row falign_down">-->
            <!--                                <div class="col-md-6">-->
            <!--                                    <div class="product-price"> -->
            <!--                                        <span class="price-before-discount">$ 800</span> -->
            <!--                                        <span class="price"> $ 450.99 </span> -->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                <div class="col-md-6">-->
            <!--                                    <img class="buynow_btns" src="images/buynow.png" />-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-md-6">-->
            <!--                <div class="products">-->
            <!--                    <div class="product product_right_bordr">-->
            <!--                        <div class="product-image">-->
            <!--                            <div class="image">-->
            <!--                                <a href="deals-detail.php"> <img src="https://img.freepik.com/premium-psd/top-view-cosmetics-arrangement_23-2148600666.jpg" alt=""> </a>-->
            <!--                            </div>-->
            <!--                            <div class="tag new"><span>15%</span></div>-->
            <!--                            <div class="box-timer">-->
            <!--                                <div class="countbox_1 timer-grid"></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="product-info text-left">-->
            <!--                            <div class="dataflex">-->
            <!--                                <div class="brand"> Breakfast & Dinner for 2 Persons at Millennium </div>-->
            <!--                                <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example1" data-countdown="01/01/2023 05:06:59"></p>-->
            <!--                            </div>-->
            <!--                            <h3 class="name"><a href="deals-detail.php">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>-->
                                        
            <!--                            <div class="row falign_down">-->
            <!--                                <div class="col-md-6">-->
            <!--                                    <div class="product-price"> -->
            <!--                                        <span class="price-before-discount">$ 800</span> -->
            <!--                                        <span class="price"> $ 450.99 </span> -->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                <div class="col-md-6">-->
            <!--                                    <img class="buynow_btns" src="images/buynow.png" />-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>                               -->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->
            <!-- /.section -->
            <!-- ============================================== RELATED PRODUCTS : END ============================================== -->
        </div>
    </div>
</div>

@endsection

<style>
.product-info {
    width: 100%;
    padding: 20px 20px;
}
.product-slider{
    margin-top: 25px;
}
</style>
