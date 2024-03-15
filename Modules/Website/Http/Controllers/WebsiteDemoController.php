<?php

namespace Modules\Website\Http\Controllers;

use App\Traits\LogException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Website\Entities\WebsiteTemplate;
use Modules\Website\Http\Requests\Demos\Store;
use Modules\Website\Entities\WebsiteSlider;
use Modules\Website\Entities\WebsiteFeature;
use Yajra\DataTables\Facades\DataTables;
class WebsiteDemoController extends Controller
{
    use LogException;

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if(request()->ajax()){
            $templates = WebsiteTemplate::get();
            return DataTables::of($templates)->make(true);
        }
       
        return view('website::demos.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $sliders = WebsiteSlider::pluck('number','id');
        $features = WebsiteFeature::select('id','name')->get();
        $numbers = [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 6,
            7 => 7
        ];
        return view('website::demos.create',[
            'sliders' => $sliders,
            'features' => $features,
            'numbers' => $numbers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Store $request)
    {
        try {
            WebsiteTemplate::create($request->validated());
            
            return view('website::demos.index');
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
}
