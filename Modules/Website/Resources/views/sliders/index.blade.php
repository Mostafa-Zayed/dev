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
        <table class="table table-bordered table-striped" id="sliders_table">
            <thead>
                <tr>
                    <th>@lang( 'website::lang.id' )</th>
                    <th>@lang( 'website::lang.number' )</th>
                    <th>@lang('website::lang.image')</th>
                    <th>@lang('website::lang.title')</th>
                    <th>@lang('website::lang.heading')</th>
                    <th>@lang('website::lang.description')</th>
                    <th>@lang( 'messages.action' )</th>
                </tr>
            </thead>
            <tfoot>

            </tfoot>
        </table>
    </div>
    @endcomponent
    <div class="modal fade slider_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    </div>
</section>
@endsection

@section('javascript')
<script>
    $(document).ready(function() {
        var slidersTable = $('#sliders_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/website/sliders',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'number',
                    name: 'number'
                },
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta) {
                        return "<img src=\"" + data + "\" height=\"50\"/>";
                    }
                },
                {
                    data: 'title_trans',
                    name: 'title_trans'
                },
                {
                    data: 'heading_trans',
                    name: 'heading_trans'
                },
                {
                    data: 'description_trans',
                    name: 'description_trans'
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ]
        });

        // edit
        $(document).on('click', 'button.edit_slider_button', function(event) {
            $('div.slider_modal').load($(this).data('href'), function() {
                $(this).modal('show');
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
            });
        });
    });
</script>
@endsection