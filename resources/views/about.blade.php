<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{__('lang_v1.meta_description')}}">
    <meta name="ERP TEC" content="ERP TEC - https://dev.erptec.net" />
    <meta name="ERP TEC" content="ERP TEC - https://dev.erptec.net" />
    <link rel="icon" href="{{asset('favicon.png')}}" type="image/gif" sizes="32x32">
    <meta name="keywords" content="ERP TEC" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- Font Icons -->
    <link rel="stylesheet" href="{{asset('front/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <!-- Light Case -->
    <link rel="stylesheet" href="{{asset('front/css/lightcase.min.css')}}" type="text/css">
    <!-- Template style -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
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
                <div class="site-logo">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('front/images/erp_logo.png')}}" class="img-fluid" alt="Img" /> ERP TEC</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{url('/')}}">{{__('lang_v1.home')}}</a></li>
                        <li class="nav-item"><a href="{{route('features')}}">{{__('lang_v1.features')}}</a></li>
                        <li class="nav-item"><a href="{{route('how-work')}}">{{__('lang_v1.how_work')}}</a></li>
                        <li class="nav-item"><a href="{{route('screenshots')}}">{{__('lang_v1.screenshots')}}</a></li>
                        <li class="nav-item"><a href="{{route('pricing')}}">{{__('lang_v1.pricing')}}</a></li>
                        <li class="nav-item"><a href="{{route('reviews')}}">{{__('lang_v1.reviews')}}</a></li>
                        <li class="nav-item"><a href="{{route('faqs')}}">{{__('lang_v1.faqs')}}</a></li>
                        <li class="nav-item"><a href="{{route('contact')}}">{{__('lang_v1.contact')}}</a></li>
                        <li class="nav-itme"><a href="{{route('login')}}">{{__('lang_v1.login')}}</a></li>
                        <li class="nav-itme"><a href="{{route('business.getRegister')}}">{{__('business.register')}}</a></li>
                        @if(getLanguage() == 'en')
                        <li class="nav-item"><a href="{{url('/')}}?lang=ar">ar</a></li>
                        @else
                        <li class="nav-item"><a href="{{url('/')}}?lang=en">en</a></li>
                        @endif
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- //End Header Area-->

    <div class="page-header">
        <div class="container">
            <div class="title-box">
                <h1 class="title">About Us </h1>
                <div class="breadcrumb">
                    <span>
                        <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                    </span>
                    <span class="bread-sep">&nbsp; | &nbsp;</span>
                    <span> About Us</span>
                </div>
            </div>
        </div>
        <div class="shape-bottom">
            <img src="images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
        </div>
    </div>

    <section id="how-it-work" class="section-block">
        <div class="container">
            <div class="section-header">
                <h2>How it work</h2>
                <p>
                    Efficiently syndicate flexible content via cost effective initiatives completely leverage vertical quality.<br>
                    Turn your mobile visitors into your best customers.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/how-work.png" alt="IMG" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="description-block">
                        <div class="inner-box">
                            <div class="step_num"><img src="images/step1.png" /></div>
                            <h3>Register / Login to our Platform</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident.</p>
                        </div>
                    </div>
                    <div class="description-block">
                        <div class="inner-box">
                            <div class="step_num"><img src="images/step2.png" /></div>
                            <h3>Enter Your Information Details</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident.</p>
                        </div>
                    </div>
                    <div class="description-block">
                        <div class="inner-box">
                            <div class="step_num"><img src="images/step3.png" /></div>
                            <h3>Follow Your Software Usage Steps</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Start Features Section -->
    <section id="AppFeatures" class="section-block features-style3">
        <div class="bubbles-animate">
            <div class="bubble b_one"></div>
            <div class="bubble b_two"></div>
            <div class="bubble b_three"></div>
            <div class="bubble b_four"></div>
            <div class="bubble b_five"></div>
            <div class="bubble b_six"></div>
        </div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="section-header-style2">
                        <h2>Revolutionize Your Online App Business Today!</h2>
                        <p>
                            Efficiently syndicate flexible content via cost effective initiatives completely leverage vertical quality.<br>
                            Turn your mobile visitors into your best customers.
                        </p>
                        <div class="btn-read-more"><a class="btn theme-btn" href="#">Get Started Now</a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <!-- Start Features item -->
                        <div class="col-md-6">
                            <div class="feature-block">
                                <span class="feature-icon">
                                    <i class="flaticon flaticon-idea"></i>
                                </span>
                                <h3>Trendy Look</h3>
                                <p>We provide marketing to businesses to looking for a partner digital media.</p>
                            </div>
                        </div>
                        <!-- End Features item -->

                        <!-- Start Features item -->
                        <div class="col-md-6">
                            <div class="feature-block offset-top">
                                <span class="feature-icon">
                                    <i class="flaticon flaticon-layers"></i>
                                </span>
                                <h3>Very Secured</h3>
                                <p>We provide marketing to businesses to looking for a partner digital media.</p>
                            </div>
                        </div>
                        <!-- End Features item -->

                        <!-- Start Features item -->
                        <div class="col-md-6">
                            <div class="feature-block">
                                <span class="feature-icon">
                                    <i class="flaticon flaticon-fingerprint"></i>
                                </span>
                                <h3>Digital Marketing</h3>
                                <p>We provide marketing to businesses to looking for a partner digital media.</p>
                            </div>
                        </div>
                        <!-- End Features item -->

                        <!-- Start Features item -->
                        <div class="col-md-6">
                            <div class="feature-block offset-top">
                                <span class="feature-icon">
                                    <i class="flaticon flaticon-app"></i>
                                </span>
                                <h3>Report Analysis</h3>
                                <p>We provide marketing to businesses to looking for a partner digital media.</p>
                            </div>
                        </div>
                        <!-- End Features item -->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Features Section -->

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
                        <img src="images/faq2.png" class="img-fluid" alt="IMG" />
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

    <!-- Start Footer Area -->
    @include('website::includes.footer')
    <!-- End Footer Area -->

    <!-- Start To Top Button -->
    <div id="back-to-top">
        <a class="top" id="top" href="#header-area"> <i class="ti-angle-up"></i> </a>
    </div>
    <!-- End To Top Button -->

    <!-- Start JS FILES -->
    <!-- JQuery -->
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <!-- Wow Animation -->
    <script src="{{asset('front/js/wow.min.js')}}"></script>
    <!-- Owl Coursel -->
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <!-- Images LightCase -->
    <script src="{{asset('front/js/lightcase.min.js')}}"></script>
    <!-- scrollIt -->
    <script src="{{asset('front/js/scrollIt.min.js')}}"></script>
    <!-- Main Script -->
    <script src="{{asset('front/js/script.js')}}"></script>
</body>

</html>