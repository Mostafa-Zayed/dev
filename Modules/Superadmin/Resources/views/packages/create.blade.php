@extends('layouts.app')
@section('title', __('superadmin::lang.superadmin') . ' | ' . __('superadmin::lang.packages'))

@section('content')
@include('superadmin::layouts.nav')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>@lang('superadmin::lang.packages') <small>@lang('superadmin::lang.add_package')</small></h1>
	<!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol> -->
</section>

<!-- Main content -->
<section class="content">

	<!-- Page level currency setting -->
	<input type="hidden" id="p_code" value="{{$currency->code}}">
	<input type="hidden" id="p_symbol" value="{{$currency->symbol}}">
	<input type="hidden" id="p_thousand" value="{{$currency->thousand_separator}}">
	<input type="hidden" id="p_decimal" value="{{$currency->decimal_separator}}">

	{!! Form::open(['url' => action([\Modules\Superadmin\Http\Controllers\PackagesController::class, 'store']), 'method' => 'post', 'id' => 'add_package_form','files' => true]) !!}

	<div class="box box-solid">
		<div class="box-body">
			<div class="row">
				@foreach (languages() as $lang)
				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label("name[$lang]", __('lang_v1.name_'.$lang).':') !!}
						{!! Form::text("name[$lang]", null, ['class' => 'form-control', 'required']); !!}
					</div>
				</div>
				@endforeach

				@foreach (languages() as $lang)
				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label("description[$lang]", __('superadmin::lang.description_'.$lang).':') !!}
						{!! Form::text("description[$lang]", null, ['class' => 'form-control', 'required']); !!}
					</div>
				</div>
				@endforeach
				<div class="clearfix"></div>
				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('location_count', __('superadmin::lang.location_count').':') !!}
						{!! Form::number('location_count', null, ['class' => 'form-control', 'required', 'min' => 0]); !!}

						<span class="help-block">
							@lang('superadmin::lang.infinite_help')
						</span>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('user_count', __('superadmin::lang.user_count').':') !!}
						{!! Form::number('user_count', null, ['class' => 'form-control', 'required', 'min' => 0]); !!}

						<span class="help-block">
							@lang('superadmin::lang.infinite_help')
						</span>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('product_count', __('superadmin::lang.product_count').':') !!}
						{!! Form::number('product_count', null, ['class' => 'form-control', 'required', 'min' => 0]); !!}

						<span class="help-block">
							@lang('superadmin::lang.infinite_help')
						</span>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('invoice_count', __('superadmin::lang.invoice_count').':') !!}
						{!! Form::number('invoice_count', null, ['class' => 'form-control', 'required', 'min' => 0]); !!}

						<span class="help-block">
							@lang('superadmin::lang.infinite_help')
						</span>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('interval', __('superadmin::lang.interval').':') !!}

						{!! Form::select('interval', $intervals, null, ['class' => 'form-control select2', 'placeholder' => __('messages.please_select'), 'required']); !!}
					</div>
				</div>

				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('interval_count ', __('superadmin::lang.interval_count').':') !!}
						{!! Form::number('interval_count', null, ['class' => 'form-control', 'required', 'min' => 1]); !!}
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('trial_days ', __('superadmin::lang.trial_days').':') !!}
						{!! Form::number('trial_days', null, ['class' => 'form-control', 'required', 'min' => 0]); !!}
					</div>
				</div>

				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('price', __('superadmin::lang.price').':') !!}
						@show_tooltip(__('superadmin::lang.tooltip_pkg_price'))

						<div class="input-group">
							<span class="input-group-addon" id="basic-addon3"><b>{{$currency->code}} {{$currency->symbol}}</b></span>
							{!! Form::text('price', null, ['class' => 'form-control input_number', 'required']); !!}
						</div>
						<span class="help-block">
							0 = @lang('superadmin::lang.free_package')
						</span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-12">
					<div class="form-group">
						{!! Form::label('image', __('superadmin::lang.package_image') . ':') !!}
						{!! Form::file('image', ['id' => 'upload_image', 'accept' => 'image/*',
						'required' => true, 'class' => 'upload-element']); !!}
						<small>
							<p class="help-block">@lang('purchase.max_file_size', ['size' => (config('constants.document_size_limit') / 1000000)]) <br> @lang('lang_v1.aspect_ratio_should_be_1_1')</p>
						</small>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('sort_order ', __('superadmin::lang.sort_order').':') !!}
						{!! Form::number('sort_order', 1, ['class' => 'form-control', 'required']); !!}
					</div>
				</div>

				<div class="clearfix"></div>
				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							{!! Form::checkbox('is_private', 1, false, ['class' => 'input-icheck']); !!}
							{{__('superadmin::lang.private_superadmin_only')}}
						</label>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							{!! Form::checkbox('is_one_time', 1, false, ['class' => 'input-icheck']); !!}
							{{__('superadmin::lang.one_time_only_subscription')}}
						</label>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-4">
					<div class="checkbox">
						<label>
							{!! Form::checkbox('enable_custom_link', 1, false, ['class' => 'input-icheck', 'id' => 'enable_custom_link']); !!}
							{{__('superadmin::lang.enable_custom_subscription_link')}}
						</label>
					</div>
				</div>
				<div id="custom_link_div" class="hide">
					<div class="col-sm-4">
						<div class="form-group">
							{!! Form::label('custom_link', __('superadmin::lang.custom_link').':') !!}
							{!! Form::text('custom_link', null, ['class' => 'form-control']); !!}
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							{!! Form::label('custom_link_text', __('superadmin::lang.custom_link_text').':') !!}
							{!! Form::text('custom_link_text', null, ['class' => 'form-control']); !!}
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				@foreach($permissions as $module => $module_permissions)
				@foreach($module_permissions as $permission)
				<div class="col-sm-3">
					@if(isset($permission['field_type']) && in_array($permission['field_type'], ['number', 'input']))
					<div class="form-group">
						{!! Form::label("custom_permissions[$permission[name]]", $permission['label'].':') !!}
						@if(isset($permission['tooltip']))
						@show_tooltip($permission['tooltip'])
						@endif

						{!! Form::text("custom_permissions[$permission[name]]", null, ['class' => 'form-control', 'type' => $permission['field_type']]); !!}
					</div>
					@else
					<div class="checkbox">
						<label>
							{!! Form::checkbox("custom_permissions[$permission[name]]", 1, $permission['default'], ['class' => 'input-icheck']); !!}
							{{$permission['label']}}
						</label>
					</div>
					@endif
				</div>
				@endforeach
				@endforeach

				<div class="col-sm-3">
					<div class="checkbox">
						<label>
							{!! Form::checkbox('is_active', 1, true, ['class' => 'input-icheck']); !!}
							{{__('superadmin::lang.is_active')}}
						</label>
					</div>
				</div>
				<div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label('',__('website::lang.is_home') . ' : *') !!}
                    {!! Form::select('show_home', ['1' => __('messages.yes'), '0' => __('messages.no')], null, ['placeholder' => __( 'messages.please_select' ), 'class' => 'form-control']); !!}
                </div>
            </div>

			</div>

			<div class="row">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-primary pull-right btn-flat">@lang('messages.save')</button>
				</div>
			</div>

		</div>
	</div>

	{!! Form::close() !!}
</section>

@endsection

@section('javascript')
<script type="text/javascript">
	$(document).ready(function() {
		$('form#add_package_form').validate();
	});

	$('#enable_custom_link').on('ifChecked', function(event) {
		$("div#custom_link_div").removeClass('hide');
	});
	$('#enable_custom_link').on('ifUnchecked', function(event) {
		$("div#custom_link_div").addClass('hide');
	});

	if ($('textarea#description_ar').length > 0) {
		tinymce.init({
			selector: 'textarea#description_ar',
			height: 250
		});
	}

	if ($('textarea#description_en').length > 0) {
		tinymce.init({
			selector: 'textarea#description_en',
			height: 250
		});
	}

	var img_fileinput_setting = {
        showUpload: false,
        showPreview: true,
        browseLabel: LANG.file_browse_label,
        removeLabel: LANG.remove,
        previewSettings: {
            image: { width: 'auto', height: 'auto', 'max-width': '100%', 'max-height': '100%' },
        },
    };
    $('#upload_image').fileinput(img_fileinput_setting);
</script>
@endsection