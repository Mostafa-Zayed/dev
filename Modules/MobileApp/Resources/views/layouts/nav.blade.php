<section class="no-print">
    <style type="text/css">
        #contacts_login_dropdown::after {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent;
        }
    </style>
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
                <a class="navbar-brand" href="{{action([\Modules\MobileApp\Http\Controllers\MobileAppController::class, 'index'])}}"><i class="fas fa fa-broadcast-tower"></i> {{__('mobileapp::lang.mobileapp')}}</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li @if(request()->segment(2) == 'settings') class="active" @endif>
                        <a href="{{action([\Modules\MobileApp\Http\Controllers\MobileAppController::class, 'settings'])}}">
                            @lang('business.settings')
                        </a>
                    </li>
                    <li @if(request()->segment(2) == 'splash-screens') class="active" @endif>
                        <a href="{{action([\Modules\MobileApp\Http\Controllers\SplashScreenController::class, 'index'])}}">
                            @lang('mobileapp::lang.splash_screens')
                        </a>
                    </li>
                    <li @if(request()->segment(2) == 'sliders') class="active" @endif>
                        <a href="{{action([\Modules\Website\Http\Controllers\WebsiteSliderController::class, 'index'])}}">
                            @lang('website::lang.sliders')
                        </a>
                    </li>
                        <li @if(request()->segment(2) == 'features') class="active" @endif>
                            <a href="{{action([\Modules\Website\Http\Controllers\WebsiteFeatureController::class, 'index'])}}">
                                @lang('website::lang.features')
                            </a>
                        </li>
                        <li @if(request()->segment(2) == 'works') class="active" @endif>
                            <a href="{{action([\Modules\Website\Http\Controllers\WebsiteWorkController::class, 'index'])}}">
                                @lang('website::lang.works')
                            </a>
                        </li>
                        <li @if(request()->segment(2) == 'screen-shots') class="active" @endif>
                            <a href="{{action([\Modules\Website\Http\Controllers\WebsiteScreenshotController::class, 'index'])}}">
                                @lang('website::lang.screen_shots')
                            </a>
                        </li>
                        <li @if(request()->segment(2) == 'reviews') class="active" @endif>
                            <a href="{{action([\Modules\Website\Http\Controllers\WebsiteReviewController::class, 'index'])}}">
                                @lang('website::lang.reviews')
                            </a>
                        </li>
                        <li @if(request()->segment(2) == 'partners') class="active" @endif>
                            <a href="{{action([\Modules\Website\Http\Controllers\WebsitePartnerController::class, 'index'])}}">
                                @lang('website::lang.partners')
                            </a>
                        </li>
                        <li @if(request()->segment(2) == 'questions') class="active" @endif>
                            <a href="{{action([\Modules\Website\Http\Controllers\WebsiteQuestionController::class, 'index'])}}">
                                @lang('website::lang.questions')
                            </a>
                        </li>
                        <li @if(request()->segment(2) == 'posts') class="active" @endif>
                            <a href="{{action([\Modules\Website\Http\Controllers\WebsitePostController::class, 'index'])}}">
                                @lang('website::lang.posts')
                            </a>
                        </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</section>