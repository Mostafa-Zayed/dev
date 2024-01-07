<div class="pos-tab-content active">
    <div class="row">
        @foreach (languages() as $lang)
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('',__('website::lang.title_' . $lang) . ' : *') !!}
                {!! Form::text("section_screenshot_title[$lang]",isset($settings->getTranslations('section_screenshot_title')[$lang]) ? $settings->getTranslations('section_screenshot_title')[$lang] : null, ['class' => 'form-control',
                'placeholder' => __('website::lang.title_' . $lang)]); !!}
            </div>
        </div>
        @endforeach
        @foreach (languages() as $lang)
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label("section_screenshot_description_$lang", __('website::lang.description_' . $lang) . ':') !!}
                {!! Form::textarea("section_screenshot_description[$lang]", isset($settings->getTranslations('section_screenshot_description')[$lang]) ? $settings->getTranslations('section_screenshot_description')[$lang] : null, ['class' => 'form-control','id' => "section_screenshot_description_$lang"]); !!}
            </div>
        </div>
        @endforeach
    </div>
</div>