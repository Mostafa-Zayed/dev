<section id="AppFeatures" class="section-block features-style1" data-scroll-index="1">
    <div class="circls-features active">
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="circle-4"></div>
        <div class="circle-x"></div>
    </div>
    <div class="container">
        <div class="section-header">
            @if(! empty($settings))
            <h2>{{($settings->getTranslations('section_features_title')[app()->getLocale()])}}</h2>
            {!! $settings->getTranslations('section_features_description')[app()->getLocale()] !!}
            @endif
        </div>
        <div class="row">
            @foreach ($features as $feature)
            <div class="col-md-4">
                <div class="feature-block">
                    <span class="feature-icon icon-1">
                        <i class="ti-wand"></i>
                    </span>
                    <h3>{{$feature->getTranslations('name')[app()->getLocale()]}}</h3>
                    {!! $feature->getTranslations('description')[app()->getLocale()] !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>