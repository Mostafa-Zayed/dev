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
    @if(getLanguage() == 'ar')
    <!-- Font Icons -->
    <link rel="stylesheet" href="{{asset('website/rtl/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/rtl/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('website/rtl/css/flaticon.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('website/rtl/css/bootstrap.min.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('website/rtl/css/animate.min.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('website/rtl/css/owl.carousel.min.css')}}">
    <!-- Light Case -->
    <link rel="stylesheet" href="{{asset('website/rtl/css/lightcase.min.css')}}" type="text/css">
    <!-- Template style -->
    <link rel="stylesheet" href="{{asset('website/rtl/css/style.css')}}">
    @else
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
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('css/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/rtl/toastr.min.css')}}">
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

    <!-- //End Header Area-->

    <div class="page-header">
        <div class="container">
            <div class="title-box">
                <h1 class="title">@lang('lang_v1.about_us')</h1>
                <div class="breadcrumb">
                    <span>
                        <a title="Homepage" href="{{url('/')}}"><i class="ti ti-home"></i>&nbsp;&nbsp; @lang('lang_v1.home')</a>
                    </span>
                    <span class="bread-sep">&nbsp; | &nbsp;</span>
                    <span> @lang('lang_v1.about_us')</span>
                </div>
            </div>
        </div>
        <div class="shape-bottom">
            <img src="{{asset('front/images/shapes/price-shape.svg')}}" alt="shape" class="bottom-shape img-fluid">
        </div>
    </div>

    <!-- <section id="how-it-work" class="section-block">
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
                        <img src="{{asset('front/images/how-work.png')}}" alt="IMG" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="description-block">
                        <div class="inner-box">
                            <div class="step_num"><img src="{{asset('front/images/step1.png')}}" /></div>
                            <h3>Register / Login to our Platform</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident.</p>
                        </div>
                    </div>
                    <div class="description-block">
                        <div class="inner-box">
                            <div class="step_num"><img src="{{asset('front/images/step2.png')}}" /></div>
                            <h3>Enter Your Information Details</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident.</p>
                        </div>
                    </div>
                    <div class="description-block">
                        <div class="inner-box">
                            <div class="step_num"><img src="{{asset('front/images/step3.png')}}" /></div>
                            <h3>Follow Your Software Usage Steps</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
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
                        <div class="btn-read-more"><a class="btn theme-btn" href="{{route('business.getRegister')}}">Get Started Now</a></div>
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
    <script src="{{asset('website/js/script.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            // subscripe
            $('#subscribe_form').submit(function(event) {
                event.preventDefault();
                let email = $('#user_email').val();
                $.ajax({
                    url: "{{route('subscribe')}}",
                    method: 'POST',
                    data: {
                        email: email
                    },
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(result) {
                        toastr.success(result.msg);
                        $('#user_email').val(null);
                    }
                });
            });

            // send message
            $('#form-send-message').submit(function(event) {
                event.preventDefault();
                $.ajax({
                    url: "{{route('website-send-message')}}",
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    data: new FormData(this),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(result) {
                        toastr.success(result.msg);
                        $('#form-send-message')[0].reset();
                    }
                });
            });
        });
    </script>
</body>

</html>