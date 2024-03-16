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
        {!! Form::open(['url' => action([Modules\Website\Http\Controllers\WebsiteScreenshotController::class, 'store']), 'method' => 'post', 'files' => true]) !!}
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
                    {!! Form::label("description_$lang", __('website::lang.description_' . $lang) . ':') !!}
                    {!! Form::textarea("description[$lang]", null, ['class' => 'form-control','id' => "description_$lang"]); !!}
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
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="section_features_image">تحميل الصورة:</label>
                    <div class="file-input file-input-new">
                        <div class="kv-upload-progress hide">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                                    0%
                                </div>
                            </div>
                        </div>
                        <div class="input-group file-caption-main">
                            <div tabindex="500" class="form-control file-caption  kv-fileinput-caption">
                                <div class="file-caption-name"></div>
                            </div>

                            <div class="input-group-btn">
                                <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">إزالة</span></button>
                                <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span></button>

                                <div tabindex="500" class="btn btn-primary btn-file"><i class="glyphicon glyphicon-folder-open"></i>&nbsp; <span class="hidden-xs">تصفح..</span><input accept="image/*" name="image" type="file" id="image"></div>
                            </div>
                        </div>
                    </div>
                    <p class="help-block"><i> سيتم استبدال الصورة السابق (إن وجد)</i></p>
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
        if ($('textarea#description_ar').length > 0) {
            tinymce.init({
                selector: 'textarea#description_ar',
                height: 250
            });
        }

        if ($('textarea#description_en').length > 0) {
            tinymce.init({
                selector: 'textarea#description_en',
                height: 250
            });
        }
    });
</script>
@endsection