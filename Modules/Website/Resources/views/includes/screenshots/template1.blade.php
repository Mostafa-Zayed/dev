<section id="appScreenshots" class="section-block" data-scroll-index="3">
    <div class="shape-top"></div>
    <div class="container">
        <div class="section-header">
            @if(! empty($settings))
            <h2>
                @if(! empty($settings->getTranslations('section_screenshot_title')[app()->getLocale()])) {{$settings->getTranslations('section_screenshot_title')[app()->getLocale()]}} @endif
            </h2> 
            @if(! empty($settings->getTranslations('section_screenshot_description')[app()->getLocale()])) {!! $settings->getTranslations('section_screenshot_description')[app()->getLocale()] !!} @endif
            @endif
        </div>

        <div class="list_screen_slide owl-carousel">
            @if($template->websiteScreenShots->count() > 0)
            @foreach ($template->websiteScreenShots as $screenShot)
            <!-- Start screen item-->
            <div class="item">
                <a href="{{$screenShot->image}}" data-rel="lightcase:gal">
                    <img src="{{$screenShot->image}}" alt="Img">
                </a>
            </div>
            <!-- End screen item-->
            @endforeach
            @endif
        </div>
    </div>
</section>