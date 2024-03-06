<section id="pricing" class="section-block" data-scroll-index="4">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="section-header-style2">
                        @if(! empty($settings))
                        <h2>{{$settings->getTranslations('section_packages_title')[app()->getLocale()]}}</h2>
                        {!! $settings->getTranslations('section_packages_description')[app()->getLocale()] !!}
                        @endif
                        </div>
                        <ul class="nav pricing-btns-group">
                            <li><a class="active btn" data-toggle="tab" href="#monthly">Monthly</a></li>
                            <li><a class="btn" data-toggle="tab" href="#yearly">Yearly <span class="btn-badge">10% OFF</span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <div class="tab-content">
                            <!-- Start Tab content 1 -->
                            <div id="monthly" class="tab-pane fade in active show">
                                <div class="row">
                                    <!-- Start pricing table-->
                                    <div class="col-md-6">
                                        <div class="pricing-card">
                                            <header class="card-header">
                                                <h4>Individual Plan</h4>
                                                <span class="card-header-price">
                                                    <span class="simbole">$</span>
                                                    <span class="price-num">22</span>
                                                    <span class="price-date">/month</span>
                                                </span>
                                                <div class="shape-bottom">
                                                    <img src="images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
                                                </div>
                                            </header>
                                            <div class="card-body">
                                                <ul>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        Community support
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        400+ pages
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        100+ header variations
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        20+ home page options
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-sm btn-block">Get Started</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End pricing table-->

                                    <!-- Start pricing table-->
                                    <div class="col-md-6">
                                        <div class="pricing-card top-35">
                                            <header class="card-header">
                                                <h4>Enterprise Plan</h4>
                                                <span class="card-header-price">
                                                    <span class="simbole">$</span>
                                                    <span class="price-num">99</span>
                                                    <span class="price-date">/month</span>
                                                </span>
                                                <div class="shape-bottom">
                                                    <img src="images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
                                                </div>
                                            </header>
                                            <div class="card-body">
                                                <ul>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        24/7 support
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        400+ pages
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        200+ header variations
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        40+ home page options
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        E-commerce
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        Free Domain
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-sm btn-block">Get Started</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End pricing table-->
                                </div>
                            </div>
                            <!-- End Tab content 1 -->

                            <!-- Start Tab content 2 -->
                            <div id="yearly" class="tab-pane fade">
                                <div class="row">
                                    <!-- Start pricing table-->
                                    <div class="col-md-6">
                                        <div class="pricing-card">
                                            <header class="card-header">
                                                <h4>Individual Plan</h4>
                                                <span class="card-header-price">
                                                    <span class="simbole">$</span>
                                                    <span class="price-num">122</span>
                                                    <span class="price-date">/month</span>
                                                </span>
                                                <div class="shape-bottom">
                                                    <img src="images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
                                                </div>
                                            </header>
                                            <div class="card-body">
                                                <ul>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        Community support
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        400+ pages
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        100+ header variations
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        20+ home page options
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-sm btn-block">Get Started</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End pricing table-->

                                    <!-- Start pricing table-->
                                    <div class="col-md-6">
                                        <div class="pricing-card top-35">
                                            <header class="card-header">
                                                <h4>Enterprise Plan</h4>
                                                <span class="card-header-price">
                                                    <span class="simbole">$</span>
                                                    <span class="price-num">299</span>
                                                    <span class="price-date">/month</span>
                                                </span>
                                                <div class="shape-bottom">
                                                    <img src="images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
                                                </div>
                                            </header>
                                            <div class="card-body">
                                                <ul>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        24/7 support
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        400+ pages
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        200+ header variations
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        40+ home page options
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        E-commerce
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        Free Domain
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-sm btn-block">Get Started</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End pricing table-->
                                </div>
                            </div>
                            <!-- End Tab content 2 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>