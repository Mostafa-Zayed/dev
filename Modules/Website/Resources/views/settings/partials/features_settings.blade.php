<div class="pos-tab-content active">
    <div class="row">
        @foreach (languages() as $lang)
        <div class="col-sm-12">
        
            <div class="form-group">
                {!! Form::label('',__('website::lang.title_' . $lang) . ' : *') !!}
                {!! Form::text("section_features_title[$lang]",!empty($settings) && isset($settings->getTranslations('section_features_title')[$lang]) ?$settings->getTranslations('section_features_title')[$lang] : null, ['class' => 'form-control',
                'placeholder' => __('website::lang.title_' . $lang)]); !!}
            </div>
        </div>
        @endforeach
        @foreach (languages() as $lang)
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label("section_features_description_$lang", __('website::lang.description_' . $lang) . ':') !!}
                {!! Form::textarea("section_features_description[$lang]", !empty($settings) && isset($settings->getTranslations('section_features_description')[$lang]) ? $settings->getTranslations('section_features_description')[$lang] : null, ['class' => 'form-control','id' => "section_features_description_$lang"]); !!}
            </div>
        </div>
        @endforeach
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

                            <div tabindex="500" class="btn btn-primary btn-file"><i class="glyphicon glyphicon-folder-open"></i>&nbsp; <span class="hidden-xs">تصفح..</span><input accept="image/*" name="section_features_image" type="file" id="section_features_image"></div>
                        </div>
                    </div>
                </div>
                <p class="help-block"><i> سيتم استبدال الصورة السابق (إن وجد)</i></p>
            </div>
        </div>
    </div>
</div>