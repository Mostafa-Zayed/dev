<header class="header-area" id="header-area">
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <div class="site-logo">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('front/images/logo_test.png') }}" class="img-fluid" alt="Img" /> </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
                    <li class="nav-item"><a href="#" data-scroll-nav="8">{{ __('lang_v1.contact') }}</a></li>
                    <li class="nav-itme"><a href="{{ route('business.getRegister') }}">{{ __('business.register') }}</a></li>
                </ul>

            </div>
        </div>
    </nav>
</header>