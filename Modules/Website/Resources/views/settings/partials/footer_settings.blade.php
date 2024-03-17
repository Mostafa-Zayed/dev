<div class="pos-tab-content active">
    <div class="row">

        @foreach (languages() as $lang)
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label("newsletter_description_$lang", __('website::lang.newsletter_description_' . $lang) . ':') !!}
                {!! Form::textarea("newsletter_description[$lang]", !empty($settings) && isset($settings->getTranslations('newsletter_description')[$lang]) ? $settings->getTranslations('newsletter_description')[$lang] : null, ['class' => 'form-control','id' => "newsletter_description_$lang"]); !!}
            </div>
        </div>
        @endforeach
        @foreach (languages() as $lang)
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label("footer_description_$lang", __('website::lang.footer_description_' . $lang) . ':') !!}
                {!! Form::textarea("footer_description[$lang]", !empty($settings) && isset($settings->getTranslations('footer_description')[$lang]) ? $settings->getTranslations('footer_description')[$lang] : null, ['class' => 'form-control','id' => "footer_description_$lang"]); !!}
            </div>
        </div>
        @endforeach
    </div>
</div>