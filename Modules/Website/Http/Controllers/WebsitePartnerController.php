<?php

namespace Modules\Website\Http\Controllers;

use App\Traits\LogException;
use App\Traits\UploadTrait;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Website\Entities\WebsitePartner;
use Modules\Website\Http\Requests\Partners\Store;
use Modules\Website\Http\Requests\Partners\Update;

use Modules\Website\Entities\WebsiteTemplate;
use Yajra\DataTables\Facades\DataTables;

class WebsitePartnerController extends Controller
{
    use UploadTrait;
    const IMAGEPATH = 'partners' ;
    use LogException;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if(request()->ajax()){
            $partners = WebsitePartner::get();
            return DataTables::of($partners)
            ->addColumn(
                'action',
                function ($row){
                        $html = '<button data-href="' . action([\Modules\Website\Http\Controllers\WebsitePartnerController::class,'edit'], [$row->id]) . '" class="btn btn-xs btn-primary edit_partner_button"><i class="glyphicon glyphicon-edit"></i>' . __('messages.edit') . '</button>';
                        $html .= '&nbsp;<button data-href="' . action([\Modules\Website\Http\Controllers\WebsitePartnerController::class,'destroy'], [$row->id]) . '" class="btn btn-xs btn-danger delete_partner_button"><i class="glyphicon glyphicon-trash"></i> ' . __('messages.delete') . '</button>';
                        return $html;
                }
            )
                ->make(true);
        }
        return view('website::partners.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('website::partners.create',['templates' => WebsiteTemplate::forDropdown()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Store $request)
    {
        try {
            WebsitePartner::create($request->validated());
            if($request->hasFile('image')){ 
                $this->uploadeImage($request->image,'partners');
            }
            return view('website::partners.index');
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
        return view('website::partners.edit',[
            'id' => $id,
            'partner' => WebsitePartner::find($id),
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
        $partner = WebsitePartner::find($id);
        $partner->update($request->validated());
        return redirect()->route('website.partners.index');
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
