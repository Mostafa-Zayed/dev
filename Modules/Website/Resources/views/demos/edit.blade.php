<div class="modal-dialog" role="document">
    <div class="modal-content">
        {!! Form::open(['url' => action([\Modules\Website\Http\Controllers\WebsiteDemoController::class,'update'],[$id]), 'method' => 'post', 'id' => 'template_add_form' ]) !!}
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">@lang( 'messages.edit' )</h4>
        </div>
        <div class="modal-body">
            @foreach (languages() as $lang)
            <div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label('',__('website::lang.title_' . $lang) . ' : *') !!}
                    {!! Form::text("name[$lang]",$template->getTranslations('name')[$lang], ['class' => 'form-control',
                    'placeholder' => __('website::lang.title_' . $lang)]); !!}
                </div>
            </div>
            @endforeach
            <div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label('',__('website::lang.number') . ' : *') !!}
                    {!! Form::select('number', $numbers, null, ['placeholder' => __( 'messages.please_select' ), 'class' => 'form-control']); !!}
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label('',__('website::lang.status') . ' : *') !!}
                    {!! Form::select('status', ['1' => __('messages.yes'), '0' => __('messages.no')], 1, ['placeholder' => __( 'messages.please_select' ), 'class' => 'form-control']); !!}
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

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">@lang( 'messages.save' )</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
        </div>

        {!! Form::close() !!}
    </div>
</div>