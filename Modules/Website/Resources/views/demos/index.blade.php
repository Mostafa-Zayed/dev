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
        var slidersTable = $('#demos_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/website/demos',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'number', name: 'number'},
            {data: 'name.' + lang , name: 'name'},
        ]
    });
    });
</script>
@endsection
