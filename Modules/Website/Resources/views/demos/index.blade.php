@extends('layouts.app')
@section('title', __('website::lang.website'))
@section('content')
@include('website::layouts.nav')
<section class="content">
    @component('components.widget', ['class' => 'box-solid'])
    @can("manufacturing.add_recipe")
    @slot('tool')
    <div class="box-tools">
        <a class="btn btn-block btn-primary" href="{{route('demos.create')}}"><i class="fa fa-plus"></i> @lang( 'messages.add' )</a>
    </div>
    @endslot
    @endcan
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="demos_table">
            <thead>
                <tr>
                    <th>@lang( 'website::lang.id' )</th>
                    <th>@lang( 'website::lang.number' )</th>
                    <th>@lang('website::lang.title')</th>
                    <th>@lang('website::lang.status')</th>
                    <th>@lang( 'messages.action' )</th>
                </tr>
            </thead>
            <tfoot>

            </tfoot>
        </table>
    </div>
    @endcomponent
    <div class="modal fade template_modal" tabindex="-1" role="dialog" 
    	aria-labelledby="gridSystemModalLabel">
    </div>
</section>
@endsection

@section('javascript')
<script>
    $(document).ready(function() {
        let lang = "{{app()->getLocale()}}";
        var slidersTable = $('#demos_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/website/demos',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'number',
                    name: 'number'
                },
                {
                    data: 'name.' + lang,
                    name: 'name'
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
        $(document).on('click','button.edit_category_button',function(event){
            $('div.template_modal').load($(this).data('href'),function(){
                $(this).modal('show');
            });
        });
    });
</script>
@endsection