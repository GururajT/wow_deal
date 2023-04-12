
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title> Deals & Coupons Applied </title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{url('public/assets/css/bootstrap.min.css')}}">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet"> -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{url('public/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/animate.min.html')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/rateit.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/bootstrap-select.min.css')}}">
    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{url('public/assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/blue.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/style.css')}}">
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">
        <div class="main-header">
            <div class="container">
                <div class="row" style="align-items: center; display: flex;">
                    <div class="col-xs-12 col-lg-2 col-sm-12 col-md-2 logo-holder">
                        <!-- ============================================================= LOGO ============================================================= -->
                        <div class="logo" style="text-align: center">
                            <a href="{{url('index')}}"> <img src="{{url('public/images/logo.png')}}" alt="logo"> </a>
                        </div>
                        <!-- /.logo -->
                        <!-- ============================================================= LOGO : END ============================================================= -->
                    </div>
                    <!-- /.logo-holder -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 top-search-holder" style="padding-right: 0px;">
                        <!-- /.contact-row -->
                        <!-- ============================================================= SEARCH AREA ============================================================= -->
                        <div class="search-area">
                            <form>
                                <div class="control-group">
                                    <input class="search-field" placeholder="Search here..." />
                                    <a class="search-button" href="javascript:;"> go! </a>
                                </div>
                            </form>
                        </div>
                        <!-- /.search-area -->
                        <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                    </div>
                    <!-- /.top-search-holder -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 navmenu" style="justify-content: center">
                        <div class="yamm navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            </div>
                            <div class="nav-bg-class">
                                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                                    <div class="nav-outer">
                                        <ul class="nav navbar-nav">
                                        	<li>
                                        		<select class="form-control select_lang">
                                        			<option> عربي  </option>
                                        			<option> English </option>
                                        		</select>
                                        	</li>
                                            <li> <a href="{{url('login')}}"> <img style="display: block; margin: auto; margin-bottom: 3px;" src="images/user.png" /> My Account </a> </li>
                                            <li> <a href="{{url('cart')}}"> <img style="display: block; margin: auto; margin-bottom: 3px;" src="images/shopping-cart.png" /> Cart </a> </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="top-cart-row">
                            <div class="dropdown dropdown-cart">
                                <a href="cart.php" class="lnk-cart">
                                    <div class="items-cart-inner">
                                        <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                                        <div class="basket-item-count"><span class="count">2</span></div>
                                        <div class="total-price-basket"> <span class="lbl">My Cart</span> </div>
                                    </div>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ============================================== HEADER : END ============================================== -->

    <div class="menusec" id="myHeader">
        <div class="container">
            <div class="submenu_sec">
                <i class="togglebar"> <img src="{{url('public/assets/css/images/menu.png')}}" /> </i>
                <nav class="menu">
                    <ol>
                        <li class="menu-item">
                            <a href="#0" id="restaurent_btn"> <img src="{{url('public/assets/css/images/deals.png')}}" /> Main Deals </a>
                        </li>
                        <li class="menu-item">
                            <a href="#0" id="restaurent_btn"> <img src="{{url('public/assets/css/images/deals.png')}}" /> Restaurents </a>
                            <!--<ol class="sub-menu">-->
                            <!--    <li class="menu-item"><a href="categories.php">Big Widgets</a></li>-->
                            <!--    <li class="menu-item"><a href="categories.php">Bigger Widgets</a></li>-->
                            <!--    <li class="menu-item"><a href="categories.php">Huge Widgets</a></li>-->
                            <!--</ol>-->
                        </li>
                        <li class="menu-item">
                            <a href="#0" id="auto_btn"> <img src="{{url('public/assets/css/images/weekend.png')}}" /> Auto </a>
                            <!--<ol class="sub-menu">-->
                            <!--    <li class="menu-item"><a href="categories.php">Big Widgets</a></li>-->
                            <!--    <li class="menu-item"><a href="categories.php">Bigger Widgets</a></li>-->
                            <!--    <li class="menu-item"><a href="categories.php">Huge Widgets</a></li>-->
                            <!--</ol>-->
                        </li>
                        <li class="menu-item">
                            <a href="#0" id="entertain_btn"> <img src="{{url('public/assets/css/images/coupon.png')}}" /> Entertainment</a>
                            <!--<ol class="sub-menu">-->
                            <!--    <li class="menu-item"><a href="categories.php">Big Widgets</a></li>-->
                            <!--    <li class="menu-item"><a href="categories.php">Bigger Widgets</a></li>-->
                            <!--    <li class="menu-item"><a href="categories.php">Huge Widgets</a></li>-->
                            <!--</ol>-->
                        </li>
                        <li class="menu-item">
                            <a href="#0" id="health_btn"> <img src="{{url('public/assets/css/images/restaurant.png')}" /> Health</a>
                            <!--<ol class="sub-menu">-->
                            <!--    <li class="menu-item"><a href="categories.php">Big Widgets</a></li>-->
                            <!--    <li class="menu-item"><a href="categories.php">Bigger Widgets</a></li>-->
                            <!--    <li class="menu-item"><a href="categories.php">Huge Widgets</a></li>-->
                            <!--</ol>-->
                        </li>
                        <li class="menu-item">
                            <a href="#0" id="beauty_btn"> <img src="assets/css/images/smartphone.png" /> Beauty and Spa</a>
                            <!--<ol class="sub-menu">-->
                            <!--    <li class="menu-item"><a href="categories.php">Big Widgets</a></li>-->
                            <!--    <li class="menu-item"><a href="categories.php">Bigger Widgets</a></li>-->
                            <!--    <li class="menu-item"><a href="categories.php">Huge Widgets</a></li>-->
                            <!--</ol>-->
                        </li>
                        <li class="menu-item">
                            <a href="#0" id="sweet_btn"> <img src="assets/css/images/toy.png" /> Sweets </a>
                            <!--<ol class="sub-menu">-->
                            <!--    <li class="menu-item"><a href="categories.php">Big Widgets</a></li>-->
                            <!--    <li class="menu-item"><a href="categories.php">Bigger Widgets</a></li>-->
                            <!--    <li class="menu-item"><a href="categories.php">Huge Widgets</a></li>-->
                            <!--</ol>-->
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="mysubmenu_sec">
        <div class="container">
            <section id="restaurent_sec">
                <ul>
                    <li> <a href="javascript:;"> Restaurents1  </a> </li>
                    <li> <a href="javascript:;"> Restaurents2  </a> </li>
                    <li> <a href="javascript:;"> Restaurents3  </a> </li>
                    <li> <a href="javascript:;"> Restaurents4  </a> </li>
                </ul>
            </section>
            <section id="auto_sec" style="display: none;">
                <ul>
                    <li> <a href="javascript:;"> Auto1  </a> </li>
                    <li> <a href="javascript:;"> Auto2  </a> </li>
                    <li> <a href="javascript:;"> Auto3  </a> </li>
                    <li> <a href="javascript:;"> Auto4  </a> </li>
                </ul>
            </section>
            <section id="entertain_sec" style="display: none;">
                <ul>
                    <li> <a href="javascript:;"> Entertainment1 </a> </li>
                    <li> <a href="javascript:;"> Entertainment2 </a> </li>
                    <li> <a href="javascript:;"> Entertainment3 </a> </li>
                    <li> <a href="javascript:;"> Entertainment4 </a> </li>
                </ul>
            </section>
            <section id="health_sec" style="display: none;">
                <ul>
                    <li> <a href="javascript:;"> Health1 </a> </li>
                    <li> <a href="javascript:;"> Health2 </a> </li>
                    <li> <a href="javascript:;"> Health3 </a> </li>
                    <li> <a href="javascript:;"> Health4 </a> </li>
                </ul>
            </section>
            <section id="beauty_sec" style="display: none;">
                <ul>
                    <li> <a href="javascript:;"> Beauty and Spa1 </a> </li>
                    <li> <a href="javascript:;"> Beauty and Spa2 </a> </li>
                    <li> <a href="javascript:;"> Beauty and Spa3 </a> </li>
                    <li> <a href="javascript:;"> Beauty and Spa4 </a> </li>
                </ul>
            </section>
            <section id="sweet_sec" style="display: none;">
                <ul>
                    <li> <a href="javascript:;"> Sweets1 </a> </li>
                    <li> <a href="javascript:;"> Sweets2 </a> </li>
                    <li> <a href="javascript:;"> Sweets3 </a> </li>
                    <li> <a href="javascript:;"> Sweets4 </a> </li>
                </ul>
            </section>
        </div>
    </div>

    <!-- <div class="outer-top-ts top-banner">
	    <div class="container"> <img class="img-responsive" src="assets/images/banners/top-banner.png" alt=""></div>
	</div> -->
	<div class="body-content outer-top-ts" id="top-banner-and-menu">