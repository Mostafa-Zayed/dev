<div class="pos-tab-content active">
    <div class="row">
    <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('',__('website::lang.location_address') . ' : *') !!}
                {!! Form::email("location_address",!empty($settings->location_address) ? $settings->location_address : null, ['class' => 'form-control',
                'placeholder' => __('website::lang.location_address')]); !!}
            </div>
        </div>
    location_address
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('',__('website::lang.support_email') . ' : *') !!}
                {!! Form::email("support_email",!empty($settings->support_email) ? $settings->support_email : null, ['class' => 'form-control',
                'placeholder' => __('website::lang.support_email')]); !!}
            </div>
        </div>
        
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('',__('website::lang.sales_email') . ' : *') !!}
                {!! Form::email("sales_email",!empty($settings->sales_email) ? $settings->sales_email : null, ['class' => 'form-control',
                'placeholder' => __('website::lang.sales_email')]); !!}
            </div>
        </div>
    </div>
</div>