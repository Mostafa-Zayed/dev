<header class="header-area pb-3" id="header-area">
    <section class="header-top  py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="try-freee">
                <a href="#">
                    جرب الان مجانا
                </a>
            </div>
            <div class="d-flex position-relative">
                <li class="nav-itme">
                    <a href="{{ route('login') }}">
                        <span class="mx-2">
                            <i class="fas fa-user-circle"></i>
                        </span>
                        <span>
                            {{ __('lang_v1.login') }}
                        </span>

                    </a>
                </li>

                <span class="header-bar">|</span>
                <div class="mx-3 d-flex">
                    <span class="mx-2"><i class="fas fa-globe" style="color:#fff"></i></span>
                    @if (getLanguage() == 'en')
                        <li class="nav-item"><a href="{{ url(request()->path()) }}?lang=ar">عربي</a></li>
                    @else
                        <li class="nav-item"><a href="{{ url(request()->path()) }}?lang=en">English</a></li>
                    @endif

                </div>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-expand-md ">
        <div class="container">
            <div class="site-logo">
                <a class="navbar-brand" href="{{ url('/') }}"><img
                        src="{{ asset('front/images/logo-colored.png') }}" class="img-fluid" alt="Img" /> </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/') }}">{{ __('lang_v1.home') }}</a>
                    </li>

                    <li class="nav-item"><a href="#" data-scroll-nav="1">{{ __('lang_v1.features') }}</a></li>
                    <li class="nav-item"><a href="#" data-scroll-nav="2">{{ __('lang_v1.how_work') }}</a></li>
                    <li class="nav-item"><a href="#" data-scroll-nav="3">{{ __('lang_v1.screenshots') }}</a></li>
                    <li class="nav-item"><a href="#" data-scroll-nav="4">{{ __('lang_v1.pricing') }}</a></li>
                    <li class="nav-item"><a href="#" data-scroll-nav="7">{{ __('lang_v1.reviews') }}</a></li>
                    <li class="nav-item"><a href="#" data-scroll-nav="6">{{ __('lang_v1.faqs') }}</a></li>
                    <li class="nav-item"><a href="#" class="bordered-button"
                            data-scroll-nav="8">{{ __('lang_v1.contact') }}</a></li>
                    <li class="nav-itme"><a class="main-btn"
                            href="{{ route('business.getRegister') }}">{{ __('business.register') }}</a></li>



                </ul>

            </div>
        </div>
    </nav>
</header>


<style>
    .header-bar {
        position: absolute;
        color: #fff;
        right: 57%;
        top: 0%
    }

    .header-top {
        background-image: linear-gradient(to right, rgba(144, 30, 193, 0.90) 0%, rgba(116, 80, 254, 0.90) 51%, rgba(144, 30, 193, 0.90) 100%);
        background-size: 200% auto;
    }

    .header-top li a {
        color: #fff !important;

    }

    .try-freee a {
        color: #fff !important;
        border-bottom: 1px solid #fff;
    }

    .navbar-nav li a {
        padding: 0;
        display: inline-block;
        font-size: 14px;
        font-weight: 600;
        color: #707070;
        padding-inline: 0;
    }

    .navbar {
        background: #fff;
        box-shadow: 0px 6px 5px #3333332e;
    }
</style>
