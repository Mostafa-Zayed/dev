<footer>
    <div class="shape-top"></div>
    <div class="container">
        <!-- End Footer Top  Area -->
        <div class="top-footer">
            <div class="row">
                <!-- Start Column 1 -->
                <div class="col-md-4">
                    <div class="footer-logo">
                        <h4 class="footer-title">
                            <img src="{{ asset('front/images/erp_logo.png') }}" class="img-fluid" alt="Img"
                                style="width: 170px;height:80px;object-fit:cover" />
                        </h4>
                    </div>
                    @if (!empty($settings))
                        @if (!empty($settings->getTranslations('footer_description')[app()->getLocale()]))
                            {!! $settings->getTranslations('footer_description')[app()->getLocale()] !!}
                        @endif
                    @endif
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
                    <h4 class="footer-title">{{ __('lang_v1.useful_links') }}</h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}">{{ __('lang_v1.home') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ __('lang_v1.about') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('lang_v1.contact') }}</a></li>
                        <li><a href="{{ route('reviews') }}">{{ __('lang_v1.reviews') }}</a></li>
                        <li><a href="{{ route('faqs') }}">{{ __('lang_v1.faqs') }}</a></li>
                        <li><a href="{{ route('blog') }}">{{ __('lang_v1.blog') }}</a></li>
                    </ul>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-md-2">
                    <h4 class="footer-title">{{ __('lang_v1.user_acount') }}</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('login') }}">{{ __('lang_v1.login') }}</a></li>
                        <li><a href="{{ route('business.getRegister') }}">{{ __('lang_v1.register') }}</a></li>

                    </ul>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-md-4">
                    <h4 class="footer-title">{{ __('lang_v1.newsletter') }}</h4>
                    @if (!empty($settings))
                        @if (!empty($settings->getTranslations('newsletter_description')[app()->getLocale()]))
                            {!! $settings->getTranslations('newsletter_description')[app()->getLocale()] !!}
                        @endif
                    @endif
                    <form class="newsletter-form" method="post" action="{{ route('subscribe') }}" id="subscribe_form">
                        @csrf
                        <input type="email" name= 'email' placeholder="{{ __('business.email') }}"
                            id="user_email" />
                        <button class="btn theme-btn" type="submit">{{ __('lang_v1.subscribe') }}</button>
                    </form>
                </div>
                <!-- End Column 4 -->
            </div>
        </div>
        <!-- End Footer Top  Area -->

        <!-- Start Copyrights Area -->
        <div class="copyrights">
            <p>Copyrights © 2020. Designed by <i class="flaticon-like-2"></i> <a href="{{ url('/') }}">ERP
                    TEC</a>.</p>
        </div>
        <!-- End Copyrights Area -->
    </div>
</footer>
