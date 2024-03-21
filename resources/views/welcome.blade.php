<!DOCTYPE html>
<html dir=@if(getLanguage() !='ar' ) 'ltr' @else 'rtl' @endif lang="{{getLanguage()}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ERP TEC</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{__('lang_v1.meta_description')}}">
    <meta name="ERP TEC" content="ERP TEC - https://dev.erptec.net" />
    <meta name="ERP TEC" content="ERP TEC - https://dev.erptec.net" />
    <link rel="icon" href="{{asset('favicon.png')}}" type="image/gif" sizes="32x32">
    <meta name="keywords" content="ERP TEC" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    @if(getLanguage() == 'ar')
    <link rel="stylesheet" href="{{asset('website/rtl/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/rtl/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('website/rtl/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('website/rtl/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/rtl/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/rtl/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/rtl/css/lightcase.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('website/rtl/css/style.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('website/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/lightcase.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
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
    @include('website::includes.header')
    <!-- End Header Area-->

    <!-- Start Home Area -->
    @if(!empty($template) && $template->number == 1)
    @include('website::includes.slider_template1')
    @endif
    @if(!empty($template) && $template->number == 2)
    @include('website::includes.slider_template2')
    @endif
    <!-- End Home Area -->

    <!-- Start Features Section -->
    @if(!empty($template) && $template->number == 1)
    @include('website::includes.feature_template1')
    @endif
    @if(! empty($template) && $template->number == 2)
    @include('website::includes.feature_template2')
    @endif
    <!-- End Features Section -->

    <!-- Start How it works Section -->
    @if(! empty($template) && $template->number == 1)
    @include('website::includes.how_works.template1')
    @endif
    <!-- End How it works Section -->

    <!-- Start App Screenshots Section -->
    @if(! empty($template) && $template->number == 1)
    @include('website::includes.screenshots.template1')
    @endif
    <!-- End App Screenshots Section -->

    <!-- Start Pricing Section -->
    @if(! empty($template) && $template->number == 1)
    @include('website::includes.pricing.template1')
    @endif
    <!-- End Pricing Section -->

    <!-- Start Reviews Section -->
    @include('website::includes.reviews.template1')
    <!-- End Reviews Section -->

    <!-- Start Faqs Section -->
    @include('website::includes.fqs.template1')
    <!-- End Faqs Section -->

    <!-- Start Blog Section -->

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
                        <img src="{{asset('front/images/shapes/contact-form.png')}}" class="img-fluid" alt="Img" />
                    </div>
                    <div class="contact-form-block">
                        <div class="section-header-style2">
                            <h2>Let's talk about your idea</h2>
                            <p>
                                Check these testimonials from our satisfied customers!
                            </p>
                        </div>
                        <form class="contact-form" id="form-send-message" method="post" action="{{route('website-send-message')}}">
                            @csrf
                            <input type="text" class="form-control" name="name" placeholder="You Name" />
                            <input type="email" class="form-control" name="email" placeholder="You Email" />
                            <input type="tel" class="form-control" name="phone" placeholder="You Phone" />
                            <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
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
    @include('website::includes.footer')
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