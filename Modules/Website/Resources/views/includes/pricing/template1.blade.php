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
                    <li><a class="active btn" data-toggle="tab" href="#monthly">{{__('website::lang.monthly')}}</a></li>
                    <li><a class="btn" data-toggle="tab" href="#yearly">{{__('website::lang.yearly')}} <span class="btn-badge">10% OFF</span></a></li>
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
                                            <span class="price-date">/ {{__('website::lang.monthly')}}</span>
                                        </span>
                                        <div class="shape-bottom">
                                            <img src="{{asset('modules/website/images/shapes/price-shape.svg')}}" alt="shape" class="bottom-shape img-fluid">
                                        </div>
                                    </header>
                                    <div class="card-body">
                                        <ul>
                                            <li>
                                                <span class="fas fa-check"></span>
                                                @if($package->location_count == 0)
                                                @lang('superadmin::lang.unlimited')
                                                @else
                                                {{$package->location_count}}
                                                @endif

                                                @lang('business.business_locations')
                                            </li>
                                            <li>
                                                <span class="fas fa-check"></span>
                                                @if($package->user_count == 0)
                                                @lang('superadmin::lang.unlimited')
                                                @else
                                                {{$package->user_count}}
                                                @endif

                                                @lang('superadmin::lang.users')
                                            </li>
                                            <li>
                                                <span class="fas fa-check"></span>
                                                @if($package->product_count == 0)
                                                @lang('superadmin::lang.unlimited')
                                                @else
                                                {{$package->product_count}}
                                                @endif

                                                @lang('superadmin::lang.products')
                                            </li>
                                            <li>
                                                <span class="fas fa-check"></span>
                                                @if($package->invoice_count == 0)
                                                @lang('superadmin::lang.unlimited')
                                                @else
                                                {{$package->invoice_count}}
                                                @endif

                                                @lang('superadmin::lang.invoices')
                                            </li>

                                            @if(!empty($package->custom_permissions))
                                            @foreach($package->custom_permissions as $permission => $value)
                                            @isset($permission_formatted[$permission])
                                            <li>
                                                <span class="fas fa-check"></span>
                                                {{$permission_formatted[$permission]}}
                                            </li>

                                            @endisset
                                            @endforeach
                                            @endif


                                        </ul>
                                        <a href="{{action([\Modules\Superadmin\Http\Controllers\SubscriptionController::class, 'pay'], [$package->id])}}" class="btn btn-sm btn-block">Get Started</a>
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
                                            <span class="price-date">/ {{__('website::lang.yearly')}}</span>
                                        </span>
                                        <div class="shape-bottom">
                                            <img src="images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
                                        </div>
                                    </header>
                                    <div class="card-body">
                                        <ul>
                                            <li>
                                                <span class="fas fa-check"></span>
                                                @if($package->location_count == 0)
                                                @lang('superadmin::lang.unlimited')
                                                @else
                                                {{$package->location_count}}
                                                @endif

                                                @lang('business.business_locations')
                                            </li>
                                            <li>
                                                <span class="fas fa-check"></span>
                                                @if($package->user_count == 0)
                                                @lang('superadmin::lang.unlimited')
                                                @else
                                                {{$package->user_count}}
                                                @endif

                                                @lang('superadmin::lang.users')
                                            </li>
                                            <li>
                                                <span class="fas fa-check"></span>
                                                @if($package->product_count == 0)
                                                @lang('superadmin::lang.unlimited')
                                                @else
                                                {{$package->product_count}}
                                                @endif

                                                @lang('superadmin::lang.products')
                                            </li>
                                            <li>
                                                <span class="fas fa-check"></span>
                                                @if($package->invoice_count == 0)
                                                @lang('superadmin::lang.unlimited')
                                                @else
                                                {{$package->invoice_count}}
                                                @endif

                                                @lang('superadmin::lang.invoices')
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