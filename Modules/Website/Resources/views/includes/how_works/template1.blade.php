<section id="how-it-work" class="section-block" data-scroll-index="2">
    <div class="container">
        <div class="section-header">
            @if(! empty($settings))
            <h2>{{$settings->getTranslations('section_work_title')[app()->getLocale()]}}</h2>
            {!! $settings->getTranslations('section_work_description')[app()->getLocale()] !!}
            @endif
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{$settings->section_work_image}}" alt="Img" />
                </div>
            </div>
            <div class="col-md-6">
                @foreach ($template->websiteWorks as $work)
                <!-- Start Block 1 -->
                <div class="description-block">
                    <div class="inner-box">
                        <div class="step_num"><img src="{{$work->image}}" alt="Img" /></div>
                        <h3>{{$work->getTranslations('name')[app()->getLocale()]}}</h3>
                        {!! $work->getTranslations('description')[app()->getLocale()] !!}
                    </div>
                </div>
                <!-- End Block 1 -->
                @endforeach
            </div>
        </div>
    </div>
</section>