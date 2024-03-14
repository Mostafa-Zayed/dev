@extends('layouts.app')
@section('title', __('website::lang.website'))
@section('content')
@include('website::layouts.nav')
<section class="content-header">
    <h1>@lang('website::lang.add_slider')</h1>
</section>
<section class="content">
    @component('components.widget', ['class' => 'box-solid'])
    <div class="pos-tab-content active">
        {!! Form::open(['url' => action([Modules\Website\Http\Controllers\WebsiteQuestionController::class, 'store']), 'method' => 'post', 'files' => true]) !!}
        <div class="row">
            @foreach (languages() as $lang)
            <div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label('',__('website::lang.title_' . $lang) . ' : *') !!}
                    {!! Form::text("name[$lang]",null, ['class' => 'form-control',
                    'placeholder' => __('website::lang.title_' . $lang)]); !!}
                </div>
            </div>
            @endforeach
            @foreach (languages() as $lang)
            <div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label("answer_$lang", __('website::lang.description_' . $lang) . ':') !!}
                    {!! Form::textarea("answer[$lang]", null, ['class' => 'form-control','id' => "answer_$lang"]); !!}
                </div>
            </div>
            @endforeach
        

           
            <div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label('',__('website::lang.status') . ' : *') !!}
                    {!! Form::select('status', ['1' => __('messages.yes'), '0' => __('messages.no')], null, ['placeholder' => __( 'messages.please_select' ), 'class' => 'form-control']); !!}
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label('',__('website::lang.is_home') . ' : *') !!}
                    {!! Form::select('is_home', ['1' => __('messages.yes'), '0' => __('messages.no')], null, ['placeholder' => __( 'messages.please_select' ), 'class' => 'form-control']); !!}
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label('',__('website::lang.demos') . ' : *') !!}
                    {!! Form::select('website_template_id', $templates, null, ['placeholder' => __( 'messages.please_select' ), 'class' => 'form-control']); !!}
                </div>
            </div>
        </div>
        <input type="submit" value="submit" class="btn btn-primary submit_product_form">
        {!! Form::close() !!}
    </div>
    @endcomponent
</section>
@endsection
@section('javascript')
<script>
    $(document).ready(function() {
        if ($('textarea#answer_ar').length > 0) {
            tinymce.init({
                selector: 'textarea#answer_ar',
                height: 250
            });
        }

        if ($('textarea#answer_en').length > 0) {
            tinymce.init({
                selector: 'textarea#answer_en',
                height: 250
            });
        }
    });
</script>
@endsection