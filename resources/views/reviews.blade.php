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
@include('website::includes.header')
    <!-- //End Header Area-->

    <div class="page-header">
        <div class="container">
            <div class="title-box">
                <h1 class="title">Reviews </h1>
                <div class="breadcrumb">
                    <span>
                        <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                    </span>
                    <span class="bread-sep">&nbsp; | &nbsp;</span>
                    <span>
                        <a title="Homepage" href="index.php">&nbsp;&nbsp;Pages</a>
                    </span>
                    <span class="bread-sep">&nbsp; | &nbsp;</span>
                    <span> Reviews</span>
                </div>
            </div>
        </div>
        <div class="shape-bottom">
            <img src="{{asset('front/images/shapes/price-shape.svg')}}" alt="shape" class="bottom-shape img-fluid">
        </div>
    </div>

    <section class="section-block reviews-page">
        <div class="container">
            <div class="section-header">
                <h2>Testimonials And What Our Customer Says!</h2>
                <p>
                    Check these testimonials from our satisfied customers! <br>
                    Don't just believe our words.
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="review-item">
                        <div class="review-head">
                            <div class="review-item-img">
                                <img src="{{asset('front/images/reviews/author-1.jpg')}}" class="img-fluid" alt="IMG" />
                            </div>
                            <div class="review-author">
                                <h5>Maronia Slen</h5>
                                <h6>Developer</h6>
                            </div>
                        </div>
                        <div class="review-content">
                            <p>Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!</p>
                            <div class="rating">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-head">
                            <div class="review-item-img">
                                <img src="{{asset('front/images/reviews/author-1.jpg')}}" class="img-fluid" alt="IMG" />
                            </div>
                            <div class="review-author">
                                <h5>Maronia Slen</h5>
                                <h6>Developer</h6>
                            </div>
                        </div>
                        <div class="review-content">
                            <p>Always ready to accommodate our needs. We love our new space and know that it was built by the very best!</p>
                            <div class="rating">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-head">
                            <div class="review-item-img">
                                <img src="{{asset('front/images/reviews/author-1.jpg')}}" class="img-fluid" alt="IMG" />
                            </div>
                            <div class="review-author">
                                <h5>Maronia Slen</h5>
                                <h6>Developer</h6>
                            </div>
                        </div>
                        <div class="review-content">
                            <p> We love our new space and know that it was built by the very best!</p>
                            <div class="rating">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star empty"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-head">
                            <div class="review-item-img">
                                <img src="{{asset('front/images/reviews/author-1.jpg')}}" class="img-fluid" alt="IMG" />
                            </div>
                            <div class="review-author">
                                <h5>Maronia Slen</h5>
                                <h6>Developer</h6>
                            </div>
                        </div>
                        <div class="review-content">
                            <p>Understanding, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!</p>
                            <div class="rating">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star empty"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-item">
                        <div class="review-head">
                            <div class="review-item-img">
                                <img src="{{asset('front/images/reviews/author-1.jpg')}}" class="img-fluid" alt="IMG" />
                            </div>
                            <div class="review-author">
                                <h5>Maronia Slen</h5>
                                <h6>Developer</h6>
                            </div>
                        </div>
                        <div class="review-content">
                            <p>Ready to accommodate our needs. We love our new space and know that it was built by the very best!</p>
                            <div class="rating">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star empty"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-head">
                            <div class="review-item-img">
                                <img src="{{asset('front/images/reviews/author-1.jpg')}}" class="img-fluid" alt="IMG" />
                            </div>
                            <div class="review-author">
                                <h5>Maronia Slen</h5>
                                <h6>Developer</h6>
                            </div>
                        </div>
                        <div class="review-content">
                            <p>Thank you for guiding us through the construction process We love our new space and know that it was built by the very best!</p>
                            <div class="rating">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-head">
                            <div class="review-item-img">
                                <img src="{{asset('front/images/reviews/author-1.jpg')}}" class="img-fluid" alt="IMG" />
                            </div>
                            <div class="review-author">
                                <h5>Maronia Slen</h5>
                                <h6>Developer</h6>
                            </div>
                        </div>
                        <div class="review-content">
                            <p>Ready to accommodate our needs. We love our new space and know that it was built by the very best!</p>
                            <div class="rating">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star empty"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-head">
                            <div class="review-item-img">
                                <img src="{{asset('front/images/reviews/author-1.jpg')}}" class="img-fluid" alt="IMG" />
                            </div>
                            <div class="review-author">
                                <h5>Maronia Slen</h5>
                                <h6>Developer</h6>
                            </div>
                        </div>
                        <div class="review-content">
                            <p>Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!</p>
                            <div class="rating">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star empty"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-item">
                        <div class="review-head">
                            <div class="review-item-img">
                                <img src="{{asset('front/images/reviews/author-1.jpg')}}" class="img-fluid" alt="IMG" />
                            </div>
                            <div class="review-author">
                                <h5>Maronia Slen</h5>
                                <h6>Developer</h6>
                            </div>
                        </div>
                        <div class="review-content">
                            <p>Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!</p>
                            <div class="rating">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star empty"></i>
                                <i class="ti-star empty"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-head">
                            <div class="review-item-img">
                                <img src="{{asset('front/images/reviews/author-1.jpg')}}" class="img-fluid" alt="IMG" />
                            </div>
                            <div class="review-author">
                                <h5>Maronia Slen</h5>
                                <h6>Developer</h6>
                            </div>
                        </div>
                        <div class="review-content">
                            <p>Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs.</p>
                            <div class="rating">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star empty"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-head">
                            <div class="review-item-img">
                                <img src="{{asset('front/images/reviews/author-1.jpg')}}" class="img-fluid" alt="IMG" />
                            </div>
                            <div class="review-author">
                                <h5>Maronia Slen</h5>
                                <h6>Developer</h6>
                            </div>
                        </div>
                        <div class="review-content">
                            <p>Thank you for guiding us through the construction process, understanding,We love our new space and know that it was built by the very best!</p>
                            <div class="rating">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star empty"></i>
                                <i class="ti-star empty"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-head">
                            <div class="review-item-img">
                                <img src="{{asset('front/images/reviews/author-1.jpg')}}" class="img-fluid" alt="IMG" />
                            </div>
                            <div class="review-author">
                                <h5>Maronia Slen</h5>
                                <h6>Developer</h6>
                            </div>
                        </div>
                        <div class="review-content">
                            <p>We love our new space and know that it was built by the very best!</p>
                            <div class="rating">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

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