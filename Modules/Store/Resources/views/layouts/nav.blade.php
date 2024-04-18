<section class="no-print">
    <nav class="navbar navbar-default bg-white m-4">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{action([\Modules\Store\Http\Controllers\StoreController::class, 'index'])}}"><i class="fab fa-wordpress"></i> {{__('store::lang.store')}}</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @if (auth()->user()->can('store.access_store_api_settings'))
                        <li @if(request()->segment(1) == 'store' && request()->segment(2) == 'settings') class="active" @endif><a href="{{action([\Modules\Store\Http\Controllers\StoreSettingsController::class, 'index'])}}">@lang('store::lang.settings')</a></li>
                    @endif
                    @if (auth()->user()->can('store.access_store_api_settings'))
                        <li @if(request()->segment(1) == 'store' && request()->segment(2) == 'categories') class="active" @endif><a href="{{action([\Modules\Store\Http\Controllers\CategoryController::class, 'index'])}}">@lang('store::lang.categories')</a></li>
                    @endif
                    @if (auth()->user()->can('store.access_store_api_settings'))
                        <li @if(request()->segment(1) == 'store' && request()->segment(2) == 'variations') class="active" @endif><a href="{{action([\Modules\Store\Http\Controllers\VariationController::class, 'index'])}}">@lang('store::lang.variations')</a></li>
                    @endif
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</section>