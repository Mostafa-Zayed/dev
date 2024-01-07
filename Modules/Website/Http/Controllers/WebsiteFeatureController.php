<?php

namespace Modules\Website\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Website\Entities\WebsiteDemo;
use Modules\Website\Entities\WebsiteFeature;
use Modules\Website\Http\Requests\Features\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class WebsiteFeatureController extends Controller
{
    private $local;

    public function __construct()
    {
        $this->local = App::getLocale();
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('website::features.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $templates = WebsiteDemo::select('id','name',DB::raw("JSON_VALUE(website_demos.name,'$.$this->local') AS name"))->get();
        
        // dd($templates);
        return view('website::features.create',['templates' => $templates]);
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
        return view('website::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
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
