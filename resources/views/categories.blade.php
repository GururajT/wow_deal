
@extends('layouts.default')
@section('content')

<div class='container'>
    <div class='row'>
        <div class="col-md-12 rht-col">
            <div class="search-result-container ">
                <div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <img style="width: 24px; margin-right: 10px; position: absolute; margin-top: 9px; margin-left: 10px;" src="assets/css/images/filter.png" />
                            <select style="padding-left: 40px; font-weight: 600;" class="form-control">
                                <option> Oldest to Newest </option>
                                <option> Newest to Oldest </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="product-slider">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="products">
                                <div class="product product_left_bordr">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{url('deals-detail')}}"> <img src="https://img.freepik.com/free-vector/makeup-cosmetics-accessories-shelf-realistic-image_1284-9312.jpg" alt=""> </a>
                                        </div>
                                        <div class="discount_card">
                                            <h6> -50 % </h6>
                                            <h1> <del> OMR </del> OMR 6.7 </h1>
                                            <img class="buynow_btns" src="{{url('public/images/buynow.png')}}" />
                                            <p style="font-size: 10px; text-align: center; background: transparent; margin-bottom: 0; font-weight: 700;" id="example1" data-countdown="01/01/2023 05:06:59"></p>
                                        </div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('deals-detail')}}">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="products">
                                <div class="product product_right_bordr">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{url('deals-detail')}}"> <img src="https://img.freepik.com/premium-psd/top-view-cosmetics-arrangement_23-2148600666.jpg" alt=""> </a>
                                        </div>
                                        <div class="discount_card">
                                            <h6> -50 % </h6>
                                            <h1> <del> OMR </del> OMR 6.7 </h1>
                                            <img class="buynow_btns" src="{{url('public/images/buynow.png')}}" />
                                            <p style="font-size: 10px; text-align: center; background: transparent; margin-bottom: 0; font-weight: 700;" id="example1" data-countdown="01/01/2023 05:06:59"></p>
                                        </div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('deals-detail')}}">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="products">
                                <div class="product product_left_bordr">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{url('deals-detail')}}"> <img src="https://img.freepik.com/free-vector/makeup-cosmetics-accessories-shelf-realistic-image_1284-9312.jpg" alt=""> </a>
                                        </div>
                                        <div class="discount_card">
                                            <h6> -50 % </h6>
                                            <h1> <del> OMR </del> OMR 6.7 </h1>
                                            <img class="buynow_btns" src="{{url('public/images/buynow.png')}}" />
                                            <p style="font-size: 10px; text-align: center; background: transparent; margin-bottom: 0; font-weight: 700;" id="example1" data-countdown="01/01/2023 05:06:59"></p>
                                        </div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('deals-detail')}}">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="products">
                                <div class="product product_right_bordr">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{url('deals-detail')}}"> <img src="https://img.freepik.com/premium-psd/top-view-cosmetics-arrangement_23-2148600666.jpg" alt=""> </a>
                                        </div>
                                        <div class="discount_card">
                                            <h6> -50 % </h6>
                                            <h1> <del> OMR </del> OMR 6.7 </h1>
                                            <img class="buynow_btns" src="{{url('public/images/buynow.png')}}" />
                                            <p style="font-size: 10px; text-align: center; background: transparent; margin-bottom: 0; font-weight: 700;" id="example1" data-countdown="01/01/2023 05:06:59"></p>
                                        </div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('deals-detail')}}">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="products">
                                <div class="product product_left_bordr">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{url('deals-detail')}}"> <img src="https://img.freepik.com/free-vector/makeup-cosmetics-accessories-shelf-realistic-image_1284-9312.jpg" alt=""> </a>
                                        </div>
                                        <div class="discount_card">
                                            <h6> -50 % </h6>
                                            <h1> <del> OMR </del> OMR 6.7 </h1>
                                            <img class="buynow_btns" src="{{url('public/images/buynow.png')}}" />
                                            <p style="font-size: 10px; text-align: center; background: transparent; margin-bottom: 0; font-weight: 700;" id="example1" data-countdown="01/01/2023 05:06:59"></p>
                                        </div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('deals-detail')}}">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="products">
                                <div class="product product_right_bordr">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{url('deals-detail')}}"> <img src="https://img.freepik.com/premium-psd/top-view-cosmetics-arrangement_23-2148600666.jpg" alt=""> </a>
                                        </div>
                                        <div class="discount_card">
                                            <h6> -50 % </h6>
                                            <h1> <del> OMR </del> OMR 6.7 </h1>
                                            <img class="buynow_btns" src="{{url('public/images/buynow.png')}}" />
                                            <p style="font-size: 10px; text-align: center; background: transparent; margin-bottom: 0; font-weight: 700;" id="example1" data-countdown="01/01/2023 05:06:59"></p>
                                        </div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('deals-detail')}}">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="products">
                                <div class="product product_left_bordr">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="deals-detail.php"> <img src="https://img.freepik.com/free-vector/makeup-cosmetics-accessories-shelf-realistic-image_1284-9312.jpg" alt=""> </a>
                                        </div>
                                        <div class="discount_card">
                                            <h6> -50 % </h6>
                                            <h1> <del> OMR </del> OMR 6.7 </h1>
                                            <img class="buynow_btns" src="{{url('public/images/buynow.png')}}" />
                                            <p style="font-size: 10px; text-align: center; background: transparent; margin-bottom: 0; font-weight: 700;" id="example1" data-countdown="01/01/2023 05:06:59"></p>
                                        </div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('deals-detail')}}">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="products">
                                <div class="product product_right_bordr">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{url('deals-detail')}}"> <img src="https://img.freepik.com/premium-psd/top-view-cosmetics-arrangement_23-2148600666.jpg" alt=""> </a>
                                        </div>
                                        <div class="discount_card">
                                            <h6> -50 % </h6>
                                            <h1> <del> OMR </del> OMR 6.7 </h1>
                                            <img class="buynow_btns" src="{{url('public/images/buynow.png')}}" />
                                            <p style="font-size: 10px; text-align: center; background: transparent; margin-bottom: 0; font-weight: 700;" id="example1" data-countdown="01/01/2023 05:06:59"></p>
                                        </div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('deals-detail')}}">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="products">
                                <div class="product product_left_bordr">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{url('deals-detail')}}"> <img src="https://img.freepik.com/free-vector/makeup-cosmetics-accessories-shelf-realistic-image_1284-9312.jpg" alt=""> </a>
                                        </div>
                                        <div class="discount_card">
                                            <h6> -50 % </h6>
                                            <h1> <del> OMR </del> OMR 6.7 </h1>
                                            <img class="buynow_btns" src="{{url('public/images/buynow.png')}}" />
                                            <p style="font-size: 10px; text-align: center; background: transparent; margin-bottom: 0; font-weight: 700;" id="example1" data-countdown="01/01/2023 05:06:59"></p>
                                        </div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('deals-detail')}}">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="products">
                                <div class="product product_right_bordr">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{url('deals-detail')}}"> <img src="https://img.freepik.com/premium-psd/top-view-cosmetics-arrangement_23-2148600666.jpg" alt=""> </a>
                                        </div>
                                        <div class="discount_card">
                                            <h6> -50 % </h6>
                                            <h1> <del> OMR </del> OMR 6.7 </h1>
                                            <img class="buynow_btns" src="{{url('public/images/buynow.png')}}" />
                                            <p style="font-size: 10px; text-align: center; background: transparent; margin-bottom: 0; font-weight: 700;" id="example1" data-countdown="01/01/2023 05:06:59"></p>
                                        </div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{('deals-detail')}}">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="col-md-6">
                        <!--    <div class="products">-->
                        <!--        <div class="product product_right_bordr">-->
                        <!--            <div class="product-image">-->
                        <!--                <div class="image">-->
                        <!--                    <a href="deals-detail.php"> <img src="https://img.freepik.com/premium-psd/top-view-cosmetics-arrangement_23-2148600666.jpg" alt=""> </a>-->
                        <!--                </div>-->
                                         <!--/.image -->
                        <!--                <div class="tag new"><span>15%</span></div>-->
                        <!--                <div class="box-timer">-->
                        <!--                     <h5>Ends On:</h5> -->
                        <!--                    <div class="countbox_1 timer-grid"></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                     <!--/.product-image -->
                        <!--            <div class="product-info text-left">-->
                        <!--                <div class="dataflex">-->
                        <!--                    <div class="brand"> Breakfast & Dinner for 2 Persons at Millennium </div>-->
                        <!--                    <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example1" data-countdown="01/01/2023 05:06:59"></p>-->
                        <!--                </div>-->
                        <!--                <h3 class="name"><a href="deals-detail.php">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>-->
                                          
                        <!--                <div class="row falign_down">-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <div class="product-price"> -->
                        <!--                            <span class="price-before-discount">$ 800</span> -->
                        <!--                            <span class="price"> $ 450.99 </span> -->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <img class="buynow_btns" src="images/buynow.png" />-->
                                                 <!--<button class="btn btn-primary cart-btn" type="button">Buy Now</button> -->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                      
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6">-->
                        <!--    <div class="products">-->
                        <!--        <div class="product product_left_bordr">-->
                        <!--            <div class="product-image">-->
                        <!--                <div class="image">-->
                        <!--                    <a href="deals-detail.php"> <img src="https://img.freepik.com/free-photo/stack-clothes-white-background-closeup_93675-132633.jpg" alt=""> </a>-->
                        <!--                </div>-->
                                        <!-- /.image -->
                        <!--                <div class="tag new"><span>15%</span></div>-->
                        <!--                <div class="box-timer">-->
                                            <!-- <h5>Ends On:</h5> -->
                        <!--                    <div class="countbox_1 timer-grid"></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- /.product-image -->
                        <!--            <div class="product-info text-left">-->
                        <!--                <div class="dataflex">-->
                        <!--                    <div class="brand"> Breakfast & Dinner for 2 Persons at Millennium </div>-->
                        <!--                    <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example1" data-countdown="01/01/2023 05:06:59"></p>-->
                        <!--                </div>-->
                        <!--                <h3 class="name"><a href="deals-detail.php">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>-->
                                        <!--  -->
                        <!--                <div class="row falign_down">-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <div class="product-price"> -->
                        <!--                            <span class="price-before-discount">$ 800</span> -->
                        <!--                            <span class="price"> $ 450.99 </span> -->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <img class="buynow_btns" src="images/buynow.png" />-->
                                                <!-- <button class="btn btn-primary cart-btn" type="button">Buy Now</button> -->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!--  -->
                        <!--        </div>-->
                                <!-- /.product -->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6">-->
                        <!--    <div class="products">-->
                        <!--        <div class="product product_right_bordr">-->
                        <!--            <div class="product-image">-->
                        <!--                <div class="image">-->
                        <!--                    <a href="deals-detail.php"> <img src="https://img.freepik.com/free-photo/stack-clothes-white-background-closeup_93675-132644.jpg" alt=""> </a>-->
                        <!--                </div>-->
                                        <!-- /.image -->
                        <!--                <div class="tag new"><span>15%</span></div>-->
                        <!--                <div class="box-timer">-->
                                            <!-- <h5>Ends On:</h5> -->
                        <!--                    <div class="countbox_1 timer-grid"></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- /.product-image -->
                        <!--            <div class="product-info text-left">-->
                        <!--                <div class="dataflex">-->
                        <!--                    <div class="brand"> Breakfast & Dinner for 2 Persons at Millennium </div>-->
                        <!--                    <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example1" data-countdown="01/01/2023 05:06:59"></p>-->
                        <!--                </div>-->
                        <!--                <h3 class="name"><a href="deals-detail.php">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>-->
                                        <!--  -->
                        <!--                <div class="row falign_down">-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <div class="product-price"> -->
                        <!--                            <span class="price-before-discount">$ 800</span> -->
                        <!--                            <span class="price"> $ 450.99 </span> -->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <img class="buynow_btns" src="images/buynow.png" />-->
                                                <!-- <button class="btn btn-primary cart-btn" type="button">Buy Now</button> -->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!--  -->
                        <!--        </div>-->
                                <!-- /.product -->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6">-->
                        <!--    <div class="products">-->
                        <!--        <div class="product product_left_bordr">-->
                        <!--            <div class="product-image">-->
                        <!--                <div class="image">-->
                        <!--                    <a href="deals-detail.php"> <img src="https://img.freepik.com/free-vector/makeup-cosmetics-accessories-shelf-realistic-image_1284-9312.jpg" alt=""> </a>-->
                        <!--                </div>-->
                        <!--                <p style="font-size: 20px; font-weight: 700; position: absolute; right: 25px; margin-top: -66px; background: #ffffff80; padding: 9px 20px;" id="demo"></p>-->
                                        <!-- /.image -->
                        <!--                <div class="tag new"><span>15%</span></div>-->
                        <!--                <div class="box-timer">-->
                                            <!-- <h5>Ends On:</h5> -->
                        <!--                    <div class="countbox_1 timer-grid"></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- /.product-image -->
                        <!--            <div class="product-info text-left">-->
                        <!--                <div class="dataflex">-->
                        <!--                    <div class="brand"> Breakfast & Dinner for 2 Persons at Millennium </div>-->
                        <!--                    <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example1" data-countdown="01/01/2023 05:06:59"></p>-->
                        <!--                </div>-->
                        <!--                <h3 class="name"><a href="deals-detail.php">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>-->
                                        <!--  -->
                        <!--                <div class="row falign_down">-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <div class="product-price"> -->
                        <!--                            <span class="price-before-discount">$ 800</span> -->
                        <!--                            <span class="price"> $ 450.99 </span> -->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <img class="buynow_btns" src="images/buynow.png" />-->
                                                <!-- <button class="btn btn-primary cart-btn" type="button">Buy Now</button> -->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!--  -->
                        <!--        </div>-->
                                <!-- /.product -->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6">-->
                        <!--    <div class="products">-->
                        <!--        <div class="product product_right_bordr">-->
                        <!--            <div class="product-image">-->
                        <!--                <div class="image">-->
                        <!--                    <a href="deals-detail.php"> <img src="https://img.freepik.com/premium-psd/top-view-cosmetics-arrangement_23-2148600666.jpg" alt=""> </a>-->
                        <!--                </div>-->
                                        <!-- /.image -->
                        <!--                <div class="tag new"><span>15%</span></div>-->
                        <!--                <div class="box-timer">-->
                                            <!-- <h5>Ends On:</h5> -->
                        <!--                    <div class="countbox_1 timer-grid"></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- /.product-image -->
                        <!--            <div class="product-info text-left">-->
                        <!--                <div class="dataflex">-->
                        <!--                    <div class="brand"> Breakfast & Dinner for 2 Persons at Millennium </div>-->
                        <!--                    <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example1" data-countdown="01/01/2023 05:06:59"></p>-->
                        <!--                </div>-->
                        <!--                <h3 class="name"><a href="deals-detail.php">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>-->
                                        <!--  -->
                        <!--                <div class="row falign_down">-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <div class="product-price"> -->
                        <!--                            <span class="price-before-discount">$ 800</span> -->
                        <!--                            <span class="price"> $ 450.99 </span> -->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <img class="buynow_btns" src="images/buynow.png" />-->
                                                <!-- <button class="btn btn-primary cart-btn" type="button">Buy Now</button> -->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!--  -->
                        <!--        </div>-->
                                <!-- /.product -->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6">-->
                        <!--    <div class="products">-->
                        <!--        <div class="product product_left_bordr">-->
                        <!--            <div class="product-image">-->
                        <!--                <div class="image">-->
                        <!--                    <a href="deals-detail.php"> <img src="https://img.freepik.com/free-photo/stack-clothes-white-background-closeup_93675-132633.jpg" alt=""> </a>-->
                        <!--                </div>-->
                                        <!-- /.image -->
                        <!--                <div class="tag new"><span>15%</span></div>-->
                        <!--                <div class="box-timer">-->
                                            <!-- <h5>Ends On:</h5> -->
                        <!--                    <div class="countbox_1 timer-grid"></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- /.product-image -->
                        <!--            <div class="product-info text-left">-->
                        <!--                <div class="dataflex">-->
                        <!--                    <div class="brand"> Breakfast & Dinner for 2 Persons at Millennium </div>-->
                        <!--                    <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example1" data-countdown="01/01/2023 05:06:59"></p>-->
                        <!--                </div>-->
                        <!--                <h3 class="name"><a href="deals-detail.php">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>-->
                                        <!--  -->
                        <!--                <div class="row falign_down">-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <div class="product-price"> -->
                        <!--                            <span class="price-before-discount">$ 800</span> -->
                        <!--                            <span class="price"> $ 450.99 </span> -->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <img class="buynow_btns" src="images/buynow.png" />-->
                                                <!-- <button class="btn btn-primary cart-btn" type="button">Buy Now</button> -->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!--  -->
                        <!--        </div>-->
                                <!-- /.product -->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6">-->
                        <!--    <div class="products">-->
                        <!--        <div class="product product_right_bordr">-->
                        <!--            <div class="product-image">-->
                        <!--                <div class="image">-->
                        <!--                    <a href="deals-detail.php"> <img src="https://img.freepik.com/free-photo/stack-clothes-white-background-closeup_93675-132644.jpg" alt=""> </a>-->
                        <!--                </div>-->
                                        <!-- /.image -->
                        <!--                <div class="tag new"><span>15%</span></div>-->
                        <!--                <div class="box-timer">-->
                                            <!-- <h5>Ends On:</h5> -->
                        <!--                    <div class="countbox_1 timer-grid"></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- /.product-image -->
                        <!--            <div class="product-info text-left">-->
                        <!--                <div class="dataflex">-->
                        <!--                    <div class="brand"> Breakfast & Dinner for 2 Persons at Millennium </div>-->
                        <!--                    <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example1" data-countdown="01/01/2023 05:06:59"></p>-->
                        <!--                </div>-->
                        <!--                <h3 class="name"><a href="deals-detail.php">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>-->
                                        <!--  -->
                        <!--                <div class="row falign_down">-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <div class="product-price"> -->
                        <!--                            <span class="price-before-discount">$ 800</span> -->
                        <!--                            <span class="price"> $ 450.99 </span> -->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <img class="buynow_btns" src="images/buynow.png" />-->
                                                <!-- <button class="btn btn-primary cart-btn" type="button">Buy Now</button> -->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!--  -->
                        <!--        </div>-->
                                <!-- /.product -->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6">-->
                        <!--    <div class="products">-->
                        <!--        <div class="product product_left_bordr">-->
                        <!--            <div class="product-image">-->
                        <!--                <div class="image">-->
                        <!--                    <a href="deals-detail.php"> <img src="https://img.freepik.com/free-vector/makeup-cosmetics-accessories-shelf-realistic-image_1284-9312.jpg" alt=""> </a>-->
                        <!--                </div>-->
                        <!--                <p style="font-size: 20px; font-weight: 700; position: absolute; right: 25px; margin-top: -66px; background: #ffffff80; padding: 9px 20px;" id="demo"></p>-->
                                        <!-- /.image -->
                        <!--                <div class="tag new"><span>15%</span></div>-->
                        <!--                <div class="box-timer">-->
                                            <!-- <h5>Ends On:</h5> -->
                        <!--                    <div class="countbox_1 timer-grid"></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- /.product-image -->
                        <!--            <div class="product-info text-left">-->
                        <!--                <div class="dataflex">-->
                        <!--                    <div class="brand"> Breakfast & Dinner for 2 Persons at Millennium </div>-->
                        <!--                    <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example1" data-countdown="01/01/2023 05:06:59"></p>-->
                        <!--                </div>-->
                        <!--                <h3 class="name"><a href="deals-detail.php">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>-->
                                        <!--  -->
                        <!--                <div class="row falign_down">-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <div class="product-price"> -->
                        <!--                            <span class="price-before-discount">$ 800</span> -->
                        <!--                            <span class="price"> $ 450.99 </span> -->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <img class="buynow_btns" src="images/buynow.png" />-->
                                                <!-- <button class="btn btn-primary cart-btn" type="button">Buy Now</button> -->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!--  -->
                        <!--        </div>-->
                                <!-- /.product -->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6">-->
                        <!--    <div class="products">-->
                        <!--        <div class="product product_right_bordr">-->
                        <!--            <div class="product-image">-->
                        <!--                <div class="image">-->
                        <!--                    <a href="deals-detail.php"> <img src="https://img.freepik.com/premium-psd/top-view-cosmetics-arrangement_23-2148600666.jpg" alt=""> </a>-->
                        <!--                </div>-->
                                        <!-- /.image -->
                        <!--                <div class="tag new"><span>15%</span></div>-->
                        <!--                <div class="box-timer">-->
                                            <!-- <h5>Ends On:</h5> -->
                        <!--                    <div class="countbox_1 timer-grid"></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- /.product-image -->
                        <!--            <div class="product-info text-left">-->
                        <!--                <div class="dataflex">-->
                        <!--                    <div class="brand"> Breakfast & Dinner for 2 Persons at Millennium </div>-->
                        <!--                    <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example1" data-countdown="01/01/2023 05:06:59"></p>-->
                        <!--                </div>-->
                        <!--                <h3 class="name"><a href="deals-detail.php">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>-->
                                        <!--  -->
                        <!--                <div class="row falign_down">-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <div class="product-price"> -->
                        <!--                            <span class="price-before-discount">$ 800</span> -->
                        <!--                            <span class="price"> $ 450.99 </span> -->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <img class="buynow_btns" src="images/buynow.png" />-->
                                                <!-- <button class="btn btn-primary cart-btn" type="button">Buy Now</button> -->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!--  -->
                        <!--        </div>-->
                                <!-- /.product -->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6">-->
                        <!--    <div class="products">-->
                        <!--        <div class="product product_left_bordr">-->
                        <!--            <div class="product-image">-->
                        <!--                <div class="image">-->
                        <!--                    <a href="deals-detail.php"> <img src="https://img.freepik.com/free-photo/stack-clothes-white-background-closeup_93675-132633.jpg" alt=""> </a>-->
                        <!--                </div>-->
                                        <!-- /.image -->
                        <!--                <div class="tag new"><span>15%</span></div>-->
                        <!--                <div class="box-timer">-->
                                            <!-- <h5>Ends On:</h5> -->
                        <!--                    <div class="countbox_1 timer-grid"></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- /.product-image -->
                        <!--            <div class="product-info text-left">-->
                        <!--                <div class="dataflex">-->
                        <!--                    <div class="brand"> Breakfast & Dinner for 2 Persons at Millennium </div>-->
                        <!--                    <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example1" data-countdown="01/01/2023 05:06:59"></p>-->
                        <!--                </div>-->
                        <!--                <h3 class="name"><a href="deals-detail.php">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>-->
                                        <!--  -->
                        <!--                <div class="row falign_down">-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <div class="product-price"> -->
                        <!--                            <span class="price-before-discount">$ 800</span> -->
                        <!--                            <span class="price"> $ 450.99 </span> -->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <img class="buynow_btns" src="images/buynow.png" />-->
                                                <!-- <button class="btn btn-primary cart-btn" type="button">Buy Now</button> -->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!--  -->
                        <!--        </div>-->
                                <!-- /.product -->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6">-->
                        <!--    <div class="products">-->
                        <!--        <div class="product product_right_bordr">-->
                        <!--            <div class="product-image">-->
                        <!--                <div class="image">-->
                        <!--                    <a href="deals-detail.php"> <img src="https://img.freepik.com/free-photo/stack-clothes-white-background-closeup_93675-132644.jpg" alt=""> </a>-->
                        <!--                </div>-->
                                        <!-- /.image -->
                        <!--                <div class="tag new"><span>15%</span></div>-->
                        <!--                <div class="box-timer">-->
                                            <!-- <h5>Ends On:</h5> -->
                        <!--                    <div class="countbox_1 timer-grid"></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- /.product-image -->
                        <!--            <div class="product-info text-left">-->
                        <!--                <div class="dataflex">-->
                        <!--                    <div class="brand"> Breakfast & Dinner for 2 Persons at Millennium </div>-->
                        <!--                    <p style="font-size: 20px; font-weight: 500; background: #ffffff80;" id="example1" data-countdown="01/01/2023 05:06:59"></p>-->
                        <!--                </div>-->
                        <!--                <h3 class="name"><a href="deals-detail.php">Enjoy Romantic Night in a Deluxe room Including Breakfast & Dinner for 2 Persons at Millennium Centra</a></h3>-->
                                        <!--  -->
                        <!--                <div class="row falign_down">-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <div class="product-price"> -->
                        <!--                            <span class="price-before-discount">$ 800</span> -->
                        <!--                            <span class="price"> $ 450.99 </span> -->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-md-6">-->
                        <!--                        <img class="buynow_btns" src="images/buynow.png" />-->
                                                <!-- <button class="btn btn-primary cart-btn" type="button">Buy Now</button> -->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!--  -->
                        <!--        </div>-->
                                <!-- /.product -->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="clearfix filters-container bottom-row">
                    <div class="text-right">
                        <div class="pagination-container">
                            <ul class="list-inline list-unstyled">
                                <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<style>
.product-info {
    padding: 20px 20px;
}
</style>