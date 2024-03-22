<?php

namespace App\Http\Controllers;

use App\Product;
use App\Traits\LogException;
use App\Unit;
use App\Utils\Util;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Services\UnitService;
use App\Http\Requests\Unit\Store;

class UnitController extends Controller
{
    use LogException;

    protected $unitService;

    /**
     * All Utils instance.
     */
    protected $commonUtil;

    /**
     * Constructor
     *
     * @param  ProductUtils  $product
     * @return void
     */
    public function __construct(Util $commonUtil, UnitService $unitService)
    {
        $this->unitService = $unitService;
        $this->commonUtil  = $commonUtil;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isHasPermission(['unit.view', 'unit.create'])) {
            try {
                if (request()->ajax()) {
                    $units = $this->unitService->getAllForBusiness();
                    return Datatables::of($units)
                        ->addColumn(
                            'action',
                            '@can("unit.update")
                            <button data-href="{{action(\'App\Http\Controllers\UnitController@edit\', [$id])}}" class="btn btn-xs btn-primary edit_unit_button"><i class="glyphicon glyphicon-edit"></i> @lang("messages.edit")</button>
                                &nbsp;
                            @endcan
                            @can("unit.delete")
                                <button data-href="{{action(\'App\Http\Controllers\UnitController@destroy\', [$id])}}" class="btn btn-xs btn-danger delete_unit_button"><i class="glyphicon glyphicon-trash"></i> @lang("messages.delete")</button>
                            @endcan'
                        )
                        ->editColumn('allow_decimal', function ($row) {
                            if ($row->allow_decimal) {
                                return __('messages.yes');
                            } else {
                                return __('messages.no');
                            }
                        })
                        ->editColumn('actual_name', function ($row) {
                            if (!empty($row->base_unit_id)) {
                                return  $row->actual_name . ' (' . (float) $row->base_unit_multiplier . $row->base_unit->short_name . ')';
                            }

                            return  $row->actual_name;
                        })
                        ->removeColumn('id')
                        ->rawColumns(['action'])
                        ->make(true);
                }

                return view('unit.index');
            } catch (\Exception $exception) {
                $this->logMethodException($exception);
            }
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
        if (isHasPermission(['unit.create'])) {
            try {
                return view('unit.create', [
                    'quick_add' => empty(request()->input('quick_add')) ? false : true,
                    'units' => $this->unitService->forDropDown()
                ]);
            } catch (\Exception $exception) {
                $this->logMethodException($exception);
            }
        }
        abort(403, 'Unauthorized action.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        if (isHasPermission(['unit.create'])) {
            try {
                return [
                    'success' => true,
                    'data' => $this->unitService->addNew($request->validated()),
                    'msg' => __('unit.added_success'),
                ];
            } catch (\Exception $exception) {
                $this->logMethodException($exception);
                return [
                    'success' => false,
                    'msg' => __('messages.something_went_wrong'),
                ];
            }
        }
        abort(403, 'Unauthorized action.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!auth()->user()->can('unit.update')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            $business_id = request()->session()->get('user.business_id');
            $unit = Unit::where('business_id', $business_id)->find($id);

            $units = Unit::forDropdown($business_id);

            return view('unit.edit')
                ->with(compact('unit', 'units'));
        }
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
        if (!auth()->user()->can('unit.update')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            try {
                $input = $request->only(['actual_name', 'short_name', 'allow_decimal']);
                $business_id = $request->session()->get('user.business_id');

                $unit = Unit::where('business_id', $business_id)->findOrFail($id);
                $unit->actual_name = $input['actual_name'];
                $unit->short_name = $input['short_name'];
                $unit->allow_decimal = $input['allow_decimal'];
                if ($request->has('define_base_unit')) {
                    if (!empty($request->input('base_unit_id')) && !empty($request->input('base_unit_multiplier'))) {
                        $base_unit_multiplier = $this->commonUtil->num_uf($request->input('base_unit_multiplier'));
                        if ($base_unit_multiplier != 0) {
                            $unit->base_unit_id = $request->input('base_unit_id');
                            $unit->base_unit_multiplier = $base_unit_multiplier;
                        }
                    }
                } else {
                    $unit->base_unit_id = null;
                    $unit->base_unit_multiplier = null;
                }

                $unit->save();

                $output = [
                    'success' => true,
                    'msg' => __('unit.updated_success'),
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('unit.delete')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            try {
                $business_id = request()->user()->business_id;

                $unit = Unit::where('business_id', $business_id)->findOrFail($id);

                //check if any product associated with the unit
                $exists = Product::where('unit_id', $unit->id)
                    ->exists();
                if (!$exists) {
                    $unit->delete();
                    $output = [
                        'success' => true,
                        'msg' => __('unit.deleted_success'),
                    ];
                } else {
                    $output = [
                        'success' => false,
                        'msg' => __('lang_v1.unit_cannot_be_deleted'),
                    ];
                }
            } catch (\Exception $e) {
                \Log::emergency('File:' . $e->getFile() . 'Line:' . $e->getLine() . 'Message:' . $e->getMessage());

                $output = [
                    'success' => false,
                    'msg' => '__("messages.something_went_wrong")',
                ];
            }

            return $output;
        }
    }
}
