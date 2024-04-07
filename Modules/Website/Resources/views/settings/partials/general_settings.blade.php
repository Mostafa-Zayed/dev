<div class="pos-tab-content active">
    <div class="row">
        @foreach (languages() as $lang)
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('',__('website::lang.location_address_' . $lang) . ' : *') !!}
                {!! Form::text("location_address[$lang]",!empty($settings) && isset($settings->getTranslations('location_address')[$lang]) ? $settings->getTranslations('location_address')[$lang] : null, ['class' => 'form-control',
                'placeholder' => __('website::lang.location_address_' . $lang)]); !!}
            </div>
        </div>
        @endforeach
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('',__('website::lang.support_email') . ' : *') !!}
                {!! Form::text("support_email",!empty($settings->support_email) ? $settings->support_email : null, ['class' => 'form-control',
                'placeholder' => __('website::lang.support_email')]); !!}
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('',__('website::lang.sales_email') . ' : *') !!}
                {!! Form::text("sales_email",!empty($settings->sales_email) ? $settings->sales_email : null, ['class' => 'form-control',
                'placeholder' => __('website::lang.sales_email')]); !!}
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('',__('website::lang.facebook_link') . ' : *') !!}
                {!! Form::url("facebook_link",!empty($settings->facebook_link) ? $settings->facebook_link : null, ['class' => 'form-control',
                'placeholder' => __('website::lang.facebook_link')]); !!}
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('',__('website::lang.twitter_link') . ' : *') !!}
                {!! Form::url("twitter_link",!empty($settings->twitter_link) ? $settings->twitter_link : null, ['class' => 'form-control',
                'placeholder' => __('website::lang.twitter_link')]); !!}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('',__('website::lang.instagram_link') . ' : *') !!}
                {!! Form::url("instagram_link",!empty($settings->instagram_link) ? $settings->instagram_link : null, ['class' => 'form-control',
                'placeholder' => __('website::lang.instagram_link')]); !!}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('',__('website::lang.pinterest_link') . ' : *') !!}
                {!! Form::url("pinterest_link",!empty($settings->pinterest_link) ? $settings->pinterest_link : null, ['class' => 'form-control',
                'placeholder' => __('website::lang.pinterest_link')]); !!}
            </div>
        </div>
        '',
    </div>
</div>