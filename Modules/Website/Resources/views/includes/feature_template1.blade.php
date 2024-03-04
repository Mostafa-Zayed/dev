<section id="AppFeatures" class="section-block features-style2" data-scroll-index="1">
    <div class="container">
        <div class="section-header">
            @if(! empty($settings))
            <h2>{{($settings->getTranslations('section_features_title')[app()->getLocale()])}}</h2>
            {!! $settings->getTranslations('section_features_description')[app()->getLocale()] !!}
            @endif
        </div>
        <div class="row">
            @if(! empty($features) && $features->count() > 0)
            <div class="col-md-4">
                @foreach ($features as $feature)
                <div class="feature-block">
                    <span class="feature-icon">
                        <img src="{{$feature->image}}" class="img-fluid" alt="Img" />
                    </span>
                    <div class="feature-content">
                        <h3>{{$feature->getTranslations('name')[app()->getLocale()]}}</h3>
                        {!! $feature->getTranslations('description')[app()->getLocale()] !!}
                    </div>
                </div>
                @php array_shift($features) @endphp
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="img-box">
                    <img src="{{$settings->section_features_image}}" class="img-fluid" alt="Img" />
                </div>
            </div>
            <div class="col-md-4">
                @foreach ($features as $feature)
                <div class="feature-block">
                    <span class="feature-icon">
                        @if($feature->icon)
                        <i class="{{$feature->icon}}"></i>
                        @else
                        <img src="{{$feature->image}}" class="img-fluid" alt="Img" />
                        @endif
                    </span>
                    <div class="feature-content">
                        <h3>{{$feature->getTranslations('name')[app()->getLocale()]}}</h3>
                        {!! $feature->getTranslations('description')[app()->getLocale()] !!}
                    </div>
                </div>
                @php array_shift($features) @endphp
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>