<section id="AppFeatures" class="section-block features-style1" data-scroll-index="1">
        @if(empty($settings->section_features_image))
        <div class="circls-features active">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="circle-4"></div>
            <div class="circle-x"></div>
        </div>
        @endif
        <div class="container">
            <div class="section-header">
                @if(! empty($settings))
                <h2>{{($settings->getTranslations('section_features_title')[app()->getLocale()])}}</h2>
                {!! $settings->getTranslations('section_features_description')[app()->getLocale()] !!}
                @endif
            </div>
            <div class="row">
                <!-- Start Features Item -->
                @if(! empty($features) && $features->count() > 0)
                @foreach ($features as $feature)
                @if ($loop->index == 3 && ! empty($settings->section_features_image))
                <div class="col-md-4">
                    <div class="img-box">
                        <img src="{{$settings->section_features_image}}" class="img-fluid" alt="Img" />
                    </div>
                </div>
                @endif
                <div class="col-md-4">
                    <div class="feature-block">
                        <span class="feature-icon icon-1">
                            @if($feature->icon)
                            <i class="{{$feature->icon}}"></i>
                            @else
                            <img src="{{$feature->image}}" class="img-fluid" alt="Img" />
                            @endif
                        </span>
                        <h3>{{$feature->getTranslations('name')[app()->getLocale()]}}</h3>
                        {!! $feature->getTranslations('description')[app()->getLocale()] !!}
                    </div>
                </div>
                @endforeach
                <!-- End Features Item -->
                @endif
            </div>
        </div>
    </section>

 