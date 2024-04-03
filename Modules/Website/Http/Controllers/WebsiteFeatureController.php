<?php

namespace Modules\Website\Http\Controllers;

use App\Traits\LogException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Website\Entities\WebsiteDemo;
use Modules\Website\Entities\WebsiteFeature;
use Modules\Website\Http\Requests\Features\Store;
use Modules\Website\Http\Requests\Features\Update;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Modules\Website\Entities\WebsiteTemplate;
use Yajra\DataTables\Facades\DataTables;
class WebsiteFeatureController extends Controller
{
    use LogException;
    private $local;

    public function __construct()
    {
        $this->local = App::getLocale();
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if(request()->ajax()){
            $features = WebsiteFeature::with('websiteTemplate')->get();
            return DataTables::of($features)
            ->addColumn(
                'action',
                function ($row){
                        $html = '<button data-href="' . action([\Modules\Website\Http\Controllers\WebsiteFeatureController::class,'edit'], [$row->id]) . '" class="btn btn-xs btn-primary edit_feature_button"><i class="glyphicon glyphicon-edit"></i>' . __('messages.edit') . '</button>';
                        $html .= '&nbsp;<button data-href="' . action([\Modules\Website\Http\Controllers\WebsiteFeatureController::class,'destroy'], [$row->id]) . '" class="btn btn-xs btn-danger delete_feature_button"><i class="glyphicon glyphicon-trash"></i> ' . __('messages.delete') . '</button>';
                        return $html;
                }
            )
                ->make(true);
        }
        return view('website::features.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        // $templates = WebsiteTemplate::select('id','name',DB::raw("JSON_VALUE(website_demos.name,'$.$this->local') AS name"))->get();
        
        return view('website::features.create',['templates' => WebsiteTemplate::forDropdown()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Store $request)
    {
        try {
            WebsiteFeature::create($request->validated());
            return view('website::features.index');
        } catch (\Exception $exception){
            $this->logMethodException($exception);
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('website::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('website::features.edit',[
            'id' => $id,
            'feature' => WebsiteFeature::find($id),
            'templates' => WebsiteTemplate::forDropdown()
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Update $request, $id)
    {
        $feature = WebsiteFeature::find($id);
        $feature->update($request->validated());
        return redirect()->route('website.features.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public static function forDromDown($items)
    {
        foreach($items as $item) {
            $newItem['id'] = $item['name_trans'];
            $result[] = $newItem;
        }
        return $result;
    }
}
