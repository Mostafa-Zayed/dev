<section id="blog" class="section-block" data-scroll-index="5">
        <div class="container">
            <div class="section-header">
                @if(! empty($settings))
                <h2>{{$settings->getTranslations('section_posts_title')[app()->getLocale()]}}</h2>
                {!! $settings->getTranslations('section_posts_description')[app()->getLocale()] !!}
                @endif
            </div>
            <div class="owl-carousel blog-slider">
                <!-- Start Blog item -->
                <div class="blog-item">
                    <div class="blog-article style-1">
                        <div class="article-img">
                            <img src="images/blog/img1.jpg" class="img-fluid" alt="Img">
                        </div>
                        <article class="article-content">
                            <h4><a href="single-post.html">Design is not just what it looks like Design is how it works </a></h4>
                            <div class="post-author">
                                <div class="img-block"><img src="images/blog/author-1.jpg" class="img-fluid" alt="Img" /></div>
                                <h5>Anna Morki</h5>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- End Blog item -->

                <!-- Start Blog item -->
                <div class="blog-item">
                    <div class="blog-article style-2">
                        <article class="article-content">
                            <h4><a href="single-post.html">" How to help your team excel at remote collaboration. Here are tips and tools we use on the content team at InVision to keep our remote collaboration game strong. Trust is both a complex and nuanced topic. Its very nature makes it difficult to tackle through direct effort. "</a></h4>
                            <div class="post-author">
                                <div class="img-block"><img src="images/blog/author-2.jpg" class="img-fluid" alt="Img" /></div>
                                <h5>Anna Morki</h5>
                            </div>
                            <a href="single-post.html" class="btn theme-btn">Read More</a>
                        </article>
                    </div>
                </div>
                <!-- End Blog item -->

                <!-- Start Blog item -->
                <div class="blog-item">
                    <div class="blog-article style-1">
                        <div class="article-img">
                            <img src="images/blog/img2.jpg" class="img-fluid" alt="Img">
                        </div>
                        <article class="article-content">
                            <h4><a href="single-post.html">Design is not just what it looks like Design is how it works </a></h4>
                            <div class="post-author">
                                <div class="img-block"><img src="images/blog/author-3.jpg" class="img-fluid" alt="Img" /></div>
                                <h5>Anna Morki</h5>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- End Blog item -->

                <!-- Start Blog item -->
                <div class="blog-item">
                    <div class="blog-article style-2">
                        <article class="article-content">
                            <h4><a href="single-post.html">" How to help your team excel at remote collaboration. Here are tips and tools we use on the content team at InVision to keep our remote collaboration game strong. Trust is both a complex and nuanced topic. Its very nature makes it difficult to tackle through direct effort. "</a></h4>
                            <div class="post-author">
                                <div class="img-block"><img src="images/blog/author-4.jpg" class="img-fluid" alt="Img" /></div>
                                <h5>Anna Morki</h5>
                            </div>
                            <a href="single-post.html" class="btn theme-btn">Read More</a>
                        </article>
                    </div>
                </div>
                <!-- End Blog item -->
            </div>
        </div>
    </section>