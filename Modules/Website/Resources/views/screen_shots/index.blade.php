@extends('layouts.app')
@section('title', __('website::lang.website'))
@section('content')
@include('website::layouts.nav')
<section class="content">
    @component('components.widget', ['class' => 'box-solid'])
    @can("manufacturing.add_recipe")
    @slot('tool')
    <div class="box-tools">
        <a class="btn btn-block btn-primary" href="{{route('screen-shots.create')}}"><i class="fa fa-plus"></i> @lang( 'messages.add' )</a>
    </div>
    @endslot
    @endcan
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="screen_shots_table">
            <thead>
                <tr>

                    <th>@lang( 'website::lang.id' )</th>
                    <th>@lang( 'website::lang.title' )</th>
                    <th>@lang('website::lang.description')</th>
                    <th>@lang('website::lang.image')</th>
                    <th>@lang('website::lang.status')</th>
                    <th>@lang( 'messages.action' )</th>
                </tr>
            </thead>
            <tfoot>

            </tfoot>
        </table>
    </div>
    @endcomponent
    <div class="modal fade screen_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    </div>
</section>
@endsection

@section('javascript')
<script>
    $(document).ready(function() {
        let lang = "{{app()->getLocale()}}";
        let screenShotsTable = $('#screen_shots_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/website/screen-shots',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name.' + lang,
                    name: 'name'
                },
                {
                    data: 'description.' + lang,
                    name: 'description',
                    render: function(data, type, full, meta) {
                        return data;
                    }
                },
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta) {
                        return "<img src=\"" + data + "\" height=\"50\"/>";
                    }
                },
                {
                    data: 'status',
                    name: 'status',
                    render: function(data, type, full, meta) {
                        if (data == 1) {
                            return "<button class='btn btn-success'>{{ __('website::lang.status') }}</button>";
                        } else {
                            return "<button class='btn btn-xs btn-danger'>{{ __('website::lang.status')}} </button>";
                        }
                    }
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ]
        });

        // edit
        $(document).on('click', 'button.edit_screen_button', function(event) {
            $('div.screen_modal').load($(this).data('href'), function() {
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
</script>
@endsection