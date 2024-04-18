<?php

namespace Modules\Website\Http\Controllers;

use App\Traits\LogException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Website\Entities\WebsiteQuestion;
use Modules\Website\Http\Requests\Questions\Store;
use Modules\Website\Http\Requests\Questions\Update;

use Modules\Website\Entities\WebsiteTemplate;
use Yajra\DataTables\Facades\DataTables;

class WebsiteQuestionController extends Controller
{
    use LogException;

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if (request()->ajax()){
            // $questions = WebsiteQuestion::get();
            return DataTables::of(WebsiteQuestion::get())
                ->addColumn(
                    'action',
                    function ($row) {
                        $html = '<button data-href="' . action([\Modules\Website\Http\Controllers\WebsiteQuestionController::class, 'edit'], [$row->id]) . '" class="btn btn-xs btn-primary edit_question_button"><i class="glyphicon glyphicon-edit"></i>' . __('messages.edit') . '</button>';
                        $html .= '&nbsp;<button data-href="' . action([\Modules\Website\Http\Controllers\WebsiteQuestionController::class, 'destroy'], [$row->id]) . '" class="btn btn-xs btn-danger delete_question_button"><i class="glyphicon glyphicon-trash"></i> ' . __('messages.delete') . '</button>';
                        return $html;
                    }
                )
                ->make(true);
        }
        return view('website::questions.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('website::questions.create',['templates' => WebsiteTemplate::forDropdown()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Store $request)
    {
        try {
            WebsiteQuestion::create($request->validated());
            return view('website::questions.index');
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
        return view('website::questions.edit',[
            'id' => $id,
            'question' => WebsiteQuestion::find($id),
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
        $question = WebsiteQuestion::find($id);
        $question->update($request->validated());
        return redirect()->route('website.questions.index');
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
