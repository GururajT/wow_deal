
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="https://mobidudes.com/SAK/wowdeal/public/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title> Woedeal</title>
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
                            <a href="{{url('/')}}"> <img src="{{url('public/images/logo.png')}}" alt="logo"> </a>
                        </div>
                        <!-- /.logo -->
                        <!-- ============================================================= LOGO : END ============================================================= -->
                    </div>
                    <!-- /.logo-holder -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 top-search-holder" style="padding-right: 0px;">
                        <!-- /.contact-row -->
                        <!-- ============================================================= SEARCH AREA ============================================================= -->
                        <div class="search-area">
                            <form action="{{url('search')}}" method="">
                                <div class="control-group">
                                    <input type="text" class="search-field" name="query" id="query" placeholder="Search here..." />
                                    <button type="submit" class="search-button">SEARCH</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.search-area -->
                        <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                    </div>
                    <!-- /.top-search-holder -->
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 navmenu" style="justify-content: center">
                        <div class="yamm navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            </div>
                            <div class="nav-bg-class">
                                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                                    <div class="nav-outer">
                                        <ul class="nav navbar-nav">
                                        	<li>
                                        		<select class="form-control select_lang" name="language" onchange="this.form.submit();">
                                        			<option value="ar"> عربي  </option>
                                        			<option value="en" selected=""> English </option>
                                        		</select>
                                        			
                                        	</li>
                                            <li> 
                                                @auth
                                                <a href="{{url('myaccount')}}">
                                                    <img style="display: block; margin: ; margin-bottom: 3px;" src="{{url('public/images/user.png')}}" /> My Account </a> 
                                                @endauth

                                                @guest
                                                <a href="{{route('login')}}">
                                                    <img style="display: block; margin: ; margin-bottom: 3px;" src="{{url('public/images/user.png')}}" />Login </a>
                                                @endguest

                                            </li>
                                            {{-- <li> <a href="{{url('cart')}}"> <img style="display: block; margin: auto; margin-bottom: 3px;padding:0px 5px" src="{{url('public/images/shopping-cart.png')}}" /> Cart </a> </li> --}}
                                            <li><a href="{{url('add_deal')}}"><img style="display: block; margin: auto; margin-bottom: 3px;padding:0px 5px" src="{{url('public/images/adddeal.png')}}" /> Add Deals </a></li>
                                            
                                        </ul>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ============================================== HEADER : END ============================================== -->

    <div class="menusec" id="myHeader">
        <div class="container">
            <div class="submenu_sec">
                <i class="togglebar"> <img src="{{url('assets/css/images/menu.png')}}" /> </i>
                <nav class="menu">
                    <ol>
                        <?php
                            $getcategory=App\Models\Category::get();
                            ?>
                            @foreach ($getcategory as $row)
                      <li class="menu-item">
                            <a href="{{url('/?category_id='.$row->id)}}" id="restaurent_btn"> <img src="{{url('public/assets/css/images/deals.png')}}" />{{$row->name}} </a>
                        </li>
                        @endforeach
                        
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    

    
	<div class="body-content outer-top-ts" id="top-banner-and-menu">