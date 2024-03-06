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
            <!-- Start screen item-->
            <div class="item">
                <a href="images/screen/1.png" data-rel="lightcase:gal">
                    <img src="images/screen/1.png" alt="Img">
                </a>
            </div>
            <!-- End screen item-->

            <!-- Start screen item-->
            <div class="item">
                <a href="images/screen/2.png" data-rel="lightcase:gal">
                    <img src="images/screen/2.png" alt="Img">
                </a>
            </div>
            <!-- End screen item-->

            <!-- Start screen item-->
            <div class="item">
                <a href="images/screen/3.png" data-rel="lightcase:gal">
                    <img src="images/screen/3.png" alt="Img">
                </a>
            </div>
            <!-- End screen item-->

            <!-- Start screen item-->
            <div class="item">
                <a href="images/screen/2.png" data-rel="lightcase:gal">
                    <img src="images/screen/2.png" alt="Img">
                </a>
            </div>
            <!-- End screen item-->

            <!-- Start screen item-->
            <div class="item">
                <a href="images/screen/3.png" data-rel="lightcase:gal">
                    <img src="images/screen/3.png" alt="Img">
                </a>
            </div>
            <!-- End screen item-->

            <!-- Start screen item-->
            <div class="item">
                <a href="images/screen/2.png" data-rel="lightcase:gal">
                    <img src="images/screen/2.png" alt="Img">
                </a>
            </div>
            <!-- End screen item-->

            <!-- Start screen item-->
            <div class="item">
                <a href="images/screen/3.png" data-rel="lightcase:gal">
                    <img src="images/screen/3.png" alt="Img">
                </a>
            </div>
            <!-- End screen item-->

            <!-- Start screen item-->
            <div class="item">
                <a href="images/screen/2.png" data-rel="lightcase:gal">
                    <img src="images/screen/2.png" alt="Img">
                </a>
            </div>
            <!-- End screen item-->

            <!-- Start screen item-->
            <div class="item">
                <a href="images/screen/3.png" data-rel="lightcase:gal">
                    <img src="images/screen/3.png" alt="Img">
                </a>
            </div>
            <!-- End screen item-->
        </div>
    </div>
</section>