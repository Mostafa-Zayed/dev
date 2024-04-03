@extends('layouts.app')
@section('title', __('website::lang.website'))
@section('content')
@include('website::layouts.nav')
<section class="content">
    @component('components.widget', ['class' => 'box-solid'])
    @can("manufacturing.add_recipe")
    @slot('tool')
    <div class="box-tools">
        <a class="btn btn-block btn-primary" href="{{route('partners.create')}}"><i class="fa fa-plus"></i> @lang( 'messages.add' )</a>
    </div>
    @endslot
    @endcan
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="partners_table">
            <thead>
                <tr>
                    <th>@lang( 'website::lang.id' )</th>
                    <th>@lang( 'website::lang.image' )</th>
                    <th>@lang('website::lang.external_link')</th>
                    <th>@lang( 'messages.action' )</th>
                </tr>
            </thead>
            <tfoot>

            </tfoot>
        </table>
    </div>
    @endcomponent
    <div class="modal fade partner_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    </div>
</section>
@endsection

@section('javascript')
<script>
    $(document).ready(function() {
        var slidersTable = $('#partners_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/website/partners',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta) {
                        return "<img src=\"" + data + "\" height=\"50\"/>";
                    }
                },
                {
                    data: 'link',
                    name: 'link'
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ]
        });

        // edit
        $(document).on('click', 'button.edit_partner_button', function(event) {
            $('div.partner_modal').load($(this).data('href'), function() {
                $(this).modal('show');
                

               
            });
        });

        

        
    });
</script>
@endsection