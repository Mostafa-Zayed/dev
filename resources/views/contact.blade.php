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
                <h1 class="title">Contact Us </h1>
                <div class="breadcrumb">
                    <span>
                        <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                    </span>
                    <span class="bread-sep">&nbsp; | &nbsp;</span>
                    <span> Contact Us</span>
                </div>
            </div>
        </div>
        <div class="shape-bottom">
            <img src="images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
        </div>
    </div>

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
                <div class="col-md-5">
                    <div class="section-header-style2">
                        <h2>Find Us There</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum.
                        </p>
                    </div>
                    <div class="contact-details">
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

                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-shape">
                        <img src="images/shapes/contact-form.png" class="img-fluid" alt="IMG" />
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
            </div>
        </div>
    </section>

    <section class="contact-map">
        <div class="container">
            <div id="google-map"></div>
        </div>

    </section>

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
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <!-- Map -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBkdsK7PWcojsO-o_q2tmFOLBfPGL8k8Vg&amp;language=en"></script>
    <!-- Main Script -->
    <script src="{{asset('front/js/script.js')}}"></script>
</body>

</html>