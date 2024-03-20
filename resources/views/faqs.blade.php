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
        <header class="header-area" id="header-area">
            <nav class="navbar navbar-expand-md fixed-top">
                <div class="container">
                    <div class="site-logo"><a class="navbar-brand" href="index.html"><img src="images/logo.png" class="img-fluid" alt="IMG" /></a></div>
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
                                    <a class="dropdown-item" href="signin.html">Login</a>
                                    <a class="dropdown-item" href="signup.html">Signup</a>
                                    <a class="dropdown-item" href="recover-account.html">Forget Password</a>
                                    <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                    <a class="dropdown-item" href="error-404.html">Page 404</a>
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
                            <li class="nav-item"><a href="about-us.html">Features</a></li>
                            <li class="nav-item"><a href="about-us.html">How it work</a></li>
                            <li class="nav-item"><a href="about-us.html">Screenshots</a></li>
                            <li class="nav-item"><a href="about-us.html">Pricing</a></li>
                            <li class="nav-item"><a href="reviews.html">Reviews</a></li>
                            <li class="nav-item"><a href="faqs.html">Faqs</a></li>
                            <li class="nav-item"><a href="contact-us.html">Contact</a></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </header>
        <!-- //End Header Area-->

        <div class="page-header">
            <div class="container">
                <div class="title-box">
                    <h1 class="title">Frequently Asked Questions </h1>
                    <div class="breadcrumb">
                        <span>
                            <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="bread-sep">&nbsp; | &nbsp;</span>
                        <span> Faqs</span>
                    </div>  
                </div>
            </div>   
            <div class="shape-bottom">
                <img src="images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
            </div>
        </div>

        <section class="section-block faqs-categories">
            <div class="container">
                <div class="section-header">
                    <h2>How can we help!</h2>
                    <form class="faq-search">
                        <input type="search" class="form-control" placeholder="Ask a question" />
                        <button class="btn" type="submit"><i class="ti-search"></i></button>
                    </form>
                    <p>Popular help topics: <a href="#">pricing</a>, <a href="#">upgrade</a>, <a href="#">hosting</a>, <a href="#">membership</a></p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a class="feq-icon-box" href="#">
                            <div class="faq-icon">
                                <i class="flaticon flaticon-idea"></i>
                            </div>
                            <div class="featured-content">
                                <h5>Discuss Idea</h5>
                                <p>Lorem Ipsum is simply dummy text  ever since of the printing and typesetting industry.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a class="feq-icon-box" href="#">
                            <div class="faq-icon">
                                <i class="flaticon flaticon-fingerprint"></i>
                            </div>
                            <div class="featured-content">
                                <h5>Account Security</h5>
                                <p>Lorem Ipsum is simply dummy text  ever since of the printing and typesetting industry.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a class="feq-icon-box" href="#">
                            <div class="faq-icon">
                                <i class="flaticon flaticon-help"></i>
                            </div>
                            <div class="featured-content">
                                <h5>Help Center</h5>
                                <p>Lorem Ipsum is simply dummy text  ever since of the printing and typesetting industry.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a class="feq-icon-box" href="#">
                            <div class="faq-icon">
                                <i class="flaticon flaticon-layers"></i>
                            </div>
                            <div class="featured-content">
                                <h5>Help Center</h5>
                                <p>Lorem Ipsum is simply dummy text  ever since of the printing and typesetting industry.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a class="feq-icon-box" href="#">
                            <div class="faq-icon">
                                <i class="flaticon flaticon-briefcase"></i>
                            </div>
                            <div class="featured-content">
                                <h5>Help Center</h5>
                                <p>Lorem Ipsum is simply dummy text  ever since of the printing and typesetting industry.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a class="feq-icon-box" href="#">
                            <div class="faq-icon">
                                <i class="flaticon flaticon-app"></i>
                            </div>
                            <div class="featured-content">
                                <h5>Help Center</h5>
                                <p>Lorem Ipsum is simply dummy text  ever since of the printing and typesetting industry.</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <section id="faqs" class="section-block" data-scroll-index="6">
            <div class="container">
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
        <section class="section-block help-option">
            <div class="shape-top"></div>
            <div class="container">
                <div class="section-header">
                    <h2>Still no luck? We can help!</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan <br>
                        nisi Ut ut felis congue nisl hendrerit commodo.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="block-body">
                            <span class="icon-block"><img src="images/faq-icon-1.png" class="img-fluid" alt="IMG"/></span>
                            <h4>Can't find your answer?</h4>
                            <p>We want to answer all of your queries. Get in touch and we'll get back to you as soon as we can.</p>
                            <a href="#" class="btn theme-btn">Email us</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="block-body">
                            <span class="icon-block"><img src="images/faq-icon-2.png" class="img-fluid" alt="IMG"/></span>
                            <h4>Technical questions</h4>
                            <p>Have some technical questions? Hit us on community page or just say hello or contact our support .</p>
                            <a href="#" class="btn theme-btn">Contact Us</a>
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
                    <p>Copyrights © 2020. Designed by  <i class="flaticon-like-2"></i> <a href="https://elmanawy.info">Marwa El-Manawy</a>.</p>
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
        <!-- Main Script -->
        <script src="{{asset('front/js/script.js')}}"></script>
    </body>
</html>