@extends('layouts.app')
@section('title', __('website::lang.website'))

@section('content')
@include('website::layouts.nav')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>@lang('website::lang.website_settings')</h1>
    <br>
    @include('layouts.partials.search_settings')
</section>
<section class="content">
    {!! Form::open(['url' => action([\Modules\Website\Http\Controllers\WebsiteSettingController::class, 'update']), 'method' => 'post', 'id' => 'website_settings_update',
    'files' => true ]) !!}
    <div class="row">
        <div class="col-xs-12">
            <!--  <pos-tab-container> -->
            <div class="col-xs-12 pos-tab-container">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pos-tab-menu">
                    <div class="list-group">
                        <!-- <a href="#" class="list-group-item text-center active">@lang('website::lang.sliders') @show_tooltip(__('website::tooltip.website_sliders'))</a> -->
                        <a href="#" class="list-group-item text-center active">@lang('website::lang.features') @show_tooltip(__('website::tooltip.website_features'))</a>
                        <a href="#" class="list-group-item text-center">@lang('website::lang.works') @show_tooltip(__('website::tooltip.website_works'))</a>
                        <a href="#" class="list-group-item text-center">@lang('website::lang.screen_shots') @show_tooltip(__('website::tooltip.website_screen_shots'))</a>
                        <a href="#" class="list-group-item text-center">@lang('website::lang.packages') @show_tooltip(__('website::tooltip.website_packages'))</a>
                        <a href="#" class="list-group-item text-center">@lang('website::lang.reviews') @show_tooltip(__('website::tooltip.website_reviews'))</a>
                            <a href="#" class="list-group-item text-center">@lang('website::lang.questions') @show_tooltip(__('website::tooltip.website_questions'))</a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 pos-tab">
                    <!-- tab 1 start -->
                    @include('website::settings.partials.features_settings')
                    @include('website::settings.partials.work_settings')
                    @include('website::settings.partials.screen_shots')
                    @include('website::settings.partials.packages_settings')
                    @include('website::settings.partials.reviews_settings')
                    @include('website::settings.partials.questions_settings')
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-danger pull-right" type="submit">@lang('business.update_settings')</button>
        </div>
    </div>
    {!! Form::close() !!}
</section>
@endsection


@section('javascript')
  @php $asset_v = env('APP_VERSION'); @endphp
  <script src="{{ asset('js/product.js?v=' . $asset_v) }}"></script>
<script type="text/javascript">
    __page_leave_confirmation('#website_settings_update');
    $(document).on('ifToggled', '#use_superadmin_settings', function() {
        if ($('#use_superadmin_settings').is(':checked')) {
            $('#toggle_visibility').addClass('hide');
            $('.test_email_btn').addClass('hide');
        } else {
            $('#toggle_visibility').removeClass('hide');
            $('.test_email_btn').removeClass('hide');
        }
    });
</script>
@endsection