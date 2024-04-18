<section id="reviews" class="section-block" data-scroll-index="7">
    <div class="shape-top"></div>
    <div class="container">
        <div class="section-header">
            <h2>
                @if(! empty($settings->getTranslations('section_reviews_title')[app()->getLocale()]))
                {{ $settings->getTranslations('section_reviews_title')[app()->getLocale()] }}
            </h2>
            @endif
            @if (! empty($settings->getTranslations('section_reviews_description')[app()->getLocale()]))
            {!! $settings->getTranslations('section_reviews_description')[app()->getLocale()] !!}
            @endif

        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Start review items Avatar -->
                <div class="review-photo-list">
                    <div class="owl-carousel review_photo" id="review_photo-1">
                        @if ($reviews->count() > 0)
                        @foreach ($reviews as $review)
                        <!-- Start review item Avatar -->
                        <div class="item">
                            <div class="review_photo_block">
                                <img src="{{ asset($review->image) }}" alt="Img">

                            </div>
                            {!! $review->description !!}

                        </div>
                        <!-- End review item Avatar -->
                        @endforeach
                        @endif
                    </div>
                </div>
                <!-- End review items Avatar -->
            </div>

            <div class="col-md-12">
                <div class="section-header-style2">

                    <div class="review_nav">
                        <span class="ti-angle-left button_prev"></span>
                        <span class="ti-angle-right button_next"></span>
                    </div>

                    <div class="btn-read-more"><a class="btn theme-btn" href="{{ route('reviews') }}">{{ __('lang_v1.view_all_reviews') }}</a></div>
                </div>
            </div>
        </div>
    </div>
    @if ($partners->count() > 0)
    <div class="container">
        <div class="owl-carousel list-clients">
            @foreach ($partners as $partner)
            <div class="clients-item">
                <a href="{{ $partner->link }}" title="" target="__blank">
                    <img src="{{ $partner->image }}" alt="Img" />
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    <div class="review-shape-bottom"></div>
    <div class="shape-bottom"></div>
</section>