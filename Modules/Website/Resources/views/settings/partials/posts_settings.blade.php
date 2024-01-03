<div class="pos-tab-content active">
    <div class="row">
        @foreach (languages() as $lang)
            <div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label('',__('website::lang.title_' . $lang) . ' : *') !!}
                    {!! Form::text("section_questions_title[$lang]",null, ['class' => 'form-control', 'required',
                    'placeholder' => __('website::lang.title_' . $lang)]); !!}
                </div>
            </div>
        @endforeach
        @foreach (languages() as $lang)
            <div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label("section_questions_description_$lang", __('website::lang.description_' . $lang) . ':') !!}
                    {!! Form::textarea("section_questions_description[$lang]", null, ['class' => 'form-control','id' => "section_questions_description_$lang"]); !!}
                </div>
            </div>
        @endforeach
    </div>
</div>