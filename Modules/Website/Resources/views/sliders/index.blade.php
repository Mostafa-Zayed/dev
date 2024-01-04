@extends('layouts.app')
@section('title', __('website::lang.website'))
@section('content')
    @include('website::layouts.nav')
    <section class="content">
        @component('components.widget', ['class' => 'box-solid'])
            @can("manufacturing.add_recipe")
                @slot('tool')
                    <div class="box-tools">
                        <a class="btn btn-block btn-primary" href="{{route('sliders.create')}}"><i class="fa fa-plus"></i> @lang( 'messages.add' )</a>
                    </div>
                @endslot
            @endcan
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="recipe_table">
                    <thead>
                    <tr>
                        <th><input type="checkbox" id="select-all-row" data-table-id="recipe_table"></th>
                        <th>@lang( 'manufacturing::lang.recipe' )</th>
                        <th>@lang( 'product.category' )</th>
                        <th>@lang( 'product.sub_category' )</th>
                        <th>@lang( 'lang_v1.quantity' )</th>
                        <th>@lang( 'lang_v1.price' ) @show_tooltip(__('manufacturing::lang.price_updated_live'))</th>
                        <th>@lang( 'sale.unit_price' )</th>
                        <th>@lang( 'messages.action' )</th>
                    </tr>
                    </thead>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        @endcomponent
    </section>
@endsection
