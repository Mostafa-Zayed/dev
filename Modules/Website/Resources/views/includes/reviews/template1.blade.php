<section id="reviews" class="section-block" data-scroll-index="7">
    <div class="shape-top"></div>
    <div class="container">

        <div class="section-header">
            <h2>{{ $settings->getTranslations('section_reviews_title')[app()->getLocale()] }}</h2>
            {!! $settings->getTranslations('section_reviews_description')[app()->getLocale()] !!}

        </div>
        <div class="row">

            <div class="col-md-12">
                <!-- Start review items message-->
                <div class="review-details-content">
                    <div class="owl-carousel review_details" id="review_details-1">
                        @if ($reviews->count() > 0)
                            @foreach ($reviews as $review)
                                <!-- Start review item -->
                                <div class="item">
                                    {!! $review->description !!}
                                    <h5>Sarah Carlos</h5>
                                    <h6>Creative Director</h6>
                                </div>
                                <!-- End review item -->
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- End review items message -->

                <!-- Start review items Avatar -->
                <div class="review-photo-list">
                    <div class="owl-carousel review_photo" id="review_photo-1">
                        <!-- Start review item Avatar -->
                        <div class="item">
                            <div class="review_photo_block">
                                <img src="{{ asset('front/images/reviews/author-1.jpg') }}" alt="Img">

                            </div>
                            <p>
                                Amazing service! The subscription package I chose exceeded my expectations. I highly
                                recommend it to anyone looking for quality and affordability.
                            </p>
                        </div>
                        <!-- End review item Avatar -->

                        <!-- Start review item Avatar -->
                        <div class="item">
                            <div class="review_photo_block">
                                <img src="{{ asset('front/images/reviews/author-2.jpg') }}" alt="Img">
                            </div>
                            <p>
                                I've been using their subscription service for a while now, and I'm quite satisfied with
                                it. The variety of packages available is impressive, and the customer support team is
                                always helpful. </p>
                        </div>
                        <!-- End review item Avatar -->

                        <!-- Start review item Avatar -->
                        <div class="item">
                            <div class="review_photo_block">
                                <img src="{{ asset('front/images/reviews/author-3.jpg') }}" alt="Img">
                            </div>
                            <p>
                                منتجات رائعة وخدمة عملاء ممتازة! لقد استمتعت حقًا بتجربتي معهم وسأوصي بها لجميع
                                أصدقائي." </p>
                        </div>
                        <!-- End review item Avatar -->

                        <!-- Start review item Avatar -->
                        <div class="item">
                            <div class="review_photo_block">
                                <img src="{{ asset('front/images/reviews/author-4.jpg') }}" alt="Img">
                            </div>
                            <p>
                                Amazing service! The subscription package I chose exceeded my expectations. I highly
                                recommend it to anyone looking for quality and affordability.
                            </p>
                        </div>
                        <!-- End review item Avatar -->

                        <!-- Start review item Avatar -->
                        <div class="item">
                            <div class="review_photo_block">
                                <img src="{{ asset('front/images/reviews/author-1.jpg') }}" alt="Img">
                            </div>
                            <p>
                                Their subscription packages offer great value for money. I've found exactly what I
                                needed at a reasonable price. However, it would be even better if they could offer more
                                customization options. </p>
                        </div>
                        <!-- End review item Avatar -->

                        <!-- Start review item Avatar -->
                        {{-- <div class="item">
                            <div class="review_photo_block">
                                <img src="{{ asset('front/images/reviews/author-3.jpg') }}" alt="Img">
                            </div>
                        </div> --}}
                        <!-- End review item Avatar -->
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

                    <div class="btn-read-more"><a class="btn theme-btn"
                            href="{{ route('reviews') }}">{{ __('lang_v1.view_all_reviews') }}</a></div>
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
