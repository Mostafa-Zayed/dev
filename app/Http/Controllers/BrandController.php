<?php

namespace App\Http\Controllers;

use App\Brands;
use App\Traits\LogException;
use App\Utils\ModuleUtil;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Services\BrandService;
use App\Services\ModuleService;

class BrandController extends Controller
{
    use LogException;

    protected $brandService;
    /**
     * All Utils instance.
     */
    protected $moduleUtil;

    /**
     * Constructor
     *
     * @param  ProductUtils  $product
     * @return void
     */
    public function __construct(ModuleUtil $moduleUtil, BrandService $brandService)
    {
        $this->moduleUtil = $moduleUtil;
        $this->brandService = $brandService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isHasPermission(['brand.view', 'brand.create'])) {
            if (request()->ajax()) {
                try {
                    return Datatables::of($this->brandService->getAllForBusiness())
                        ->addColumn(
                            'action',
                            '@can("brand.update")
                        <button data-href="{{action(\'App\Http\Controllers\BrandController@edit\', [$id])}}" class="btn btn-xs btn-primary edit_brand_button"><i class="glyphicon glyphicon-edit"></i> @lang("messages.edit")</button>
                            &nbsp;
                        @endcan
                        @can("brand.delete")
                            <button data-href="{{action(\'App\Http\Controllers\BrandController@destroy\', [$id])}}" class="btn btn-xs btn-danger delete_brand_button"><i class="glyphicon glyphicon-trash"></i> @lang("messages.delete")</button>
                        @endcan'
                        )
                        ->removeColumn('id')
                        ->rawColumns([2])
                        ->make(false);
                } catch (\Exception $exception) {
                    $this->logMethodException($exception);
                }
            }

            return view('brand.index');
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
        if (isHasPermission(['brand.create'])) {
            return view('brand.create', [
                'quick_add' => !empty(request()->input('quick_add')) ? true : false,
                'is_repair_installed' => ModuleService::isModuleInstalled('Repair')
            ]);
        }
        abort(403, 'Unauthorized action.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('brand.create')) {
            abort(403, 'Unauthorized action.');
        }

        try {
            $input = $request->only(['name', 'description']);
            $business_id = $request->session()->get('user.business_id');
            $input['business_id'] = $business_id;
            $input['created_by'] = $request->session()->get('user.id');

            if ($this->moduleUtil->isModuleInstalled('Repair')) {
                $input['use_for_repair'] = !empty($request->input('use_for_repair')) ? 1 : 0;
            }

            $brand = Brands::create($input);
            $output = [
                'success' => true,
                'data' => $brand,
                'msg' => __('brand.added_success'),
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!auth()->user()->can('brand.update')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            $business_id = request()->session()->get('user.business_id');
            $brand = Brands::where('business_id', $business_id)->find($id);

            $is_repair_installed = $this->moduleUtil->isModuleInstalled('Repair');

            return view('brand.edit')
                ->with(compact('brand', 'is_repair_installed'));
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
        if (!auth()->user()->can('brand.update')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            try {
                $input = $request->only(['name', 'description']);
                $business_id = $request->session()->get('user.business_id');

                $brand = Brands::where('business_id', $business_id)->findOrFail($id);
                $brand->name = $input['name'];
                $brand->description = $input['description'];

                if ($this->moduleUtil->isModuleInstalled('Repair')) {
                    $brand->use_for_repair = !empty($request->input('use_for_repair')) ? 1 : 0;
                }

                $brand->save();

                $output = [
                    'success' => true,
                    'msg' => __('brand.updated_success'),
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
        if (!auth()->user()->can('brand.delete')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            try {
                $business_id = request()->user()->business_id;

                $brand = Brands::where('business_id', $business_id)->findOrFail($id);
                $brand->delete();

                $output = [
                    'success' => true,
                    'msg' => __('brand.deleted_success'),
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

    public function getBrandsApi()
    {
        try {
            $api_token = request()->header('API-TOKEN');

            $api_settings = $this->moduleUtil->getApiSettings($api_token);

            $brands = Brands::where('business_id', $api_settings->business_id)
                ->get();
        } catch (\Exception $e) {
            \Log::emergency('File:' . $e->getFile() . 'Line:' . $e->getLine() . 'Message:' . $e->getMessage());

            return $this->respondWentWrong($e);
        }

        return $this->respond($brands);
    }
}
