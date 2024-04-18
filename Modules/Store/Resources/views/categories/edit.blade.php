<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">

    {!! Form::open(['url' => action([\App\Http\Controllers\TaxonomyController::class, 'update'], [$category->id]), 'method' => 'PUT', 'id' => 'category_edit_form' ]) !!}

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">@lang( 'messages.edit' )</h4>
    </div>

    <div class="modal-body">
      @php
      $name_label = !empty($module_category_data['taxonomy_label']) ? $module_category_data['taxonomy_label'] : __( 'category.category_name' );
      $cat_code_enabled = isset($module_category_data['enable_taxonomy_code']) && !$module_category_data['enable_taxonomy_code'] ? false : true;

      $cat_code_label = !empty($module_category_data['taxonomy_code_label']) ? $module_category_data['taxonomy_code_label'] : __( 'category.code' );

      $enable_sub_category = isset($module_category_data['enable_sub_taxonomy']) && !$module_category_data['enable_sub_taxonomy'] ? false : true;

      $category_code_help_text = !empty($module_category_data['taxonomy_code_help_text']) ? $module_category_data['taxonomy_code_help_text'] : __('lang_v1.category_code_help');
      @endphp
      <div class="row">
        <div class="col-xs-12">
          <!--  <pos-tab-container> -->
          <div class="col-xs-12 pos-tab-container">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pos-tab-menu">
              <div class="list-group">
                <a href="#one" class="list-group-item text-center active">@lang('woocommerce::lang.instructions')</a>
                <a href="#two" class="list-group-item text-center">@lang('woocommerce::lang.api_settings')</a>
                <a href="#" class="list-group-item text-center">@lang('woocommerce::lang.product_sync_settings')</a>
                <a href="#" class="list-group-item text-center">@lang('woocommerce::lang.order_sync_settings')</a>
                <a href="#" class="list-group-item text-center">@lang('woocommerce::lang.webhook_settings')</a>
              </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 pos-tab">
              @include('store::settings.partials.instructions')
              @include('store::settings.partials.testing')
            </div>
          </div>

          <div class="col-xs-12">

          </div>
          <!--  </pos-tab-container> -->
        </div>
      </div>
    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">@lang( 'messages.update' )</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
    </div>

    {!! Form::close() !!}

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->