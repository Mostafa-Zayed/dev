<!DOCTYPE html>
<html lang="{{getLanguage()}}" dir=@if(getLanguage() !='ar' ) 'ltr' @else 'rtl' @endif>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{__('lang_v1.login')}} - {{ config('app.name', 'ERP TEC') }}</title>
    <meta name="description" content="App Landing page, RTL Version, Marwa El-Manawy, Application">
    <meta name="author" content="ERP TEC - https://dev.erptec.net" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(getLanguage() == 'ar')
    <link rel="stylesheet" href="{{asset('front/rtl/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/rtl/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('front/rtl/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/rtl/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/rtl/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/rtl/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/rtl/css/lightcase.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/rtl/css/style.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('front/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/lightcase.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    @endif
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <div class="login-page">
        <div class="col-md-4 login-side-des">
            <div class="container-fluid">
                <div class="login-side-block">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{route('login')}}"><img src="{{asset('front/images/logo.png')}}" alt="Logo" /></a>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="custom-select" id="change_lang">
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


                            </div>
                        </div>
                        <div class="review-photo-list">

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
                <a href="index.html" class="res-logo"><img src="images/logo-2.png" alt="Logo" /></a>
                <div class="login-form">

                    <div class="login-form-head">
                        <h2>{{__('business.welcome_back')}}</h2>
                        <p>{{__('business.login_to_manage')}}</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}" id="login-form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="form-label" for="email">{{__('business.email')}}</label>
                            <div class="input-group">
                                <div class="input-icon">
                                    <span class="ti-email"></span>
                                </div>
                                <input type="email" class="form-control" name="username" id="email" placeholder="{{__('business.email')}}" aria-label="Email address" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="signinPassword">
                                {{__('business.password')}}
                                <span class="d-flex justify-content-between align-items-center">
                                    <a class="link-muted" href="recover-account.html">{{__('business.forget_password')}}</a>
                                </span>
                            </label>
                            <div class="input-group">
                                <div class="input-icon">
                                    <span class="ti-lock"></span>
                                </div>
                                <input type="password" class="form-control" name="password" id="password" aria-label="Password" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn theme-btn btn-block">{{__('lang_v1.login')}}</button>
                        </div>
                        <div class="form-group login-desc">
                            <p> {{__('lang_v1.dont_have_account')}} <a href="{{route('business.getRegister')}}">{{__('lang_v1.register')}}</a></p>
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


    <script type="text/javascript">
        $(document).ready(function() {
            $('#change_lang').change(function() {
                window.location = "{{ route('login') }}?lang=" + $(this).val();
            })
        });
    </script>
</body>

</html>