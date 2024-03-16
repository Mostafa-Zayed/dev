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
                    </tr>
                    </thead>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        @endcomponent
    </section>
@endsection

@section('javascript')
<script>
    $(document).ready(function(){
        let lang = "{{app()->getLocale()}}";
        var slidersTable = $('#screen_shots_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/website/screen-shots',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name.' + lang , name: 'name'},
            {data: 'description.' + lang ,name: 'description',render: function(data, type, full, meta){
                return data;
            }},
            {data: 'image', name: 'image', render: function(data, type, full, meta){
                return "<img src=\"" + data + "\" height=\"50\"/>";
            }}
        ]
    });
    });
</script>
@endsection
