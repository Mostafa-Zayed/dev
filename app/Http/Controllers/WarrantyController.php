<?php

namespace App\Http\Controllers;

use App\Warranty;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Services\WarrantyService;
use App\Traits\LogException;
use App\Http\Requests\Warranty\Store;
use App\Http\Requests\Warranty\Update;

class WarrantyController extends Controller
{
    use LogException;

    protected $warrantyService;

    public function __construct(WarrantyService $warrantyService)
    {
        $this->warrantyService = $warrantyService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            try {
                $warranties = $this->warrantyService->getAllForBusiness();
                return Datatables::of($warranties)
                    ->addColumn(
                        'action',
                        '<button data-href="{{action(\'App\Http\Controllers\WarrantyController@edit\', [$id])}}" class="btn btn-xs btn-primary btn-modal" data-container=".view_modal"><i class="glyphicon glyphicon-edit"></i> @lang("messages.edit")</button>'
                    )
                    ->removeColumn('id')
                    ->editColumn('duration', function ($row) {
                        return $row->duration . ' ' . __('lang_v1.' . $row->duration_type);
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            } catch (\Exception $exception) {
                $this->logMethodException($exception);
            }
        }
        return view('warranties.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('warranties.create');
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
            $this->warrantyService->create($request->validated());
            return [
                'success' => true,
                'msg' => __('lang_v1.added_success'),
            ];
        } catch (\Exception $exception) {
            $this->logMethodException($exception);
            return [
                'success' => false,
                'msg' => __('messages.something_went_wrong'),
            ];
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Warranty  $warranty
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (request()->ajax()) {
            try {
                return view('warranties.edit', [
                    'warranty' => $this->warrantyService->getOne($id)
                ]);
            } catch (\Exception $exception) {
                $this->logMethodException($exception);
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Warranty  $warranty
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, $id)
    {
        if (request()->ajax()) {
            try {
                $warranty = $this->warrantyService->getOne($id);
                if (!$warranty) {
                    return [
                        'success' => false,
                        'msg' => __('messages.unit_not_exists'),
                    ];
                }
                $warranty->update($request->validated());
                return [
                    'success' => true,
                    'msg' => __('lang_v1.updated_success'),
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Warranty  $warranty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warranty $warranty)
    {
        //
    }
}
