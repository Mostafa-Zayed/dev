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
                {!! Form::open(['url' => action([Modules\Website\Http\Controllers\WebsiteSliderController::class, 'store']), 'method' => 'post' ]) !!}
                <div class="row">
                    @foreach (languages() as $lang)
                        <div class="col-sm-12">
                            <div class="form-group">
                                {!! Form::label('',__('website::lang.slider_heading_' . $lang) . ' : *') !!}
                                {!! Form::text("heading[$lang]",null, ['class' => 'form-control',
                                'placeholder' => __('website::lang.slider_heading_' . $lang)]); !!}
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
                    @foreach (languages() as $lang)
                        <div class="col-sm-12">
                            <div class="form-group">
                                {!! Form::label('',__('website::lang.title_' . $lang) . ' : *') !!}
                                {!! Form::text("title[$lang]",null, ['class' => 'form-control',
                                'placeholder' => __('website::lang.slider_heading_' . $lang)]); !!}
                            </div>
                        </div>
                    @endforeach
                    <div class="col-sm-12">
                            <div class="form-group">
                                {!! Form::label('',__('website::lang.google_play_link') . ' : *') !!}
                                {!! Form::text('google_play_link',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                    <div class="col-sm-12">
                            <div class="form-group">
                                {!! Form::label('',__('website::lang.app_store_link') . ' : *') !!}
                                {!! Form::text('app_store_link',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                    <div class="col-sm-12">
                            <div class="form-group">
                                {!! Form::label('',__('website::lang.external_link') . ' : *') !!}
                                {!! Form::text('external_link',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                    <div class="col-sm-12">
                            <div class="form-group">
                                {!! Form::label('',__('website::lang.video_link') . ' : *') !!}
                                {!! Form::text('video_link',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                    <div class="col-sm-12">
                            <div class="form-group">
                                {!! Form::label('',__('website::lang.status') . ' : *') !!}
                                {!! Form::select('status', ['1' => __('messages.yes'), '0' => __('messages.no')], null, ['placeholder' => __( 'messages.please_select' ), 'required', 'class' => 'form-control']); !!}
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
    <script src="{{ asset('js/product.js')}}"></script>
@endsection
