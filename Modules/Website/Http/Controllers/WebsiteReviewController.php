<?php

namespace Modules\Website\Http\Controllers;

use App\Traits\LogException;
use App\Traits\UploadTrait;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Website\Entities\WebsiteReview;
use Modules\Website\Http\Requests\Reviews\Store;
use App\User;
use Yajra\DataTables\Facades\DataTables;
class WebsiteReviewController extends Controller
{
    use UploadTrait,LogException;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if (request()->ajax()){
            return DataTables::of(WebsiteReview::get())
                ->addColumn(
                    'action',
                    function ($row) {
                        $html = '<button data-href="' . action([\Modules\Website\Http\Controllers\WebsiteReviewController::class, 'edit'], [$row->id]) . '" class="btn btn-xs btn-primary edit_question_button"><i class="glyphicon glyphicon-edit"></i>' . __('messages.edit') . '</button>';
                        $html .= '&nbsp;<button data-href="' . action([\Modules\Website\Http\Controllers\WebsiteReviewController::class, 'destroy'], [$row->id]) . '" class="btn btn-xs btn-danger delete_question_button"><i class="glyphicon glyphicon-trash"></i> ' . __('messages.delete') . '</button>';
                        return $html;
                    }
                )
                ->make(true);
        }
        return view('website::reviews.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $users = User::pluck('first_name','id');
        return view('website::reviews.create',['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Store $request)
    {
        try {
            WebsiteReview::create($request->validated());
            return view('website::reviews.index');
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
