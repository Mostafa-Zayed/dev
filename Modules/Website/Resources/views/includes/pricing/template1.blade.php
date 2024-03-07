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
                            @foreach ($packages as $package)
                            @if ($package->interval == 'months' && $package->show_home == 1)
                            <!-- Start pricing table-->
                            <div class="col-md-6">
                                <div class="pricing-card">
                                    <header class="card-header">
                                        <h4>{{ $package->getTranslations('name')[app()->getLocale()]}}</h4>
                                        <span class="card-header-price">
                                            <span class="simbole">$</span>
                                            <span class="price-num">{{round($package->price,2)}}</span>
                                            <span class="price-date">/month</span>
                                        </span>
                                        <div class="shape-bottom">
                                            <img src="{{asset('modules/website/images/shapes/price-shape.svg')}}" alt="shape" class="bottom-shape img-fluid">
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
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- End Tab content 1 -->

                    <!-- Start Tab content 2 -->
                    <div id="yearly" class="tab-pane fade">
                        <div class="row">
                            @foreach ($packages as $package)
                            @if ($package->interval == 'years' && $package->show_home == 1)
                            <!-- Start pricing table-->
                            <div class="col-md-6">
                                <div class="pricing-card">
                                    <header class="card-header">
                                        <h4>{{ $package->getTranslations('name')[app()->getLocale()]}}</h4>
                                        <span class="card-header-price">
                                            <span class="simbole">$</span>
                                            <span class="price-num">{{round($package->price,2)}}</span>
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
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- End Tab content 2 -->
                </div>
            </div>
        </div>
    </div>
</section>