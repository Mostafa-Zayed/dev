<section class="start_home demo2">
    <div class="banner_top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 start-home-content">
                    <h1>
                        @if(! empty($template->websiteSlider->heading)){{$template->websiteSlider->heading}}@else put slider heading here @endif
                    </h1>
                    @if (! empty($template->websiteSlider->description))
                    {!! $template->websiteSlider->description !!}
                    @else
                    put slider description here
                    @endif

                    @if(!empty($template->websiteSlider->app_store_link) || ! empty($template->websiteSlider->google_play_link))
                    <div class="app-button">
                        @if(! empty($template->websiteSlider->app_store_link))
                        <div class="apple-button">
                            <a href="{{$template->websiteSlider->app_store_link}}">
                                <div class="slider-button-icon">
                                    <i class="fab fa-apple" aria-hidden="true"></i>
                                </div>
                                <div class="slider-button-title">
                                    <p>from App store</p>
                                    <h3>app store</h3>
                                </div>
                            </a>
                        </div>
                        @endif
                        @if(! empty($template->websiteSlider->google_play_link))
                        <div class="google-button">
                            <a href="{{$template->websiteSlider->google_play_link}}">
                                <div class="slider-button-icon">
                                    <i class="fab fa-google-play" aria-hidden="true"></i>
                                </div>
                                <div class="slider-button-title">
                                    <p>From Play Store</p>
                                    <h3>Google Play</h3>
                                </div>
                            </a>
                        </div>
                        @endif
                    </div>
                    @endif
                </div>
                @if(! empty($template->websiteSlider->image))
                <div class="col-md-6 start-home-img">
                    <img class="img-fluid" src="{{asset($template->websiteSlider->image)}}" alt="Img" />
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="wave-area">
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
</section>