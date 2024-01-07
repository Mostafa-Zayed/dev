<div class="pos-tab-content active">
    <div class="row">
        @foreach (languages() as $lang)
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('',__('website::lang.title_' . $lang) . ' : *') !!}
                {!! Form::text("section_packages_title[$lang]",!empty($settings) && isset($settings->getTranslations('section_packages_title')[$lang]) ? $settings->getTranslations('section_packages_title')[$lang] : null, ['class' => 'form-control',
                'placeholder' => __('website::lang.title_' . $lang)]); !!}
            </div>
        </div>
        @endforeach
        @foreach (languages() as $lang)
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label("section_packages_title_$lang", __('website::lang.description_' . $lang) . ':') !!}
                {!! Form::textarea("section_packages_description[$lang]", !empty($settings) && isset($settings->getTranslations('section_packages_description')[$lang]) ? $settings->getTranslations('section_packages_description')[$lang] : null, ['class' => 'form-control','id' => "section_packages_description_$lang"]); !!}
            </div>
        </div>
        @endforeach
    </div>
</div>