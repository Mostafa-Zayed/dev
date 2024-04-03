<?php

namespace Modules\Website\Http\Controllers;

use App\Traits\LogException;
use App\Traits\UploadTrait;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Website\Entities\WebsiteSlider;
use Modules\Website\Http\Requests\Sliders\Store;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\App;
use Modules\Website\Entities\WebsiteTemplate;

class WebsiteSliderController extends Controller
{
    use LogException,UploadTrait;

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
        if (request()->ajax()){
            $sliders = WebsiteSlider::select([
                'id',
                'number',
                'image',
                'title',
                'heading',
                'description',
                DB::raw("JSON_VALUE(website_sliders.title,'$.$this->local') as title_trans"),
                DB::raw("JSON_VALUE(website_sliders.heading,'$.$this->local') AS heading_trans"),
                DB::raw("JSON_VALUE(website_sliders.description,'$.$this->local') AS description_trans"),
                ])->get();
            return DataTables::of($sliders)
            ->addColumn(
                'action',
                function ($row){
                        $html = '<button data-href="' . action([\Modules\Website\Http\Controllers\WebsiteSliderController::class,'edit'], [$row->id]) . '" class="btn btn-xs btn-primary edit_slider_button"><i class="glyphicon glyphicon-edit"></i>' . __('messages.edit') . '</button>';
                        $html .= '&nbsp;<button data-href="' . action([\Modules\Website\Http\Controllers\WebsiteSliderController::class,'destroy'], [$row->id]) . '" class="btn btn-xs btn-danger delete_slider_button"><i class="glyphicon glyphicon-trash"></i> ' . __('messages.delete') . '</button>';
                        return $html;
                }
            )
                ->make(true);
        }
        return view('website::sliders.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('website::sliders.create',['templates' => WebsiteTemplate::forDropdown()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Store $request)
    {
        try {
            WebsiteSlider::create($request->validated());
            if($request->hasFile('image')){ 
                $this->uploadeImage($request->image,'sliders');
            }
            if($request->hasFile('shape_image')){ 
                $this->uploadeImage($request->image,'sliders');
            }
            return view('website::sliders.index');
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
        return view('website::sliders.edit',[
            'id' => $id,
            
        ]);
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
