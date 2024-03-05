        <section id="AppFeatures" class="section-block features-style3" data-scroll-index="1">
            <div class="bubbles-animate">
                <div class="bubble b_one"></div>
                <div class="bubble b_two"></div>
                <div class="bubble b_three"></div>
                <div class="bubble b_four"></div>
                <div class="bubble b_five"></div>
                <div class="bubble b_six"></div>
            </div>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="section-header-style2">
                            <h2>{{($settings->getTranslations('section_features_title')[app()->getLocale()])}}</h2>
                            {!! $settings->getTranslations('section_features_description')[app()->getLocale()] !!}
                            <div class="btn-read-more"><a class="btn theme-btn" href="{{$settings->section_feature_link}}">ابدأ الآن</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            @foreach ($features as $feature)
                            <!-- Start Features item -->
                            <div class="col-md-6">
                                <div class="feature-block">
                                    <span class="feature-icon">
                                        <i class="{{$feature->icon}}"></i>
                                    </span>
                                    <h3>{{$feature->getTranslations('name')[app()->getLocale()]}}</h3>
                                    {!! $feature->getTranslations('description')[app()->getLocale()] !!}
                                </div>
                            </div>
                            <!-- End Features item -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>