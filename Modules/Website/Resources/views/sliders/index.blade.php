@extends('layouts.app')
@section('title', __('website::lang.website'))

@section('content')
    @include('website::layouts.nav')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('website::lang.website_settings')</h1>
        <br>
        @include('layouts.partials.search_settings')
    </section>
    <section class="content">
@endsection