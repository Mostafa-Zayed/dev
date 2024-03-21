<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ERP TEC</title>
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
@include('website::includes.header')
    <!-- //End Header Area-->

    <div class="page-header">
        <div class="container">
            <div class="title-box">
                <h1 class="title">News & Articles</h1>
                <div class="breadcrumb">
                    <span>
                        <a title="Homepage" href="index.html"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                    </span>
                    <span class="bread-sep">&nbsp; | &nbsp;</span>
                    <span> Blog</span>
                </div>
            </div>
        </div>
        <div class="shape-bottom">
            <img src="{{asset('front/images/shapes/price-shape.svg')}}" alt="shape" class="bottom-shape img-fluid">
        </div>
    </div>

    <section class="section-block blog-page">
        <div class="container">
            <div class="section-header">
                <h2>Search Ariel Blog!</h2>
                <form class="faq-search">
                    <input type="search" class="form-control" placeholder="Search for article" />
                    <button class="btn" type="submit"><i class="ti-search"></i></button>
                </form>
                <p>Popular help topics: <a href="#">pricing</a>, <a href="#">upgrade</a>, <a href="#">hosting</a>, <a href="#">membership</a></p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-article style-1">
                            <div class="article-img">
                                <img src="{{asset('front/images/blog/img1.jpg')}}" class="img-fluid" alt="IMG">
                            </div>
                            <article class="article-content">
                                <h4><a href="single-post.html">Design is not just what it looks like Design is how it works </a></h4>
                                <div class="post-author">
                                    <div class="img-block"><img src="{{asset('front/images/blog/author-1.jpg')}}" class="img-fluid" alt="IMG" /></div>
                                    <h5>Anna Morki</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-article style-2">
                            <article class="article-content">
                                <h4><a href="single-post.html">" How to help your team excel at remote collaboration. Here are tips and tools we use on the content team at InVision to keep our remote collaboration game strong. Trust is both a complex and nuanced topic. Its very nature makes it difficult to tackle through direct effort. "</a></h4>
                                <div class="post-author">
                                    <div class="img-block"><img src="{{asset('front/images/blog/author-2.jpg')}}" class="img-fluid" alt="IMG" /></div>
                                    <h5>Anna Morki</h5>
                                </div>
                                <a href="single-post.html" class="btn theme-btn">Read More</a>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-article style-1">
                            <div class="article-img">
                                <img src="{{asset('front/images/blog/img2.jpg')}}" class="img-fluid" alt="IMG">
                            </div>
                            <article class="article-content">
                                <h4><a href="single-post.html">Design is not just what it looks like Design is how it works </a></h4>
                                <div class="post-author">
                                    <div class="img-block"><img src="{{asset('front/images/blog/author-3.jpg')}}" class="img-fluid" alt="IMG" /></div>
                                    <h5>Anna Morki</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-article style-3">
                            <div class="article-img">
                                <img src="{{asset('front/images/blog/img3.jpg')}}" class="img-fluid" alt="IMG">
                            </div>
                            <article class="article-content">
                                <h4><a href="single-post.html">Design is not just what it looks like Design </a></h4>
                                <p>
                                    How to help your team excel at remote collaboration. Here are tips and tools we use on the content team at InVision to keep our remote collaboration game strong. Trust is both a complex and nuanced topic. Its very nature makes it difficult.
                                </p>
                                <div class="post-author">
                                    <div class="img-block"><img src="{{asset('front/images/blog/author-4.jpg')}}" class="img-fluid" alt="IMG" /></div>
                                    <h5>Anna Morki</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-article style-3">
                            <div class="article-img">
                                <img src="{{asset('front/images/blog/img4.jpg')}}" class="img-fluid" alt="IMG">
                            </div>
                            <article class="article-content">
                                <h4><a href="single-post.html">Design is not just what it looks like Design </a></h4>
                                <p>
                                    How to help your team excel at remote collaboration. Here are tips and tools we use on the content team at InVision to keep our remote collaboration game strong. Trust is both a complex and nuanced topic. Its very nature makes it difficult.
                                </p>
                                <div class="post-author">
                                    <div class="img-block"><img src="{{asset('front/images/blog/author-3.jpg')}}" class="img-fluid" alt="IMG" /></div>
                                    <h5>Anna Morki</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-article style-1">
                            <div class="article-img">
                                <img src="{{asset('front/images/blog/img0.jpg')}}" class="img-fluid" alt="IMG">
                            </div>
                            <article class="article-content">
                                <h4><a href="single-post.html">Design is not just what it looks like Design is how it works </a></h4>
                                <div class="post-author">
                                    <div class="img-block"><img src="{{asset('front/images/blog/author-2.jpg')}}" class="img-fluid" alt="IMG" /></div>
                                    <h5>Anna Morki</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-article style-2">
                            <article class="article-content">
                                <h4><a href="single-post.html">" How to help your team excel at remote collaboration. Here are tips and tools we use on the content team at InVision to keep our remote collaboration game strong. Trust is both a complex and nuanced topic. Its very nature makes it difficult to tackle through direct effort. "</a></h4>
                                <div class="post-author">
                                    <div class="img-block"><img src="{{asset('front/images/blog/author-1.jpg')}}" class="img-fluid" alt="IMG" /></div>
                                    <h5>Anna Morki</h5>
                                </div>
                                <a href="single-post.html" class="btn theme-btn">Read More</a>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-article style-1">
                            <div class="article-img">
                                <img src="{{asset('front/images/blog/img00.jpg')}}" class="img-fluid" alt="IMG">
                            </div>
                            <article class="article-content">
                                <h4><a href="single-post.html">Design is not just what it looks like Design is how it works </a></h4>
                                <div class="post-author">
                                    <div class="img-block"><img src="{{asset('front/images/blog/author-4.jpg')}}" class="img-fluid" alt="IMG" /></div>
                                    <h5>Anna Morki</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-article style-3">
                            <div class="article-img">
                                <img src="{{asset('front/images/blog/img3.jpg')}}" class="img-fluid" alt="IMG">
                            </div>
                            <article class="article-content">
                                <h4><a href="single-post.html">Design is not just what it looks like Design </a></h4>
                                <p>
                                    How to help your team excel at remote collaboration. Here are tips and tools we use on the content team at InVision to keep our remote collaboration game strong. Trust is both a complex and nuanced topic. Its very nature makes it difficult.
                                </p>
                                <div class="post-author">
                                    <div class="img-block"><img src="{{asset('front/images/blog/author-4.jpg')}}" class="img-fluid" alt="IMG" /></div>
                                    <h5>Anna Morki</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-article style-3">
                            <div class="article-img">
                                <img src="{{asset('front/images/blog/img4.jpg')}}" class="img-fluid" alt="IMG">
                            </div>
                            <article class="article-content">
                                <h4><a href="single-post.html">Design is not just what it looks like Design </a></h4>
                                <p>
                                    How to help your team excel at remote collaboration. Here are tips and tools we use on the content team at InVision to keep our remote collaboration game strong. Trust is both a complex and nuanced topic. Its very nature makes it difficult.
                                </p>
                                <div class="post-author">
                                    <div class="img-block"><img src="{{asset('front/images/blog/author-3.jpg')}}" class="img-fluid" alt="IMG" /></div>
                                    <h5>Anna Morki</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-article style-1">
                            <div class="article-img">
                                <img src="{{asset('front/images/blog/img1.jpg')}}" class="img-fluid" alt="IMG">
                            </div>
                            <article class="article-content">
                                <h4><a href="single-post.html">Design is not just what it looks like Design is how it works </a></h4>
                                <div class="post-author">
                                    <div class="img-block"><img src="{{asset('front/images/blog/author-2.jpg')}}" class="img-fluid" alt="IMG" /></div>
                                    <h5>Anna Morki</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-article style-2">
                            <article class="article-content">
                                <h4><a href="single-post.html">" How to help your team excel at remote collaboration. Here are tips and tools we use on the content team at InVision to keep our remote collaboration game strong. Trust is both a complex and nuanced topic. Its very nature makes it difficult to tackle through direct effort. "</a></h4>
                                <div class="post-author">
                                    <div class="img-block"><img src="{{asset('front/images/blog/author-2.jpg')}}" class="img-fluid" alt="IMG" /></div>
                                    <h5>Anna Morki</h5>
                                </div>
                                <a href="single-post.html" class="btn theme-btn">Read More</a>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-article style-1">
                            <div class="article-img">
                                <img src="{{asset('front/images/blog/img0.jpg')}}" class="img-fluid" alt="IMG">
                            </div>
                            <article class="article-content">
                                <h4><a href="single-post.html">Design is not just what it looks like Design is how it works </a></h4>
                                <div class="post-author">
                                    <div class="img-block"><img src="{{asset('front/images/blog/author-3.jpg')}}" class="img-fluid" alt="IMG" /></div>
                                    <h5>Anna Morki</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pagination-section">
        <div class="container">
            <nav aria-label="Page navigation">
                <ul class="pagination mb-0">
                    <li class="page-item mr-auto">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="d-none d-sm-inline-block ml-1">Prev</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item ml-auto">
                        <a class="page-link" href="#" aria-label="Next">
                            <span class="d-none d-sm-inline-block mr-1">Next</span>
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
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
        });
    </script>
</body>

</html>