<section id="reviews" class="section-block" data-scroll-index="7">
    <div class="shape-top"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-header-style2">
                    @if(! empty($settings))
                    <h2>{{$settings->getTranslations('section_reviews_title')[app()->getLocale()]}}</h2>
                    {!! $settings->getTranslations('section_reviews_description')[app()->getLocale()] !!}
                    @endif
                    <div class="review_nav">
                        <span class="ti-angle-left button_prev"></span>
                        <span class="ti-angle-right button_next"></span>
                    </div>

                    <div class="btn-read-more"><a class="btn theme-btn" href="reviews.html">View all reviews</a></div>
                </div>
            </div>
            <div class="col-md-7">
                <!-- Start review items message-->
                <div class="review-details-content">
                    <div class="owl-carousel review_details" id="review_details-1">
                        @if($reviews->count() > 0)
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
                                <img src="images/reviews/author-1.jpg" alt="Img">
                            </div>
                        </div>
                        <!-- End review item Avatar -->

                        <!-- Start review item Avatar -->
                        <div class="item">
                            <div class="review_photo_block">
                                <img src="images/reviews/author-2.jpg" alt="Img">
                            </div>
                        </div>
                        <!-- End review item Avatar -->

                        <!-- Start review item Avatar -->
                        <div class="item">
                            <div class="review_photo_block">
                                <img src="images/reviews/author-3.jpg" alt="Img">
                            </div>
                        </div>
                        <!-- End review item Avatar -->

                        <!-- Start review item Avatar -->
                        <div class="item">
                            <div class="review_photo_block">
                                <img src="images/reviews/author-4.jpg" alt="Img">
                            </div>
                        </div>
                        <!-- End review item Avatar -->

                        <!-- Start review item Avatar -->
                        <div class="item">
                            <div class="review_photo_block">
                                <img src="images/reviews/author-1.jpg" alt="Img">
                            </div>
                        </div>
                        <!-- End review item Avatar -->

                        <!-- Start review item Avatar -->
                        <div class="item">
                            <div class="review_photo_block">
                                <img src="images/reviews/author-3.jpg" alt="Img">
                            </div>
                        </div>
                        <!-- End review item Avatar -->
                    </div>
                </div>
                <!-- End review items Avatar -->
            </div>
        </div>
    </div>
    @if($partners->count() > 0)
    <div class="container">
        <div class="owl-carousel list-clients">
            @foreach ($partners as $partner)
            <div class="clients-item">
                <a href="{{$partner->link}}" title="" target="__blank">
                    <img src="{{$partner->image}}" alt="Img" />
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    <div class="review-shape-bottom"></div>
    <div class="shape-bottom"></div>
</section>