<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <!-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->

    <title>Welcome to Brandbeans</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assetshtml/images/fav_icon.png" type="image/x-icon') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assetshtml/css/custom.css') }}" />

    <!-- Box Icons CSS -->
    <link href="{{ asset('assetshtml/css/boxicons.min.css') }}" rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assetshtml/css/bootstrap.css') }}">

    <!-- Owl CSS -->
    <link rel="stylesheet" href="{{ asset('assetshtml/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetshtml/css/owl.theme.default.min.css') }}">

    <!-- Brand Story Slider CSS -->
    <link rel="stylesheet" href="{{ asset('assetshtml/css/swiper-bundle.min.css') }}">

    <!-- WOW Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assetshtml/css/animate.css') }}">

</head>

<body>

    <!-- Header -->
    <div class="custom-overlay"></div>
    <header>
        <div class="container navbar">
            <a href="index.html" title="Perfect Property" class="header-logo d-block">
                <img src="{{ asset('assetshtml/images/logo.png') }}" title="Brandbeans" height="50" />
            </a>
            <div class="nav-item">
                <nav class="d-none d-lg-block">
                    <ul>
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="#">Influencer</a></li>
                    </ul>
                </nav>
                <ul>
                    <li><a href="#" class="custombtn">Login</a></li>
                    <li><a href="#" class="custombtn highlighbtn">Register</a></li>
                </ul>
                <div class="side-menu-close d-flex d-lg-none flex-wrap flex-column align-items-center justify-content-center ml-auto">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <!-- side menu start -->
    <div class="side-menu-wrap">
        <a href="index.html" title="Perfect Property" class="side-menu-logo d-block p-3">
            <img src="{{ asset('assetshtml/images/logo.png') }}" title="Perfect Property" width="180" />
        </a>
        <nav class="side-menu-nav">
            <!-- auto generated side menu from top header menu -->
        </nav>
        <ul class="login_btn">
            <li><a href="#" class="custombtn">Login</a></li>
            <li><a href="#" class="custombtn highlighbtn">Register</a></li>
        </ul>
        <div class="side-menu-close d-flex flex-wrap flex-column align-items-center justify-content-center">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- side menu end -->
    <!-- Header End -->

    <!-- Banner -->
    <div class="container-fluid banner_section">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>
            </div>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <!-- <img class="first-slde img-responsive" src="{{ asset('assetshtml/images/Banner01.jpg') }}" alt="First slide"> -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 banner_content">
                                <div class="carousel-caption">
                                    <h1 class="wow fadeInUp" data-wow-duration="1s">Find The Right <span>Influencer</span> For <span>Your Business</span></h1>
                                    <p class="wow fadeInUp" data-wow-duration="1.5s">Discovering the perfect influencer for your business identifying involves individuals whose values align with identifying your brand.</p>
                                    <a class="wow fadeInUp custombtn" data-wow-duration="2s" href="#">Find Influencer</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 banner_img">
                                <img class="img-responsive" src="{{ asset('assetshtml/images/Banner02.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- <img class="first-slde img-responsive" src="{{ asset('assetshtml/images/Banner01.jpg') }}" alt="First slide"> -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 banner_content">
                                <div class="carousel-caption">
                                    <h1 class="wow fadeInUp" data-wow-duration="1s">Find The Right <span>Influencer</span> For <span>Your Business</span></h1>
                                    <p class="wow fadeInUp" data-wow-duration="1.5s">Discovering the perfect influencer for your business identifying involves individuals whose values align with identifying your brand.</p>
                                    <a class="wow fadeInUp custombtn" data-wow-duration="2s" href="#">Find Influencer</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 banner_img">
                                <img class="img-responsive" src="{{ asset('assetshtml/images/Banner02.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="item">
                    <img class="first-slide img-responsive" src="{{ asset('assetshtml/images/Banner01.jpg') }}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <h1>Find The Right <span>Influencer</span> For <span>Your Business</span></h1>
                                <p>Discovering the perfect influencer for your business involves identifying individuals whose values align with your brand.</p>
                                <a href="#" class="custombtn">Find Influencer</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- /.carousel -->
    </div>
    <!-- Banner End -->


    <!-- USP Icon Section-->
    <div class="container-fluid USP_Section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center">
                    <div class="wow zoomIn icon" data-wow-duration="0.4s">
                        <img src="{{ asset('assetshtml/images/video_icon.png') }}" />
                        <h2>Video Shoutout</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center">
                    <div class="wow zoomIn icon" data-wow-duration="0.8s">
                        <img src="{{ asset('assetshtml/images/meet_icon.png') }}" />
                        <h2>Meet & Greet</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center">
                    <div class="wow zoomIn icon" data-wow-duration="1.2s">
                        <img src="{{ asset('assetshtml/images/gift_icon.png') }}" />
                        <h2>Gift under 500</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center">
                    <div class="wow zoomIn icon" data-wow-duration="1.6s">
                        <img src="{{ asset('assetshtml/images/inquiry_icon.png') }}" />
                        <h2>Brand Inquiry</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- USP Icon Section End -->


    <!-- Featured Section -->
    <div class="container-fluid featured_section">

        <div class="container">
            <div class="featured_slider owl-carousel owl-theme">
                <div class="item featured_item">
                    <div class="featured_slide">
                        <div>
                            <img class="img-responsive" src="{{ asset('assetshtml/images/featured_slider1.png') }}" />
                        </div>
                        <div class="content">
                            <h4>Discovering the perfect influencer for your business</h4>
                            <button class="custombtn">Find Influencer</button>
                        </div>
                    </div>
                </div>
                <div class="item featured_item">
                    <div class="featured_slide">
                        <div>
                            <img class="img-responsive" src="{{ asset('assetshtml/images/featured_slider1.png') }}" />
                        </div>
                        <div class="content">
                            <h4>Discovering the perfect influencer for your business</h4>
                            <button class="custombtn">Find Influencer</button>
                        </div>
                    </div>
                </div>
                <div class="item featured_item">
                    <div class="featured_slide">
                        <div>
                            <img class="img-responsive" src="{{ asset('assetshtml/images/featured_slider1.png') }}" />
                        </div>
                        <div class="content">
                            <h4>Discovering the perfect influencer for your business</h4>
                            <button class="custombtn">Find Influencer</button>
                        </div>
                    </div>
                </div>
                <div class="item featured_item">
                    <div class="featured_slide">
                        <div>
                            <img class="img-responsive" src="{{ asset('assetshtml/images/featured_slider1.png') }}" />
                        </div>
                        <div class="content">
                            <h4>Discovering the perfect influencer for your business</h4>
                            <button class="custombtn">Find Influencer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="featured_influencer">
            <div class="heading wow fadeInUp" data-wow-duration="1s">
                <h1>Featured <span>Creators</span></h1>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link active" id="food-tab" data-toggle="tab" href="#foodtab" role="tab" aria-controls="foodtab" aria-selected="true">Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="beauty-tab" data-toggle="tab" href="#beautytab" role="tab" aria-controls="beautytab" aria-selected="false">Beauty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="travel-tab" data-toggle="tab" href="#traveltab" role="tab" aria-controls="traveltab" aria-selected="false">Travel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="lifestyle-tab" data-toggle="tab" href="#lifestyletab" role="tab" aria-controls="lifestyletab" aria-selected="false">Lifesyle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fitness-tab" data-toggle="tab" href="#fitnesstab" role="tab" aria-controls="fitnesstab" aria-selected="false">Fitness</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fashion-tab" data-toggle="tab" href="#fashiontab" role="tab" aria-controls="fashiontab" aria-selected="false">Fashion</a>
                </li>
            </ul>
        </div>

    </div>

    <div class="container-fluid influencer_section">
        <div class="tab-content" id="myTabContent">

            <div class="tab-pane show active" id="foodtab" role="tabpanel" aria-labelledby="food-tab">
                <div class="influencer_inner">
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer1.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Khushi</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <span class="influencer_tag">Trending</span>
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer2.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Razina Bolim</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer3.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Nidhi Patel</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer4.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Shalini Patel</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <span class="influencer_tag featured">Featured</span>
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer5.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Jenny Jeshwani</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer6.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Aditi Singh</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <span class="influencer_tag">Trending</span>
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer7.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Dr. Charmy Mehta</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer8.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Vaibhav Manwani</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer9.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Saloni Singh</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <span class="influencer_tag featured">Featured</span>
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer10.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Savita Tolreja</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="beautytab" role="tabpanel" aria-labelledby="beauty-tab">
                <div class="influencer_inner">
                    <div class="influencer_item">
                        <span class="influencer_tag">Trending</span>
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer2.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Khushi</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer3.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Nidhi Patel</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer4.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Shalini Patel</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <span class="influencer_tag featured">Featured</span>
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer5.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Jenny Jeshwani</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer6.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Aditi Singh</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="traveltab" role="tabpanel" aria-labelledby="travel-tab">
                <div class="influencer_inner">
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer6.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Aditi Singh</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <span class="influencer_tag">Trending</span>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer2.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Khushi</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer3.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Nidhi Patel</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer4.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Shalini Patel</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <span class="influencer_tag featured">Featured</span>
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer5.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Jenny Jeshwani</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="lifestyletab" role="tabpanel" aria-labelledby="lifestyle-tab">
                <div class="influencer_inner">
                    <div class="influencer_item">
                        <span class="influencer_tag">Trending</span>
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer2.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Khushi</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer3.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Nidhi Patel</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer4.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Shalini Patel</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <span class="influencer_tag featured">Featured</span>
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer5.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Jenny Jeshwani</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer6.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Aditi Singh</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="fitnesstab" role="tabpanel" aria-labelledby="fitness-tab">
                <div class="influencer_inner">
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer6.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Aditi Singh</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <span class="influencer_tag">Trending</span>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer2.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Khushi</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer3.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Nidhi Patel</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer4.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Shalini Patel</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <span class="influencer_tag featured">Featured</span>
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer5.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Jenny Jeshwani</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="fashiontab" role="tabpanel" aria-labelledby="fashion-tab">
                <div class="influencer_inner">
                    <div class="influencer_item">
                        <span class="influencer_tag">Trending</span>
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer2.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Khushi</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer3.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Nidhi Patel</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer4.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Shalini Patel</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <span class="influencer_tag featured">Featured</span>
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer5.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Jenny Jeshwani</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="influencer_item">
                        <a href="#" class="heart_icon"><i class='bx bx-heart'></i></a>
                        <div class="influencer_img">
                            <img class="img-responsive" src="{{ asset('assetshtml/images/influencer6.jpg') }}" />
                        </div>
                        <div class="content">
                            <p>Aditi Singh</p>
                            <span>15k followers</span>
                            <div class="explore_btn">
                                <button class="custombtn highlighbtn">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Featured Section End -->


    <!-- Influencer Explore -->
    <div class="container">
        <div class="influencer_explore_section">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="heading wow fadeInUp" data-wow-duration="1s">
                        <h1>Promote your business through <span>Our Influencer</span></h1>
                    </div>
                    <p class="wow fadeInUp" data-wow-duration="1.5s">Discovering the perfect influencer for your business involves identifying individuals whose values align with your brand.</p>
                    <button class="wow fadeInUp custombtn" data-wow-duration="2s">Fill the Form</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="influencer_img">
                        <img class="img-responsive" src="{{ asset('assetshtml/images/explore_influencer.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Influencer Explore End -->


    <!-- Festival Post Section -->
    <div class="container-fluid festival_post_section">
        <div class="container">
            <div class="festival_post_inner">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <img class="img-responsive" src="{{ asset('assetshtml/images/festival_map.jpg') }}" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="heading wow fadeInUp" data-wow-duration="1s">
                            <h1>Create Your Personalized <span>Festival Post</span></h1>
                        </div>
                        <p class="wow fadeInUp" data-wow-duration="1.5s">Discovering the perfect influencer for your business involves identifying individuals whose values align with your brand.</p>
                        <div class="wow fadeInUp" data-wow-duration="2s">
                            <button class="custombtn">Readymade</button>
                            <button class="custombtn highlighbtn">Customize Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Festival Post Section End -->


    <!-- Brand Story Section -->
    <div class="container">
        <div class="brand_story_section">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="heading wow fadeInUp" data-wow-duration="1s">
                        <h1>Post Your <span>Brand Story</span></h1>
                    </div>
                    <p class="wow fadeInUp" data-wow-duration="1.5s">Discovering the perfect influencer for your business involves identifying individuals whose values align with your brand.</p>
                    <div class="wow fadeInUp" data-wow-duration="2s">
                        <button class="custombtn">Post Story</button>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <main>
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand_story_div">
                                        <div class="brand_story_img">
                                            <img class="img-responsive" src="{{ asset('assetshtml/images/brand_story_img1.jpg') }}" />
                                        </div>
                                        <div class="brand_story_content">
                                            <h4>Influencer Is a Real Job.</h4>
                                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the table win-win survival strategies to ensure proactive domination ensure proactive domination.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand_story_div">
                                        <div class="brand_story_img">
                                            <img class="img-responsive" src="{{ asset('assetshtml/images/brand_story_img2.jpg') }}" />
                                        </div>
                                        <div class="brand_story_content">
                                            <h4>Influencer Is a Real Job.</h4>
                                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the table win-win survival strategies to ensure proactive domination ensure proactive domination.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand_story_div">
                                        <div class="brand_story_img">
                                            <img class="img-responsive" src="{{ asset('assetshtml/images/brand_story_img3.jpg') }}" />
                                        </div>
                                        <div class="brand_story_content">
                                            <h4>Influencer Is a Real Job.</h4>
                                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the table win-win survival strategies to ensure proactive domination ensure proactive domination.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand_story_div">
                                        <div class="brand_story_img">
                                            <img class="img-responsive" src="{{ asset('assetshtml/images/brand_story_img1.jpg') }}" />
                                        </div>
                                        <div class="brand_story_content">
                                            <h4>Influencer Is a Real Job.</h4>
                                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the table win-win survival strategies to ensure proactive domination ensure proactive domination.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand_story_div">
                                        <div class="brand_story_img">
                                            <img class="img-responsive" src="{{ asset('assetshtml/images/brand_story_img2.jpg') }}" />
                                        </div>
                                        <div class="brand_story_content">
                                            <h4>Influencer Is a Real Job.</h4>
                                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the table win-win survival strategies to ensure proactive domination ensure proactive domination.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Story Section End -->


    <!-- Digital Business Card Section -->
    <div class="container">
        <div class="business_card_section">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="influencer_img">
                        <img class="img-responsive" src="{{ asset('assetshtml/images/business_card_app.png') }}" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="content">
                        <div class="heading wow fadeInUp" data-wow-duration="1s">
                            <h1>Create Your <br><span>Digital Business Card</span></h1>
                        </div>
                        <p class="wow fadeInUp" data-wow-duration="1.5s">Discovering the perfect influencer for your business involves identifying individuals whose values align with your brand.</p>
                        <div class="wow fadeInUp" data-wow-duration="2s">
                            <button class="custombtn">Create Your Card</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Digital Business Card Section End -->


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <h4>About Brandbeans</h4>
                    <p>Brand Beans is a leading one-stop window to explore and shop unique lifestyle and utility products. We have been showcasing the best and out-of-the-box range of products that will level up your living style.</p>
                    <a href="#" class="explore_btn">Explore More <span><i class='bx bx-right-arrow-alt'></i></span></a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 quick_links">
                    <h4>Quick Links</h4>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Refund</a></li>
                                <li><a href="#">Showcase</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 download_app">
                    <h4>Download App</h4>
                    <ul>
                        <li>
                            <a href="#"><img src="{{ asset('assetshtml/images/appstore_icon.png') }}" height="50" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('assetshtml/images/playstore_icon.png') }}" height="50" /></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bottom_stripe">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                        <p>Copyright 2024 © Brandbeans</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 social_media">
                        <ul>
                            <li>
                                <a href="#"><img src="{{ asset('assetshtml/images/fb_icon.png') }}" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('assetshtml/images/insta_icon.png') }}" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- bootstrap js -->
    <script src="{{ asset('assetshtml/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assetshtml/js/bootstrap.js') }}"></script>

    <!-- Featured Influencer Slider -->
    <script src="{{ asset('assetshtml/js/owl.carousel.js') }}"></script>
    <script>
        $('.featured_slider').owlCarousel({
            nav: true,
            margin: 10,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    </script>

    <!-- Navbar Menu -->
    <script>
        // auto generated side menu from top header menu start
        var topHeaderMenu = $('header nav > ul').clone();
        var sideMenu = $('.side-menu-wrap nav');
        sideMenu.append(topHeaderMenu);
        if ($(sideMenu).find('.sub-menu').length != 0) {
            $(sideMenu).find('.sub-menu').parent().append('<i class="fas fa-chevron-right d-flex align-items-center"></i>');
        }
        // auto generated side menu from top header menu end

        // close menu when clicked on menu link start
        // $('.side-menu-wrap nav > ul > li > a').on('click', function () {
        //   sideMenuCloseAction();
        // });
        // close menu when clicked on menu link end

        // open close sub menu of side menu start
        var sideMenuList = $('.side-menu-wrap nav > ul > li > i');
        $(sideMenuList).on('click', function() {
            if (!($(this).siblings('.sub-menu').hasClass('d-block'))) {
                $(this).siblings('.sub-menu').addClass('d-block');
            } else {
                $(this).siblings('.sub-menu').removeClass('d-block');
            }
        });
        // open close sub menu of side menu end

        // side menu close start
        $('.side-menu-close').on('click', function() {
            if (!($('.side-menu-close').hasClass('closed'))) {
                $('.side-menu-close').addClass('closed');
            } else {
                $('.side-menu-close').removeClass('closed');
            }
        });
        // side menu close end

        // auto append overlay to body start
        $('.wrapper').append('<div class="custom-overlay h-100 w-100"></div>');
        // auto append overlay to body end

        // open side menu when clicked on menu button start
        $('.side-menu-close').on('click', function() {
            if (!($('.side-menu-wrap').hasClass('opened')) && !($('.custom-overlay').hasClass('show'))) {
                $('.side-menu-wrap').addClass('opened');
                $('.custom-overlay').addClass('show');
            } else {
                $('.side-menu-wrap').removeClass('opened');
                $('.custom-overlay').removeClass('show');
            }
        })
        // open side menu when clicked on menu button end

        // close side menu when clicked on overlay start
        $('.custom-overlay').on('click', function() {
            sideMenuCloseAction();
        });
        // close side menu when clicked on overlay end

        // close side menu when swiped start
        var isDragging = false,
            initialOffset = 0,
            finalOffset = 0;
        $(".side-menu-wrap")
            .mousedown(function(e) {
                isDragging = false;
                initialOffset = e.offsetX;
            })
            .mousemove(function() {
                isDragging = true;
            })
            .mouseup(function(e) {
                var wasDragging = isDragging;
                isDragging = false;
                finalOffset = e.offsetX;
                if (wasDragging) {
                    if (initialOffset > finalOffset) {
                        sideMenuCloseAction();
                    }
                }
            });
        // close side menu when swiped end


        function sideMenuCloseAction() {
            $('.side-menu-wrap').addClass('open');
            $('.wrapper').addClass('freeze');
            $('.custom-overlay').removeClass('show');
            $('.side-menu-wrap').removeClass('opened');
            $('.side-menu-close').removeClass('closed');
            $(sideMenuList).siblings('.sub-menu').removeClass('d-block');
        }
        // close side menu when clicked on overlay end

        // close side menu over 992px start
        $(window).on('resize', function() {
            if ($(window).width() >= 992) {
                sideMenuCloseAction();
            }
        })
        // close side menu over 992px end
    </script>

    <!-- Brand Story Slider -->
    <script src="{{ asset('assetshtml/js/swiper-bundle.min.js') }}"></script>
    <script>
        var swiper = new Swiper(".swiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2.5
            },
            keyboard: {
                enabled: true
            },
            mousewheel: {
                thresholdDelta: 70
            },
            spaceBetween: 30,
            loop: false,
            breakpoints: {
                640: {
                    slidesPerView: 1
                },
                1024: {
                    slidesPerView: 2
                }
            }
        });

        swiper.slideTo(1, false, false);
    </script>

    <!-- WOW Animate Js -->
    <script src="{{ asset('assetshtml/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>
