<?php

namespace App\Http\Controllers;

use App\Http\Requests\Unit\Destroy;
use App\Product;
use App\Traits\LogException;
use App\Unit;
use App\Utils\Util;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Services\UnitService;
use App\Http\Requests\Unit\Store;
use App\Http\Requests\Unit\Update;

class UnitController extends Controller
{
    use LogException;

    protected $unitService;

    /**
     * Constructor
     *
     * @param  ProductUtils  $product
     * @return void
     */
    public function __construct(UnitService $unitService)
    {
        $this->unitService = $unitService;
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
                                <button data-href="{{action(\'App\Http\Controllers\UnitController@destroy\', [$id])}}" class="btn btn-xs btn-danger delete_unit_button" data-id="{{$id}}"><i class="glyphicon glyphicon-trash"></i> @lang("messages.delete")</button>
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
        if (isHasPermission(['unit.update'])) {
            try {
                if (request()->ajax()) {
                    return view('unit.edit', [
                        'unit' => $this->unitService->getOne($id),
                        'units' => $this->unitService->forDropDown()
                    ]);
                }
            } catch (\Exception $exception) {
                $this->logMethodException($exception);
            }
        }
        abort(403, 'Unauthorized action.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, $id)
    {
        if (isHasPermission(['unit.update'])) {
            try {
                if (request()->ajax()) {
                    $unit = $this->unitService->getOne($id);
                    if (!$unit) {
                        return [
                            'success' => false,
                            'msg' => __('messages.unit_not_exists'),
                        ];
                    }
                    $unit->update($request->validated());
                    return [
                        'success' => true,
                        'msg' => __('unit.updated_success'),
                    ];
                }
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destroy $request, $id)
    {
        if (isHasPermission(['unit.delete'])) {
            if (request()->ajax()) {
                try {
                    $unit = $this->unitService->getOne($request->id);
                    if (!$unit) {
                        return [
                            'success' => false,
                            'msg' => __('messages.unit_not_exists'),
                        ];
                    }
                    if ($this->unitService->isUnitAssociatedWithProduct($unit->id)) {
                        return [
                            'success' => false,
                            'msg' => __('lang_v1.unit_cannot_be_deleted'),
                        ];
                    }
                    $unit->delete();
                    return [
                        'success' => true,
                        'msg' => __('unit.deleted_success'),
                    ];
                } catch (\Exception $exception) {
                    $this->logMethodException($exception);

                    return [
                        'success' => false,
                        'msg' => '__("messages.something_went_wrong")',
                    ];
                }
            }
        }
    }
}
