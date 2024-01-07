<?php

namespace Modules\Website\Http\Controllers;

use App\Traits\UploadTrait;
use App\Utils\BusinessUtil;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Website\Http\Requests\Settings\Update;
use Modules\Website\Entities\WebsiteSetting;

class WebsiteSettingController extends Controller
{
    use UploadTrait;
    private $businessUtil;

    public function __construct(BusinessUtil $businessUtil)
    {
        $this->businessUtil = $businessUtil;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('website::settings.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('website::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
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
    public function update(Update $request)
    {
        // dd('ok');
        // if (! auth()->user()->can('business_settings.access')) {
        //     abort(403, 'Unauthorized action.');
        // }
        try{
            $notAllowed = $this->businessUtil->notAllowedInDemo();
            if (! empty($notAllowed)) {
                return $notAllowed;
            }
            // dd($request->validated());
            WebsiteSetting::create($request->validated());
            if($request->hasFile('section_features_image')){ 
                $this->uploadeImage($request->section_features_image,'settings');
            }
        }catch(\Exception $exception) {
            \Log::emergency('File:'.$exception->getFile().'Line:'.$exception->getLine().'Message:'.$exception->getMessage());

            $output = ['success' => 0,
                'msg' => __('messages.something_went_wrong'),
            ];
        }
        
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
