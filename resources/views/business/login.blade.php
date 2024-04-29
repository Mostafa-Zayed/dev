<!DOCTYPE html>
<html lang="{{ getLanguage() }}" dir=@if (getLanguage() != 'ar') 'ltr' @else 'rtl' @endif>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('lang_v1.login') }} - {{ config('app.name', 'ERP TEC') }}</title>
    <meta name="description" content="App Landing page, RTL Version, Marwa El-Manawy, Application">
    <meta name="author" content="ERP TEC - https://dev.erptec.net" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('favicon.png')}}" type="image/gif" sizes="32x32">
    @if (getLanguage() == 'ar')
        <link rel="stylesheet" href="{{ asset('front/rtl/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/rtl/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('front/rtl/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('front/rtl/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/rtl/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/rtl/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/rtl/css/lightcase.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('front/rtl/css/style.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('front/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/lightcase.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    @endif
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rtl/toastr.min.css') }}">
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

        <style>
            .auth-select {
    background: #8334dc;
    color: #fff;
}

        </style>
</head>

<body>
    <div class="login-page">
        <div class="col-md-4 login-side-des">
            <div class="container-fluid">
                <div class="login-side-block">
                    <div class="row align-items-baseline">
                        <div class="col-md-6">
                            <a href="{{ url('/') }}"><img src="{{ asset('front/images/erp_logo.png') }}"
                                    alt="Logo" style="width:170px;height:100px" /></a>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="custom-select auth-select" id="change_lang">
                                    @foreach (config('constants.langs') as $key => $val)
                                        <option value="{{ $key }}"
                                            @if ((empty(request()->lang) && config('app.locale') == $key) || request()->lang == $key) selected @endif>
                                            {{ $val['full_name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        <img src="{{ asset('front/images/register.png') }}" alt="">
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
                        <h5>Partners</h5>
                        <div class="partner-list">
                            <div class="row">
                                @foreach ($partners as $partner)
                                    @if ($loop->index > 2)
                                    @break
                                @endif
                                <div class="col-md-4">
                                    <img src="{{ $partner->image }}" class="img-fluid" alt="partner" />
                                </div>
                            @endforeach
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
                    <h2>{{ __('business.welcome_back') }}</h2>
                    <p>{{ __('business.login_to_manage') }}</p>
                </div>
                <form method="POST" action="{{ route('login') }}" id="login-form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="form-label" for="email">{{ __('business.email') }}</label>
                        <div class="input-group">
                            <div class="input-icon">
                                <span class="ti-email"></span>
                            </div>
                            <input type="email" class="form-control" name="username" id="email"
                                placeholder="{{ __('business.email') }}" aria-label="Email address"
                                required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="signinPassword">
                            {{ __('business.password') }}
                            <span class="d-flex justify-content-between align-items-center">
                                <a class="link-muted"
                                    href="recover-account.html">{{ __('business.forget_password') }}</a>
                            </span>
                        </label>
                        <div class="input-group">
                            <div class="input-icon">
                                <span class="ti-lock"></span>
                            </div>
                            <input type="password" class="form-control" name="password" id="password"
                                aria-label="Password" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn theme-btn btn-block">{{ __('lang_v1.login') }}</button>
                    </div>
                    <div class="form-group login-desc">
                        <p> {{ __('lang_v1.dont_have_account') }} <a
                                href="{{ route('business.getRegister') }}">{{ __('lang_v1.register') }}</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>

<!-- Start JS FILES -->
<!-- JQuery -->
<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/popper.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<!-- Wow Animation -->
<script src="{{ asset('front/js/wow.min.js') }}"></script>
<!-- Owl Coursel -->
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<!-- Images LightCase -->
<script src="{{ asset('front/js/lightcase.min.js') }}"></script>
<!-- scrollIt -->
<script src="{{ asset('front/js/scrollIt.min.js') }}"></script>
<!-- Main Script -->
<script src="{{ asset('front/js/script.js') }}"></script>
<script src="{{ asset('front/js/script.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#change_lang').change(function() {
            window.location = "{{ route('login') }}?lang=" + $(this).val();
        })
    });
</script>
</body>

</html>
