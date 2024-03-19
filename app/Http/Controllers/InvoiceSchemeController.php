<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceScheme\SetDefault;
use App\Http\Requests\InvoiceScheme\Store;
use App\InvoiceLayout;
use App\InvoiceScheme;
use Datatables;
use Illuminate\Http\Request;
use App\Services\InvoiceSchemeService;
use App\Traits\LogException;

class InvoiceSchemeController extends Controller
{
    use LogException;
    protected $invoiceSchemeService;

    public function __construct(InvoiceSchemeService $invoiceSchemeService)
    {
        $this->invoiceSchemeService = $invoiceSchemeService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isHasPermission(['invoice_settings.access'])) {
            $business_id = request()->session()->get('user.business_id');
            if (request()->ajax()) {
                $schemes = InvoiceScheme::where('business_id', $business_id)
                    ->select(['id', 'name', 'scheme_type', 'prefix', 'start_number', 'invoice_count', 'total_digits', 'is_default']);

                return Datatables::of($schemes)
                    ->addColumn(
                        'action',
                        '<button type="button" data-href="{{action(\'App\Http\Controllers\InvoiceSchemeController@edit\', [$id])}}" class="btn btn-xs btn-primary btn-modal" data-container=".invoice_edit_modal"><i class="glyphicon glyphicon-edit"></i> @lang("messages.edit")</button>
                            &nbsp;
                            <button type="button" data-href="{{action(\'App\Http\Controllers\InvoiceSchemeController@destroy\', [$id])}}" class="btn btn-xs btn-danger delete_invoice_button" @if($is_default) disabled @endif><i class="glyphicon glyphicon-trash"></i> @lang("messages.delete")</button>&nbsp;
                            @if($is_default)
                                <button type="button" class="btn btn-xs btn-success" disabled><i class="fa fa-check-square-o" aria-hidden="true"></i> @lang("barcode.default")</button>
                            @else
                                <button class="btn btn-xs btn-info set_default_invoice" data-id="{{$id}}">@lang("barcode.set_as_default")</button>
                            @endif
                            '
                    )
                    ->editColumn('prefix', function ($row) {
                        if ($row->scheme_type == 'year') {
                            return $row->prefix . date('Y') . config('constants.invoice_scheme_separator');
                        } else {
                            return $row->prefix;
                        }
                    })
                    ->editColumn('name', function ($row) {
                        if ($row->is_default == 1) {
                            return $row->name . ' &nbsp; <span class="label label-success">' . __('barcode.default') . '</span>';
                        } else {
                            return $row->name;
                        }
                    })
                    ->removeColumn('id')
                    ->removeColumn('is_default')
                    ->removeColumn('scheme_type')
                    ->rawColumns([5, 0])
                    ->make(false);
            }

            $invoice_layouts = InvoiceLayout::where('business_id', $business_id)
                ->with(['locations'])
                ->get();

            return view('invoice_scheme.index')
                ->with(compact('invoice_layouts'));
        }
        abort(403, 'Unauthorized action.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            if (isHasPermission(['invoice_settings.access'])) {
                return view('invoice_scheme.create');
            }
            abort(403, 'Unauthorized action.');
        } catch (\Exception $exception) {
            $this->logMethodException($exception);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        try {
            if (isHasPermission(['invoice_settings.access'])) {
                if ($request->filled('is_default')) {
                    $this->invoiceSchemeService->removeFromDefault($request->business_id);
                }
                $this->invoiceSchemeService->create($request->validated());
                return  [
                    'success' => true,
                    'msg' => __('invoice.added_success'),
                ];
            }
            abort(403, 'Unauthorized action.');
        } catch (\Exception $exception) {
            $this->logMethodException($exception);
            return [
                'success' => false,
                'msg' => __('messages.something_went_wrong'),
            ];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()->can('invoice_settings.access')) {
            abort(403, 'Unauthorized action.');
        }

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!auth()->user()->can('invoice_settings.access')) {
            abort(403, 'Unauthorized action.');
        }

        $business_id = request()->session()->get('user.business_id');
        $invoice = InvoiceScheme::where('business_id', $business_id)->find($id);

        return view('invoice_scheme.edit')
            ->with(compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!auth()->user()->can('invoice_settings.access')) {
            abort(403, 'Unauthorized action.');
        }

        try {
            $input = $request->only(['name', 'scheme_type', 'prefix', 'start_number', 'total_digits']);

            $invoice = InvoiceScheme::where('id', $id)->update($input);

            $output = [
                'success' => true,
                'msg' => __('invoice.updated_success'),
            ];
        } catch (\Exception $e) {
            \Log::emergency('File:' . $e->getFile() . 'Line:' . $e->getLine() . 'Message:' . $e->getMessage());

            $output = [
                'success' => false,
                'msg' => __('messages.something_went_wrong'),
            ];
        }

        return $output;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('invoice_settings.access')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            try {
                $invoice = InvoiceScheme::find($id);
                if ($invoice->is_default != 1) {
                    $invoice->delete();
                    $output = [
                        'success' => true,
                        'msg' => __('invoice.deleted_success'),
                    ];
                } else {
                    $output = [
                        'success' => false,
                        'msg' => __('messages.something_went_wrong'),
                    ];
                }
            } catch (\Exception $e) {
                \Log::emergency('File:' . $e->getFile() . 'Line:' . $e->getLine() . 'Message:' . $e->getMessage());

                $output = [
                    'success' => false,
                    'msg' => __('messages.something_went_wrong'),
                ];
            }

            return $output;
        }
    }

    /**
     * Sets invoice scheme setting as default
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setDefault(SetDefault $request)
    {
        if (isHasPermission(['invoice_settings.access'])) {
            if (request()->ajax()) {
                try {
                    $this->invoiceSchemeService->setDefault($request->id, $request->business_id);
                    return [
                        'success' => true,
                        'msg' => __('barcode.default_set_success'),
                    ];
                } catch (\Exception $exception) {
                    $this->logMethodException($exception);
                    return [
                        'success' => false,
                        'msg' => __('messages.something_went_wrong'),
                    ];
                }
            }
        }
        abort(403, 'Unauthorized action.');
    }
}
