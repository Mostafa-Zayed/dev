<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ariel - App Landing Page Template + RTL </title>
    <meta name="description" content="App Landing page, RTL Version, Marwa El-Manawy, Application">
    <meta name="author" content="Marwa El-Manawy - https://elmanawy.info" />
    <link rel="icon" href="favicon.png">
    <!-- Font Icons -->
    <link rel="stylesheet" href="{{asset('website/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/flaticon.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('website/css/animate.min.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('website/css/owl.carousel.min.css')}}">
    <!-- Light Case -->
    <link rel="stylesheet" href="{{asset('website/css/lightcase.min.css')}}" type="text/css">
    <!-- Template style -->
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="preloader-circle">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /preloader -->

    <!--Start Header Area-->
    <header class="header-area" id="header-area">
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container">
                <div class="site-logo"><a class="navbar-brand" href="index.html"><img src="images/logo.png" class="img-fluid" alt="Img" /></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="index.html">Home Demo 01</a>
                                <a class="dropdown-item" href="index-2.html">Home Demo 02</a>
                                <a class="dropdown-item" href="index-3.html">Home Demo 03</a>
                                <a class="dropdown-item" href="index-4.html">Home Demo 04</a>
                                <a class="dropdown-item" href="index-5.html">Home Demo 05</a>
                                <a class="dropdown-item" href="index-6.html">Home Demo 06</a>
                                <a class="dropdown-item" href="index-7.html">Home Demo 07</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="about-us.html">About Us</a>
                                <a class="dropdown-item" href="contact-us.html">Contact Us</a>
                                <a class="dropdown-item" href="faqs.html">Faqs</a>
                                <a class="dropdown-item" href="reviews.html">Reviews</a>
                                <a class="dropdown-item" href="login.html">Login</a>
                                <a class="dropdown-item" href="signup.html">Signup</a>
                                <a class="dropdown-item" href="forget-password.html">Forget Password</a>
                                <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                                <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                <a class="dropdown-item" href="page-404.html">Page 404</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item" href="blog-1.html">Blog Demo 1</a>
                                <a class="dropdown-item" href="blog-2.html">Blog Demo 2</a>
                                <a class="dropdown-item" href="single-post.html">Single Post</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-scroll-nav="1">Features</a></li>
                        <li class="nav-item"><a href="#" data-scroll-nav="2">How it work</a></li>
                        <li class="nav-item"><a href="#" data-scroll-nav="3">Screenshots</a></li>
                        <li class="nav-item"><a href="#" data-scroll-nav="4">Pricing</a></li>
                        <li class="nav-item"><a href="#" data-scroll-nav="7">Reviews</a></li>
                        <li class="nav-item"><a href="#" data-scroll-nav="6">Faqs</a></li>
                        <li class="nav-item"><a href="#" data-scroll-nav="8">Contact</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- End Header Area-->

    <!-- Start Home Area -->
    <section class="start_home demo1">
        <div class="banner_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 start-home-content">
                        <h1>
                            {{$template->websiteSlider->heading}}
                        </h1>
                        <p>{{$template->websiteSlider->description}}</p>
                        <div class="app-button">
                            <div class="apple-button">
                                <a href="{{$template->websiteSlider->app_store_link}}">
                                    <div class="slider-button-icon">
                                        <i class="fab fa-apple" aria-hidden="true"></i>
                                    </div>
                                    <div class="slider-button-title">
                                        <p>from App store</p>
                                        <h3>app store</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="google-button">
                                <a href="{{$template->websiteSlider->google_play_link}}">
                                    <div class="slider-button-icon">
                                        <i class="fab fa-google-play" aria-hidden="true"></i>
                                    </div>
                                    <div class="slider-button-title">
                                        <p>From Play Store</p>
                                        <h3>Google Play</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 start-home-img">
                        <img class="img-fluid" src="{{asset($template->websiteSlider->image)}}" alt="Img" />
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-bottom">
            <img src="images/shapes/shape-1.svg" alt="shape" class="bottom-shape img-fluid">
        </div>
    </section>
    <!-- End Home Area -->

    <!-- Start Features Section -->
    <section id="AppFeatures" class="section-block features-style1" data-scroll-index="1">
        <div class="circls-features active">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="circle-4"></div>
            <div class="circle-x"></div>
        </div>
        <div class="container">
            <div class="section-header">
                <h2>{{$settings->getTranslations('section_features_title')[app()->getLocale()]}}</h2>
                <p>{{$settings->getTranslations('section_features_description')[app()->getLocale()]}}</p>
            </div>
            <div class="row">
                <!-- Start Features Item -->
                <div class="col-md-4">
                    <div class="feature-block">
                        <span class="feature-icon icon-1">
                            <i class="ti-wand"></i>
                        </span>
                        <h3>Trendy Look</h3>
                        <p>We provide marketing to businesses to looking for a partner digital media.</p>
                    </div>
                </div>
                <!-- End Features Item -->

                <!-- Start Features Item -->
                <div class="col-md-4">
                    <div class="feature-block">
                        <span class="feature-icon icon-2">
                            <i class="ti-gift"></i>
                        </span>
                        <h3>Clean Code</h3>
                        <p>We provide marketing to businesses to looking for a partner digital media.</p>
                    </div>
                </div>
                <!-- End Features Item -->

                <!-- Start Features Item -->
                <div class="col-md-4">
                    <div class="feature-block">
                        <span class="feature-icon icon-3">
                            <i class="ti-announcement"></i>
                        </span>
                        <h3>No Ads</h3>
                        <p>We provide marketing to businesses to looking for a partner digital media.</p>
                    </div>
                </div>
                <!-- End Features Item -->

                <!-- Start Features Item -->
                <div class="col-md-4">
                    <div class="feature-block">
                        <span class="feature-icon icon-4">
                            <i class="ti-headphone-alt"></i>
                        </span>
                        <h3>Free Support</h3>
                        <p>We provide marketing to businesses to looking for a partner digital media.</p>
                    </div>
                </div>
                <!-- End Features Item -->

                <!-- Start Features Item -->
                <div class="col-md-4">
                    <div class="feature-block">
                        <span class="feature-icon icon-5">
                            <i class="ti-bar-chart"></i>
                        </span>
                        <h3>Speed Optimization</h3>
                        <p>We provide marketing to businesses to looking for a partner digital media.</p>
                    </div>
                </div>
                <!-- End Features Item -->

                <!-- Start Features Item -->
                <div class="col-md-4">
                    <div class="feature-block">
                        <span class="feature-icon icon-6">
                            <i class="ti-pencil-alt"></i>
                        </span>
                        <h3>Full Customization</h3>
                        <p>We provide marketing to businesses to looking for a partner digital media.</p>
                    </div>
                </div>
                <!-- End Features Item -->
            </div>
        </div>
    </section>
    <!-- End Features Section -->

    <!-- Start How it works Section -->
    <section id="how-it-work" class="section-block" data-scroll-index="2">
        <div class="container">
            <div class="section-header">
                <h2>{{$settings->getTranslations('section_work_title')[app()->getLocale()]}}</h2>
                <p>{{$settings->getTranslations('section_work_description')[app()->getLocale()]}}</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/how-work.png" alt="Img" />
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Start Block 1 -->
                    <div class="description-block">
                        <div class="inner-box">
                            <div class="step_num"><img src="images/step1.png" /></div>
                            <h3>Register / Login to our Platform</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident.</p>
                        </div>
                    </div>
                    <!-- End Block 1 -->

                    <!-- Start Block 2 -->
                    <div class="description-block">
                        <div class="inner-box">
                            <div class="step_num"><img src="images/step2.png" /></div>
                            <h3>Enter Your Information Details</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident.</p>
                        </div>
                    </div>
                    <!-- End Block 2 -->

                    <!-- Start Block 3 -->
                    <div class="description-block">
                        <div class="inner-box">
                            <div class="step_num"><img src="images/step3.png" /></div>
                            <h3>Follow Your Software Usage Steps</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident.</p>
                        </div>
                    </div>
                    <!-- End Block 3 -->
                </div>

            </div>
        </div>
    </section>
    <!-- End How it works Section -->

    <!-- Start App Screenshots Section -->
    <section id="appScreenshots" class="section-block" data-scroll-index="3">
        <div class="shape-top"></div>
        <div class="container">
            <div class="section-header">
                <h2>{{$settings->getTranslations('section_screenshot_title')[app()->getLocale()]}}</h2>
                {!$settings->getTranslations('section_screenshot_description')[app()->getLocale()]!}
            </div>

            <div class="list_screen_slide owl-carousel">
                <!-- Start screen item-->
                <div class="item">
                    <a href="images/screen/1.png" data-rel="lightcase:gal">
                        <img src="images/screen/1.png" alt="Img">
                    </a>
                </div>
                <!-- End screen item-->

                <!-- Start screen item-->
                <div class="item">
                    <a href="images/screen/2.png" data-rel="lightcase:gal">
                        <img src="images/screen/2.png" alt="Img">
                    </a>
                </div>
                <!-- End screen item-->

                <!-- Start screen item-->
                <div class="item">
                    <a href="images/screen/3.png" data-rel="lightcase:gal">
                        <img src="images/screen/3.png" alt="Img">
                    </a>
                </div>
                <!-- End screen item-->

                <!-- Start screen item-->
                <div class="item">
                    <a href="images/screen/2.png" data-rel="lightcase:gal">
                        <img src="images/screen/2.png" alt="Img">
                    </a>
                </div>
                <!-- End screen item-->

                <!-- Start screen item-->
                <div class="item">
                    <a href="images/screen/3.png" data-rel="lightcase:gal">
                        <img src="images/screen/3.png" alt="Img">
                    </a>
                </div>
                <!-- End screen item-->

                <!-- Start screen item-->
                <div class="item">
                    <a href="images/screen/2.png" data-rel="lightcase:gal">
                        <img src="images/screen/2.png" alt="Img">
                    </a>
                </div>
                <!-- End screen item-->

                <!-- Start screen item-->
                <div class="item">
                    <a href="images/screen/3.png" data-rel="lightcase:gal">
                        <img src="images/screen/3.png" alt="Img">
                    </a>
                </div>
                <!-- End screen item-->

                <!-- Start screen item-->
                <div class="item">
                    <a href="images/screen/2.png" data-rel="lightcase:gal">
                        <img src="images/screen/2.png" alt="Img">
                    </a>
                </div>
                <!-- End screen item-->

                <!-- Start screen item-->
                <div class="item">
                    <a href="images/screen/3.png" data-rel="lightcase:gal">
                        <img src="images/screen/3.png" alt="Img">
                    </a>
                </div>
                <!-- End screen item-->
            </div>
        </div>
    </section>
    <!-- End App Screenshots Section -->

    <!-- Start Pricing Section -->
    <section id="pricing" class="section-block" data-scroll-index="4">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-header-style2">
                        <h2>No additional costs.<br>Pay for what you use.</h2>
                        <p>Choose the most suitable service for your needs with reasonable price.</p>
                    </div>
                    <ul class="nav pricing-btns-group">
                        <li><a class="active btn" data-toggle="tab" href="#monthly">Monthly</a></li>
                        <li><a class="btn" data-toggle="tab" href="#yearly">Yearly <span class="btn-badge">10% OFF</span></a></li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <div class="tab-content">
                        <!-- Start Tab content 1 -->
                        <div id="monthly" class="tab-pane fade in active show">
                            <div class="row">
                                <!-- Start pricing table-->
                                <div class="col-md-6">
                                    <div class="pricing-card">
                                        <header class="card-header">
                                            <h4>Individual Plan</h4>
                                            <span class="card-header-price">
                                                <span class="simbole">$</span>
                                                <span class="price-num">22</span>
                                                <span class="price-date">/month</span>
                                            </span>
                                            <div class="shape-bottom">
                                                <img src="images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
                                            </div>
                                        </header>
                                        <div class="card-body">
                                            <ul>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    Community support
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    400+ pages
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    100+ header variations
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    20+ home page options
                                                </li>
                                            </ul>
                                            <button type="button" class="btn btn-sm btn-block">Get Started</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End pricing table-->

                                <!-- Start pricing table-->
                                <div class="col-md-6">
                                    <div class="pricing-card top-35">
                                        <header class="card-header">
                                            <h4>Enterprise Plan</h4>
                                            <span class="card-header-price">
                                                <span class="simbole">$</span>
                                                <span class="price-num">99</span>
                                                <span class="price-date">/month</span>
                                            </span>
                                            <div class="shape-bottom">
                                                <img src="images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
                                            </div>
                                        </header>
                                        <div class="card-body">
                                            <ul>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    24/7 support
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    400+ pages
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    200+ header variations
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    40+ home page options
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    E-commerce
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    Free Domain
                                                </li>
                                            </ul>
                                            <button type="button" class="btn btn-sm btn-block">Get Started</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End pricing table-->
                            </div>
                        </div>
                        <!-- End Tab content 1 -->

                        <!-- Start Tab content 2 -->
                        <div id="yearly" class="tab-pane fade">
                            <div class="row">
                                <!-- Start pricing table-->
                                <div class="col-md-6">
                                    <div class="pricing-card">
                                        <header class="card-header">
                                            <h4>Individual Plan</h4>
                                            <span class="card-header-price">
                                                <span class="simbole">$</span>
                                                <span class="price-num">122</span>
                                                <span class="price-date">/month</span>
                                            </span>
                                            <div class="shape-bottom">
                                                <img src="images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
                                            </div>
                                        </header>
                                        <div class="card-body">
                                            <ul>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    Community support
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    400+ pages
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    100+ header variations
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    20+ home page options
                                                </li>
                                            </ul>
                                            <button type="button" class="btn btn-sm btn-block">Get Started</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End pricing table-->

                                <!-- Start pricing table-->
                                <div class="col-md-6">
                                    <div class="pricing-card top-35">
                                        <header class="card-header">
                                            <h4>Enterprise Plan</h4>
                                            <span class="card-header-price">
                                                <span class="simbole">$</span>
                                                <span class="price-num">299</span>
                                                <span class="price-date">/month</span>
                                            </span>
                                            <div class="shape-bottom">
                                                <img src="images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
                                            </div>
                                        </header>
                                        <div class="card-body">
                                            <ul>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    24/7 support
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    400+ pages
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    200+ header variations
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    40+ home page options
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    E-commerce
                                                </li>
                                                <li>
                                                    <span class="fas fa-check"></span>
                                                    Free Domain
                                                </li>
                                            </ul>
                                            <button type="button" class="btn btn-sm btn-block">Get Started</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End pricing table-->
                            </div>
                        </div>
                        <!-- End Tab content 2 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Section -->

    <!-- Start Reviews Section -->
    <section id="reviews" class="section-block" data-scroll-index="7">
        <div class="shape-top"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-header-style2">
                        <h2>{{$settings->getTranslations('section_reviews_title')[app()->getLocale()]}}</h2>
                        {!$settings->getTranslations('section_reviews_description')[app()->getLocale()]!}
                        <div class="review_nav">
                            <span class="ti-angle-left button_prev"></span>
                            <span class="ti-angle-right button_next"></span>
                        </div>

                        <div class="btn-read-more"><a class="btn theme-btn" href="reviews.html">View all reviews</a></div>
                    </div>
                </div>
                <div class="col-md-7">
                    <!-- Start review items message-->
                    <div class="review-details-content">
                        <div class="owl-carousel review_details" id="review_details-1">
                            <!-- Start review item -->
                            <div class="item">
                                <p>"Thank you for guiding us through the construction process understanding and process, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!"</p>
                                <h5>Sarah Carlos</h5>
                                <h6>Creative Director</h6>
                            </div>
                            <!-- End review item -->

                            <!-- Start review item -->
                            <div class="item">
                                <p>"Thank you for guiding us through the construction process understanding and process, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!"</p>
                                <h5>Sarah Carlos</h5>
                                <h6>Creative Director</h6>
                            </div>
                            <!-- End review item -->

                            <!-- Start review item -->
                            <div class="item">
                                <p>"Thank you for guiding us through the construction process understanding and process, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!"</p>
                                <h5>Sarah Carlos</h5>
                                <h6>Creative Director</h6>
                            </div>
                            <!-- End review item -->

                            <!-- Start review item -->
                            <div class="item">
                                <p>"Thank you for guiding us through the construction process understanding and process, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!"</p>
                                <h5>Sarah Carlos</h5>
                                <h6>Creative Director</h6>
                            </div>
                            <!-- End review item -->

                            <!-- Start review item -->
                            <div class="item">
                                <p>"Thank you for guiding us through the construction process understanding and process, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!"</p>
                                <h5>Sarah Carlos</h5>
                                <h6>Creative Director</h6>
                            </div>
                            <!-- End review item -->
                        </div>
                    </div>
                    <!-- End review items message -->

                    <!-- Start review items Avatar -->
                    <div class="review-photo-list">
                        <div class="owl-carousel review_photo" id="review_photo-1">
                            <!-- Start review item Avatar -->
                            <div class="item">
                                <div class="review_photo_block">
                                    <img src="images/reviews/author-1.jpg" alt="Img">
                                </div>
                            </div>
                            <!-- End review item Avatar -->

                            <!-- Start review item Avatar -->
                            <div class="item">
                                <div class="review_photo_block">
                                    <img src="images/reviews/author-2.jpg" alt="Img">
                                </div>
                            </div>
                            <!-- End review item Avatar -->

                            <!-- Start review item Avatar -->
                            <div class="item">
                                <div class="review_photo_block">
                                    <img src="images/reviews/author-3.jpg" alt="Img">
                                </div>
                            </div>
                            <!-- End review item Avatar -->

                            <!-- Start review item Avatar -->
                            <div class="item">
                                <div class="review_photo_block">
                                    <img src="images/reviews/author-4.jpg" alt="Img">
                                </div>
                            </div>
                            <!-- End review item Avatar -->

                            <!-- Start review item Avatar -->
                            <div class="item">
                                <div class="review_photo_block">
                                    <img src="images/reviews/author-1.jpg" alt="Img">
                                </div>
                            </div>
                            <!-- End review item Avatar -->

                            <!-- Start review item Avatar -->
                            <div class="item">
                                <div class="review_photo_block">
                                    <img src="images/reviews/author-3.jpg" alt="Img">
                                </div>
                            </div>
                            <!-- End review item Avatar -->
                        </div>
                    </div>
                    <!-- End review items Avatar -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="owl-carousel list-clients">
                <div class="clients-item">
                    <a href="#" title="">
                        <img src="images/clients/1.png" alt="Img" />
                    </a>
                </div>
                <div class="clients-item">
                    <a href="#" title="">
                        <img src="images/clients/2.png" alt="Img" />
                    </a>
                </div>
                <div class="clients-item">
                    <a href="#" title="">
                        <img src="images/clients/3.png" alt="Img" />
                    </a>
                </div>
                <div class="clients-item">
                    <a href="#" title="">
                        <img src="images/clients/4.png" alt="Img" />
                    </a>
                </div>
                <div class="clients-item">
                    <a href="#" title="">
                        <img src="images/clients/5.png" alt="Img" />
                    </a>
                </div>
                <div class="clients-item">
                    <a href="#" title="">
                        <img src="images/clients/6.png" alt="Img" />
                    </a>
                </div>
            </div>
        </div>
        <div class="review-shape-bottom"></div>
        <div class="shape-bottom"></div>
    </section>
    <!-- End Reviews Section -->

    <!-- Start Faqs Section -->
    <section id="faqs" class="section-block" data-scroll-index="6">
        <div class="container">
            <div class="section-header">
                <h2>Frequently Asked Questions</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan <br>
                    nisi Ut ut felis congue nisl hendrerit commodo.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/faq2.png" class="img-fluid" alt="Img" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        <!-- Start Faq item -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is the best features and services we deiver?
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?
                                </div>
                            </div>
                        </div>
                        <!-- End Faq item -->

                        <!-- Start Faq item -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Why this app important to me?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?
                                </div>
                            </div>
                        </div>
                        <!-- End Faq item -->

                        <!-- Start Faq item -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        how may I take part in and purchase this Software?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?
                                </div>
                            </div>
                        </div>
                        <!-- End Faq item -->

                        <!-- Start Faq item -->
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What are the objectives of this Software?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?
                                </div>
                            </div>
                        </div>
                        <!-- End Faq item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Faqs Section -->

    <!-- Start Blog Section -->
    <section id="blog" class="section-block" data-scroll-index="5">
        <div class="container">
            <div class="section-header">
                <h2>Read our latest news</h2>
                <p>
                    Our duty towards you is to share our experience we're reaching in<br>
                    our work path with you.
                </p>
            </div>
            <div class="owl-carousel blog-slider">
                <!-- Start Blog item -->
                <div class="blog-item">
                    <div class="blog-article style-1">
                        <div class="article-img">
                            <img src="images/blog/img1.jpg" class="img-fluid" alt="Img">
                        </div>
                        <article class="article-content">
                            <h4><a href="single-post.html">Design is not just what it looks like Design is how it works </a></h4>
                            <div class="post-author">
                                <div class="img-block"><img src="images/blog/author-1.jpg" class="img-fluid" alt="Img" /></div>
                                <h5>Anna Morki</h5>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- End Blog item -->

                <!-- Start Blog item -->
                <div class="blog-item">
                    <div class="blog-article style-2">
                        <article class="article-content">
                            <h4><a href="single-post.html">" How to help your team excel at remote collaboration. Here are tips and tools we use on the content team at InVision to keep our remote collaboration game strong. Trust is both a complex and nuanced topic. Its very nature makes it difficult to tackle through direct effort. "</a></h4>
                            <div class="post-author">
                                <div class="img-block"><img src="images/blog/author-2.jpg" class="img-fluid" alt="Img" /></div>
                                <h5>Anna Morki</h5>
                            </div>
                            <a href="single-post.html" class="btn theme-btn">Read More</a>
                        </article>
                    </div>
                </div>
                <!-- End Blog item -->

                <!-- Start Blog item -->
                <div class="blog-item">
                    <div class="blog-article style-1">
                        <div class="article-img">
                            <img src="images/blog/img2.jpg" class="img-fluid" alt="Img">
                        </div>
                        <article class="article-content">
                            <h4><a href="single-post.html">Design is not just what it looks like Design is how it works </a></h4>
                            <div class="post-author">
                                <div class="img-block"><img src="images/blog/author-3.jpg" class="img-fluid" alt="Img" /></div>
                                <h5>Anna Morki</h5>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- End Blog item -->

                <!-- Start Blog item -->
                <div class="blog-item">
                    <div class="blog-article style-2">
                        <article class="article-content">
                            <h4><a href="single-post.html">" How to help your team excel at remote collaboration. Here are tips and tools we use on the content team at InVision to keep our remote collaboration game strong. Trust is both a complex and nuanced topic. Its very nature makes it difficult to tackle through direct effort. "</a></h4>
                            <div class="post-author">
                                <div class="img-block"><img src="images/blog/author-4.jpg" class="img-fluid" alt="Img" /></div>
                                <h5>Anna Morki</h5>
                            </div>
                            <a href="single-post.html" class="btn theme-btn">Read More</a>
                        </article>
                    </div>
                </div>
                <!-- End Blog item -->
            </div>
        </div>
    </section>
    <!-- End Blog Section -->

    <!-- Start Contact Section -->
    <section id="contact" class="section-block" data-scroll-index="8">
        <div class="bubbles-animate">
            <div class="bubble b_one"></div>
            <div class="bubble b_two"></div>
            <div class="bubble b_three"></div>
            <div class="bubble b_four"></div>
            <div class="bubble b_five"></div>
            <div class="bubble b_six"></div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Start Contact Information -->
                <div class="col-md-5">
                    <div class="section-header-style2">
                        <h2>Find Us There</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum.
                        </p>
                    </div>
                    <div class="contact-details">
                        <!-- Start Contact Block -->
                        <div class="contact-block">
                            <h4>Office Location</h4>
                            <div class="contact-block-side">
                                <i class="flaticon-route"></i>
                                <p>
                                    <span>12 Street Name, </span>
                                    <span>Calefornia, United States.</span>
                                </p>
                            </div>
                        </div>
                        <!-- End Contact Block -->

                        <!-- Start Contact Block -->
                        <div class="contact-block">
                            <h4>Office Hours</h4>
                            <div class="contact-block-side">
                                <i class="flaticon-stopwatch-4"></i>
                                <p>
                                    <span>Saturday - Thursday </span>
                                    <span>9:00 AM - 5:00 PM</span>
                                </p>
                            </div>
                        </div>
                        <!-- End Contact Block -->

                        <!-- Start Contact Block -->
                        <div class="contact-block">
                            <h4>Phone</h4>
                            <div class="contact-block-side">
                                <i class="flaticon-smartphone-7"></i>
                                <p>
                                    <span>+123 4567 890</span>
                                    <span>+098 7654 321</span>
                                </p>
                            </div>
                        </div>
                        <!-- End Contact Block -->

                        <!-- Start Contact Block -->
                        <div class="contact-block">
                            <h4>Email</h4>
                            <div class="contact-block-side">
                                <i class="flaticon-paper-plane-1"></i>
                                <p>
                                    <span> info@domain.com</span>
                                    <span>info@domain.com </span>
                                </p>
                            </div>
                        </div>
                        <!-- End Contact Block -->
                    </div>
                </div>
                <!-- End Contact Information -->

                <!-- Start Contact form Area -->
                <div class="col-md-7">
                    <div class="contact-shape">
                        <img src="images/shapes/contact-form.png" class="img-fluid" alt="Img" />
                    </div>
                    <div class="contact-form-block">
                        <div class="section-header-style2">
                            <h2>Let's talk about your idea</h2>
                            <p>
                                Check these testimonials from our satisfied customers!
                            </p>
                        </div>
                        <form class="contact-form">
                            <input type="text" class="form-control" placeholder="You Name" />
                            <input type="email" class="form-control" placeholder="You Email" />
                            <input type="tel" class="form-control" placeholder="You Phone" />
                            <textarea class="form-control" placeholder="Your Message"></textarea>
                            <button class="btn theme-btn">Send Message</button>
                        </form>
                    </div>

                </div>
                <!-- End Contact form Area -->
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Start Footer Area -->
    <footer>
        <div class="shape-top"></div>
        <div class="container">
            <!-- End Footer Top  Area -->
            <div class="top-footer">
                <div class="row">
                    <!-- Start Column 1 -->
                    <div class="col-md-4">
                        <div class="footer-logo">
                            <img src="images/logo.png" class="img-fluid" alt="Img" />
                        </div>
                        <p>
                            Intrinsicly matrix high standards in niches whereas intermandated niche markets. Objectively harness competitive resources.
                        </p>
                        <div class="footer-social-links">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                    <!-- End Column 1 -->

                    <!-- Start Column 2 -->
                    <div class="col-md-2">
                        <h4 class="footer-title">Useful Links</h4>
                        <ul class="footer-links">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="reviews.html">Reviews</a></li>
                            <li><a href="faqs.html">Faqs</a></li>
                            <li><a href="blog-1.html">News</a></li>
                        </ul>
                    </div>
                    <!-- End Column 2 -->

                    <!-- Start Column 3 -->
                    <div class="col-md-2">
                        <h4 class="footer-title">User Account</h4>
                        <ul class="footer-links">
                            <li><a href="signin.html">Sign In</a></li>
                            <li><a href="signup.html">Sign up</a></li>
                            <li><a href="recover-account.html">Reset Password</a></li>
                            <li><a href="recover-account.html">Recover Account</a></li>
                            <li><a href="error-404.html">404 Not Found</a></li>
                            <li><a href="coming-soon.html">Coming soon</a></li>
                        </ul>
                    </div>
                    <!-- End Column 3 -->

                    <!-- Start Column 4 -->
                    <div class="col-md-4">
                        <h4 class="footer-title">Newsletter</h4>
                        <p>
                            Subscribe our newsletter to get our update. We don't send span email to you.
                        </p>
                        <form class="newsletter-form">
                            <input type="email" placeholder="Enter Your Email" />
                            <button class="btn theme-btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Column 4 -->
                </div>
            </div>
            <!-- End Footer Top  Area -->

            <!-- Start Copyrights Area -->
            <div class="copyrights">
                <p>Copyrights © 2020. Designed by <i class="flaticon-like-2"></i> <a href="https://elmanawy.info">Marwa El-Manawy</a>.</p>
            </div>
            <!-- End Copyrights Area -->
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Start To Top Button -->
    <div id="back-to-top">
        <a class="top" id="top" href="#header-area"> <i class="ti-angle-up"></i> </a>
    </div>
    <!-- End To Top Button -->

    <!-- Start JS FILES -->
    <!-- JQuery -->
    <script src="{{asset('website/js/jquery.min.js')}}"></script>
    <script src="{{asset('website/js/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('website/js/bootstrap.min.js')}}"></script>
    <!-- Wow Animation -->
    <script src="{{asset('website/js/wow.min.js')}}"></script>
    <!-- Owl Coursel -->
    <script src="{{asset('website/js/owl.carousel.min.js')}}"></script>
    <!-- Images LightCase -->
    <script src="{{asset('website/js/lightcase.min.js')}}"></script>
    <!-- scrollIt -->
    <script src="{{asset('website/js/scrollIt.min.js')}}"></script>
    <!-- Main Script -->
    <script src="{{asset('website/js/script.js')}}"></script>
</body>

</html>