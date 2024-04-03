<?php

namespace Modules\Website\Http\Controllers;

use App\Traits\LogException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Website\Entities\WebsiteScreenshot;
use Modules\Website\Http\Requests\ScreenShots\Store;
use Modules\Website\Http\Requests\ScreenShots\Update;
use Modules\Website\Entities\WebsiteTemplate;
use App\Traits\UploadTrait;
use Yajra\DataTables\Facades\DataTables;

class WebsiteScreenshotController extends Controller
{
    use LogException, UploadTrait;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if(request()->ajax()){
            $screenShots = WebsiteScreenshot::get();
            return DataTables::of($screenShots)
            ->addColumn(
                'action',
                function ($row){
                        $html = '<button data-href="' . action([\Modules\Website\Http\Controllers\WebsiteScreenshotController::class,'edit'], [$row->id]) . '" class="btn btn-xs btn-primary edit_screen_button"><i class="glyphicon glyphicon-edit"></i>' . __('messages.edit') . '</button>';
                        $html .= '&nbsp;<button data-href="' . action([\Modules\Website\Http\Controllers\WebsiteScreenshotController::class,'destroy'], [$row->id]) . '" class="btn btn-xs btn-danger delete_screen_button"><i class="glyphicon glyphicon-trash"></i> ' . __('messages.delete') . '</button>';
                        return $html;
                }
            )
                ->make(true);
        }
        return view('website::screen_shots.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('website::screen_shots.create',['templates' => WebsiteTemplate::forDropdown()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Store $request)
    {
        try {
            WebsiteScreenshot::create($request->validated());
            if($request->hasFile('image')){ 
                $this->uploadeImage($request->image,'screen-shots');
            }
            return view('website::screen_shots.index');
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
        return view('website::screen_shots.edit',[
            'id' => $id,
            'screen' => WebsiteScreenshot::find($id),
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
        $screen = WebsiteScreenshot::find($id);
        $screen->update($request->validated());
        return redirect()->route('website.screen-shots.index');
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
