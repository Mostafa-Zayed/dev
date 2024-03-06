<section id="appScreenshots" class="section-block" data-scroll-index="3">
    <div class="shape-top"></div>
    <div class="container">
        <div class="section-header">
            @if(! empty($settings))
            <h2>{{$settings->getTranslations('section_screenshot_title')[app()->getLocale()]}}</h2>
            {!! $settings->getTranslations('section_screenshot_description')[app()->getLocale()] !!}
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