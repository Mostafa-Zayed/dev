<?php

namespace Modules\Website\Http\Controllers;

use App\Traits\LogException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Website\Entities\WebsiteWork;
use Modules\Website\Http\Requests\HowWorks\Store;
use Modules\Website\Http\Requests\HowWorks\Update;
use Modules\Website\Entities\WebsiteTemplate;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\Facades\DataTables;

class WebsiteWorkController extends Controller
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
        if (request()->ajax()) {
            $howWorks = WebsiteWork::with('websiteTemplate')->get();
            return DataTables::of($howWorks)
                ->addColumn(
                    'action',
                    function ($row) {
                        $html = '<button data-href="' . action([\Modules\Website\Http\Controllers\WebsiteWorkController::class, 'edit'], [$row->id]) . '" class="btn btn-xs btn-primary edit_work_button"><i class="glyphicon glyphicon-edit"></i>' . __('messages.edit') . '</button>';
                        $html .= '&nbsp;<button data-href="' . action([\Modules\Website\Http\Controllers\WebsiteWorkController::class, 'destroy'], [$row->id]) . '" class="btn btn-xs btn-danger delete_work_button"><i class="glyphicon glyphicon-trash"></i> ' . __('messages.delete') . '</button>';
                        return $html;
                    }
                )
                ->make(true);
        }
        return view('website::how_works.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('website::how_works.create', ['templates' => WebsiteTemplate::forDropdown()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Store $request)
    {
        try {
            WebsiteWork::create($request->validated());
            return view('website::how_works.index');
        } catch (\Exception $exception) {
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
        return view('website::how_works.edit', [
            'id' => $id,
            'work' => WebsiteWork::find($id),
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
        $howWork = WebsiteWork::find($id);
        $howWork->update($request->validated());
        return redirect()->route('website.works.index');
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
