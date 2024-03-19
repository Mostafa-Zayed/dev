@extends('layouts.app')

@section('title', __('accounting::lang.journal_entry'))

@section('content')

@include('accounting::layouts.nav')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>@lang( 'accounting::lang.journal_entry' ) - {{$journal->ref_no}}</h1>
</section>
<section class="content">

{!! Form::open(['url' => action('\Modules\Accounting\Http\Controllers\JournalEntryController@update', $journal->id), 
    'method' => 'PUT', 'id' => 'journal_add_form']) !!}

	@component('components.widget', ['class' => 'box-primary'])

        <div class="row">
            
            <div class="col-sm-3">
				<div class="form-group">
					{!! Form::label('journal_date', __('accounting::lang.journal_date') . ':*') !!}
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</span>
						{!! Form::text('journal_date', @format_datetime($journal->operation_date), ['class' => 'form-control datetimepicker', 'readonly', 'required']); !!}
					</div>
				</div>
			</div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('note', __('lang_v1.additional_notes')) !!}
                    {!! Form::textarea('note', $journal->note, ['class' => 'form-control', 'rows' => 3]); !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

            <table class="table table-bordered table-striped hide-footer" id="journal_table">
                <thead>
                    <tr>
                        <th class="col-md-1">#</th>
                        <th class="col-md-5">@lang( 'accounting::lang.account' )</th>
                        <th class="col-md-3">@lang( 'accounting::lang.debit' )</th>
                        <th class="col-md-3">@lang( 'accounting::lang.credit' )</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 10; $i++)
                        <tr>

                            @php
                                $account_id = '';
                                $debit = '';
                                $credit = '';
                                $default_array = [];
                            @endphp

                            @if(isset($accounts_transactions[$i-1]))
                                @php

                                    $account_id = $accounts_transactions[$i-1]['accounting_account_id'];
                                    $debit = ($accounts_transactions[$i-1]['type'] == 'debit') ? $accounts_transactions[$i-1]['amount'] : '';
                                    $credit = ($accounts_transactions[$i-1]['type'] == 'credit') ? $accounts_transactions[$i-1]['amount'] : '';
                                    $default_array = [$account_id => $accounts_transactions[$i-1]['account']['name']];
                                    

                                @endphp

                                {!! Form::hidden('accounts_transactions_id[' . $i . ']', $accounts_transactions[$i-1]['id']); !!}
                            @endif
                        
                            <td>{{$i}}</td>
                            <td>
                                {!! Form::select('account_id[' . $i . ']', $default_array, $account_id, 
                                            ['class' => 'form-control accounts-dropdown account_id', 
                                            'placeholder' => __('messages.please_select'), 'style' => 'width: 100%;']); !!}
                            </td>

                            <td>
                                {!! Form::text('debit[' . $i . ']', $debit, ['class' => 'form-control input_number debit']); !!}
                            </td>

                            <td>
                                {!! Form::text('credit[' . $i . ']', $credit, ['class' => 'form-control input_number credit']); !!}
                            </td>
                        </tr>
                    @endfor
                </tbody>

                <tfoot>
                    <tr>
                        <th></th>
                        <th class="text-center">@lang( 'accounting::lang.total' )</th>
                        <th><input type="hidden" class="total_debit_hidden"><span class="total_debit"></span></th>
                        <th><input type="hidden" class="total_credit_hidden"><span class="total_credit"></span></th>
                    </tr>
                </tfoot>
            </table>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <button type="button" class="btn btn-primary pull-right btn-flat journal_add_btn">@lang('messages.save')</button>
            </div>
        </div>
        
    @endcomponent

    {!! Form::close() !!}
</section>

@stop

@section('javascript')
@include('accounting::accounting.common_js')
<script type="text/javascript">
    $(document).ready(function(){
        calculate_total();
        
        $('.journal_add_btn').click(function(e){
            //e.preventDefault();
            calculate_total();
            
            var is_valid = true;

            //check if same or not
            if($('.total_credit_hidden').val() != $('.total_debit_hidden').val()){
                is_valid = false;
                alert("@lang('accounting::lang.credit_debit_equal')");
            }

            //check if all account selected or not
            $('table > tbody  > tr').each(function(index, tr) { 
                var credit = __read_number($(tr).find('.credit'));
                var debit = __read_number($(tr).find('.debit'));

                if(credit != 0 || debit != 0){
                    if($(tr).find('.account_id').val() == ''){
                        is_valid = false;
                        alert("@lang('accounting::lang.select_all_accounts')");
                    }
                }
            });

            if(is_valid){
                $('form#journal_add_form').submit();
            }

            return is_valid;
        });

        $('.credit').change(function(){
            if($(this).val() > 0){
                $(this).parents('tr').find('.debit').val('');
            }
            calculate_total();
        });
        $('.debit').change(function(){
            if($(this).val() > 0){
                $(this).parents('tr').find('.credit').val('');
            }
            calculate_total();
        });
	});

    function calculate_total(){
        var total_credit = 0;
        var total_debit = 0;
        $('table > tbody  > tr').each(function(index, tr) { 
            var credit = __read_number($(tr).find('.credit'));
            total_credit += credit;

            var debit = __read_number($(tr).find('.debit'));
            total_debit += debit;
        });

        $('.total_credit_hidden').val(total_credit);
        $('.total_debit_hidden').val(total_debit);

        $('.total_credit').text(__currency_trans_from_en(total_credit));
        $('.total_debit').text(__currency_trans_from_en(total_debit));
    }

</script>
@endsection