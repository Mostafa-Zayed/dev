<div class="modal-dialog" role="document">
    <div class="modal-content">
        {!! Form::open(['url' => action([\Modules\Website\Http\Controllers\WebsiteQuestionController::class,'update'],[$id]), 'method' => 'post', 'id' => 'work_question_form','files' => true ]) !!}
        @method('PUT')
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">@lang( 'messages.edit' )</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                @foreach (languages() as $lang)
                <div class="col-sm-12">
                    <div class="form-group">
                        {!! Form::label('',__('website::lang.title_' . $lang) . ' : *') !!}
                        {!! Form::text("name[$lang]",$question->getTranslations('name')[$lang], ['class' => 'form-control',
                        'placeholder' => __('website::lang.title_' . $lang)]); !!}
                    </div>
                </div>
                @endforeach
                @foreach (languages() as $lang)
                <div class="col-sm-12">
                    <div class="form-group">
                        {!! Form::label("answer_$lang", __('website::lang.description_' . $lang) . ':') !!}
                        {!! Form::textarea("answer[$lang]", $question->getTranslations('answer')[$lang], ['class' => 'form-control','id' => "answer_$lang"]); !!}
                    </div>
                </div>
                @endforeach
                <div class="col-sm-12">
                    <div class="form-group">
                        {!! Form::label('',__('website::lang.status') . ' : *') !!}
                        {!! Form::select('status', ['1' => __('messages.yes'), '0' => __('messages.no')], $question->status, ['placeholder' => __( 'messages.please_select' ), 'class' => 'form-control']); !!}
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        {!! Form::label('',__('website::lang.is_home') . ' : *') !!}
                        {!! Form::select('is_home', ['1' => __('messages.yes'), '0' => __('messages.no')], $question->is_home, ['placeholder' => __( 'messages.please_select' ), 'class' => 'form-control']); !!}
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        {!! Form::label('',__('website::lang.demos') . ' : *') !!}
                        {!! Form::select('website_template_id', $templates, $question->website_template_id, ['placeholder' => __( 'messages.please_select' ), 'class' => 'form-control']); !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">@lang( 'messages.update' )</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
        </div>
        {!! Form::close() !!}
    </div>
</div>