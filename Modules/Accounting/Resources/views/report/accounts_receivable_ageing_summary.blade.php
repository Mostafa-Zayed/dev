@extends('accounting::layouts.app')
@section('title')
    {{ trans_choice('accounting::report.accounts_receivable_ageing_summary', 1) }}
@endsection

@section('css')
    @include('accounting::report.partials.report_css')
@endsection

@section('content')

    @include('accounting::layouts.nav')
    <!-- Content Header (Page header) -->
    @component('accounting::components.section_header')
        @slot('title')
            {{ trans_choice('accounting::general.accounting', 1) }} {{ trans_choice('accounting::lang.report', 2) }}
        @endslot
        @slot('subtitle')
            {{ trans_choice('accounting::report.accounts_receivable_ageing_summary', 1) }}
        @endslot
    @endcomponent

    <!-- Main content -->
    <section class="content no-print" id="vue-app">
        <div class="row">

            @component('accounting::components.box')
                @slot('header')
                    <div class="box-tools">
                        @component('accounting::components.download_action_button', [
                            'url' => Request::url(),
                            'filters' => http_build_query($_GET),
                            ])
                        @endcomponent
                    </div>
                @endslot

                @slot('body')
                    <section class="content">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    {{ trans_choice('accounting::report.accounts_receivable_ageing_summary', 1) }}
                                    @if (!empty($start_date))
                                        {{ trans('accounting::lang.for_period') }}: <b>{{ readable_date($start_date) }}
                                            {{ trans('accounting::lang.to') }}
                                            {{ readable_date($end_date) }}</b>
                                    @endif
                                </h4>
                            </div>
                            <div class="card-body">
                                <form method="get" action="{{ Request::url() }}" class="___class_+?23___">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label"
                                                    for="location_id">{{ trans_choice('accounting::lang.business_location', 1) }}</label>
                                                <select class="form-control select2" name="location_id" id="location_id" required>
                                                    <option value="" disabled selected>{{ trans_choice('accounting::lang.select', 1) }}</option>
                                                    @foreach ($business_locations as $key)
                                                        <option value="{{ $key->id }}" @if ($location_id == $key->id) selected @endif>
                                                            {{ $key->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label"
                                                    for="start_date">{{ trans_choice('accounting::lang.start_date', 1) }}</label>
                                                <input type="text" value="{{ $start_date }}"
                                                    class="form-control datepicker @error('start_date') is-invalid @enderror" name="start_date"
                                                    id="start_date" required>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label"
                                                    for="end_date">{{ trans_choice('accounting::lang.end_date', 1) }}</label>
                                                <input type="text" value="{{ $end_date }}"
                                                    class="form-control datepicker @error('end_date') is-invalid @enderror" name="end_date"
                                                    id="end_date" required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 float-right filter-btn-row">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn bg-olive btn-flat">{{ trans_choice('accounting::lang.submit', 1) }}
                                                </button>
                                            </span>
                                            <span class="input-group-btn">
                                                <a href="{{ Request::url() }}"
                                                    class="btn btn-danger btn-flat pull-right">{{ trans_choice('accounting::lang.clear', 1) }}!</a>
                                            </span>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- /.box-body -->

                        </div>

                    </section>
                @endslot
            @endcomponent

            @component('accounting::components.box')
                @slot('body')
                    <h3 class="text-center">{{ trans_choice('accounting::report.accounts_receivable_ageing_summary', 1) }}</h3>
                    @component('accounting::components.tree_view_table')
                        <thead>
                            <th>{{ trans_choice('accounting::lang.account', 1) }}</th>
                            <th style="text-align: right">{{ trans('accounting::lang.current') }}</th>
                            <th style="text-align: right">{{ trans('accounting::general.one_to_thirty') }}</th>
                            <th style="text-align: right">{{ trans('accounting::general.thirty_one_to_sixty') }}</th>
                            <th style="text-align: right">{{ trans('accounting::general.sixty_one_to_ninety') }}</th>
                            <th style="text-align: right">{{ trans('accounting::general.ninety_one_and_over') }}</th>
                            <th style="text-align: right">{{ trans_choice('accounting::lang.amount', 1) }}</th>
                        </thead>
                        <tbody>
                            @foreach ($chart_of_accounts as $chart_of_account_name => $chart_of_account_id)
                                @php
                                    $chart_of_account = $data->where('chart_of_account_id', $chart_of_account_id);
                                @endphp
                                <tr>
                                    <td>{{ $chart_of_account_name }}</td>
                                    <td style="text-align: right">
                                        {{ $chart_of_account->where('transaction_date', $days_past->today)->sum('amount_due') }}</td>
                                    <td style="text-align: right">
                                        {{ $chart_of_account->whereBetween('transaction_date', [$days_past->thirty_days_ago, $days_past->yesterday])->sum('amount_due') }}
                                    </td>
                                    <td style="text-align: right">
                                        {{ $chart_of_account->whereBetween('transaction_date', [$days_past->sixty_days_ago, $days_past->thirty_one_days_ago])->sum('amount_due') }}
                                    </td>
                                    <td style="text-align: right">
                                        {{ $chart_of_account->whereBetween('transaction_date', [$days_past->ninety_days_ago, $days_past->sixty_one_days_ago])->sum('amount_due') }}
                                    </td>
                                    <td style="text-align: right">
                                        {{ $chart_of_account->where('transaction_date', '<=', $days_past->ninety_one_days_ago)->sum('amount_due') }}
                                    </td>
                                    <td style="text-align: right; font-weight: bold">{{ $chart_of_account->sum('amount_due') }}</td>
                                </tr>
                            @endforeach
                            <tr class="bg-grand-total" style="font-weight: bold">
                                <td>{{ trans('accounting::lang.total') }}</td>
                                <td style="text-align: right">{{ $data->where('transaction_date', $days_past->today)->sum('amount_due') }}</td>
                                <td style="text-align: right">
                                    {{ $data->whereBetween('transaction_date', [$days_past->thirty_days_ago, $days_past->yesterday])->sum('amount_due') }}
                                </td>
                                <td style="text-align: right">
                                    {{ $data->whereBetween('transaction_date', [$days_past->sixty_days_ago, $days_past->thirty_one_days_ago])->sum('amount_due') }}
                                </td>
                                <td style="text-align: right">
                                    {{ $data->whereBetween('transaction_date', [$days_past->ninety_days_ago, $days_past->sixty_one_days_ago])->sum('amount_due') }}
                                </td>
                                <td style="text-align: right">
                                    {{ $data->where('transaction_date', '<=', $days_past->ninety_one_days_ago)->sum('amount_due') }}</td>
                                <td style="text-align: right">{{ $data->sum('amount_due') }}</td>
                            </tr>
                        </tbody>
                    @endcomponent
                @endslot
            @endcomponent

        </div>
    </section>
@stop

@section('javascript')
    @include('accounting::report.partials.report_js')
@endsection
