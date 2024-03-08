<!DOCTYPE html>
<html lang="{{getLanguage()}}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'POS') }}</title>
    <meta name="description" content="App Landing page, RTL Version, Marwa El-Manawy, Application">
    <meta name="author" content="ERP TEC - https://dev.erptec.net/" />
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
    <style>
        .login-form {
            width: 80% !important;
        }
    </style>
    <link rel="stylesheet" href="{{asset('new_assets/intlTelInput/css/intlTelInput.min.css')}}" />
</head>

<body>
    @inject('request', 'Illuminate\Http\Request')
    @if (session('status') && session('status.success'))
    <input type="hidden" id="status_span" data-status="{{ session('status.success') }}" data-msg="{{ session('status.msg') }}">
    @endif
    <div class="login-page">
        <div class="col-md-4 login-side-des">
            <div class="container-fluid">
                <div class="login-side-block">
                    <div class="row">
                        <div class="col-md-7">
                            <a href="index.html"><img src="{{asset('front/images/logo.png')}}" alt="Logo" /></a>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <select class="form-select form-select-sm mb-3" id="change_lang">
                                    @foreach(config('constants.langs') as $key => $val)
                                    <option value="{{$key}}" @if( (empty(request()->lang) && config('app.locale') == $key)
                                        || request()->lang == $key)
                                        selected
                                        @endif
                                        >
                                        {{$val['full_name']}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="login-reviews">
                        <div class="review-details-content">
                            <div class="owl-carousel review_details" id="review_details-2">
                                <div class="item">
                                    <p>"Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs."</p>
                                    <h5>Sarah Carlos</h5>
                                    <h6>Creative Director</h6>
                                </div>
                                <div class="item">
                                    <p>"Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs."</p>
                                    <h5>Sarah Carlos</h5>
                                    <h6>Creative Director</h6>
                                </div>
                                <div class="item">
                                    <p>"Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs."</p>
                                    <h5>Sarah Carlos</h5>
                                    <h6>Creative Director</h6>
                                </div>
                                <div class="item">
                                    <p>"Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs."</p>
                                    <h5>Sarah Carlos</h5>
                                    <h6>Creative Director</h6>
                                </div>
                                <div class="item">
                                    <p>"Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs."</p>
                                    <h5>Sarah Carlos</h5>
                                    <h6>Creative Director</h6>
                                </div>
                            </div>
                        </div>
                        <div class="review-photo-list">
                            <div class="owl-carousel review_photo" id="review_photo-2">
                                <div class="item">
                                    <div class="review_photo_block">
                                        <img src="{{asset('front/images/blog/author-1.jpg')}}" alt="IMG">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="review_photo_block">
                                        <img src="{{asset('front/images/blog/author-1.jpg')}}" alt="IMG">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="review_photo_block">
                                        <img src="{{asset('front/images/blog/author-1.jpg')}}" alt="IMG">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="review_photo_block">
                                        <img src="{{asset('front/images/blog/author-1.jpg')}}" alt="IMG">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="review_photo_block">
                                        <img src="{{asset('front/images/blog/author-1.jpg')}}" alt="IMG">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="review_photo_block">
                                        <img src="{{asset('front/images/blog/author-1.jpg')}}" alt="IMG">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="login-partners">
                        <h5>Ariel Partners</h5>
                        <div class="partner-list">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset('front/images/partners/google.png')}}" class="img-fluid" alt="partner" />
                                </div>
                                <div class="col-md-4">
                                    <img src="{{asset('front/images/partners/slack.png')}}" class="img-fluid" alt="partner" />
                                </div>
                                <div class="col-md-4">
                                    <img src="{{asset('front/images/partners/spotify.png')}}" class="img-fluid" alt="partner" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="container-fluid">
                <a href="index.html" class="res-logo"><img src="{{asset('front/images/logo-2.png')}}" alt="Logo" /></a>
                <div class="login-form">
                    <div class="login-form-head">
                        <h2>Welcome to {{ config('app.name', 'ERP TEC') }}</h2>
                        <p>Fill out the form to get started..</p>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="businessName">{{__('lang_v1.business_name')}}: *</label>
                                    <div class="input-group">
                                        <div class="input-icon">
                                            <span class="ti-user"></span>
                                        </div>
                                        <input type="text" class="form-control" name="name" id="businessName" placeholder="{{__('lang_v1.business_name')}}" aria-label="Email address" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fullName">{{__('lang_v1.full_name')}}: *</label>
                                    <div class="input-group">
                                        <div class="input-icon">
                                            <span class="ti-face-smile"></span>
                                        </div>
                                        <input type="text" class="form-control" name="first_name" id="fullName" placeholder="{{__('lang_v1.full_name')}}" aria-label="Full Name" required="">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="signinEmail">Email address</label>
                                    <div class="input-group">
                                        <div class="input-icon">
                                            <span class="ti-email"></span>
                                        </div>
                                        <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email address" aria-label="Email address" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="business_mobile">{{__('lang_v1.business_telephone')}}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="mobile1" id="business_mobile" placeholder="Your Phone" aria-label="Email address" required="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="signinPassword">
                                        Password
                                    </label>
                                    <div class="input-group">
                                        <div class="input-icon">
                                            <span class="ti-lock"></span>
                                        </div>
                                        <input type="password" class="form-control" name="password" id="signinPassword" placeholder="********" aria-label="Password" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="signinPassword2"> Confirm Password</label>
                                    <div class="input-group">
                                        <div class="input-icon">
                                            <span class="ti-lock"></span>
                                        </div>
                                        <input type="password" class="form-control" name="password" id="signinPassword2" placeholder="********" aria-label="Password" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label class="form-label" for="business_mobile">{{__('lang_v1.business_telephone')}}</label>
                                    <select class="custom-select" >
                                        <option>asdf</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="checkboxes">
                                <input id="check-er" type="checkbox" name="check">
                                <label for="check-er">I agree to the <a href="#">terms and conditions</a></label>
                            </p>
                        </div>
                        <div class="form-group">
                            <button class="btn theme-btn btn-block">Get Started</button>
                        </div>
                        <div class="form-group login-desc">
                            <p> Already have an account? <a href="signin.html">Sign In</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

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
    <script src="{{asset('new_assets/intlTelInput/js/intlTelInput.min.js')}}"></script>
    <script>
        var input = document.querySelector("#business_mobile"),
            mobile_hidden = document.querySelector("#hidden_mobile");

        var iti = window.intlTelInput(input, {
            initialCountry: 'eg',
            preferredCountries: ["eg", "ae"],
            excludeCountries: ["il"],
            separateDialCode: true,
            utilsScript: "https://intl-tel-input.com/node_modules/intl-tel-input/build/js/utils.js",
        });

        var handleChange = function() {
            mobile_hidden.value = iti.getNumber()
        };

        // listen to "keyup", but also "change" to update when the user selects a country
        input.addEventListener('change', handleChange);
        input.addEventListener('keyup', handleChange);
    </script>
</body>

</html>