<?php

namespace Modules\MobileApp\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use App\System;
use Composer\Semver\Comparator;

class InstallController extends Controller
{
    public function __construct()
    {
        $this->module_name = 'mobileapp';
        $this->appVersion = config('mobileapp.module_version');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if (! auth()->user()->can('superadmin')) {
            abort(403, 'Unauthorized action.');
        }

        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '512M');

        $this->installSettings();
        $is_installed = System::getProperty($this->module_name.'_version');
        if (empty($is_installed)) {
            DB::statement('SET default_storage_engine=INNODB;');
            Artisan::call('module:migrate', ['module' => 'MobileApp', '--force' => true]);
            System::addProperty($this->module_name.'_version', $this->appVersion);
        }

        $action_url = action([\Modules\MobileApp\Http\Controllers\InstallController::class, 'install']);

        $intruction_type = 'uf';

        return view('install.install-module')
            ->with(compact('action_url', 'intruction_type'));

       
        return view('mobileapp::index');
    }

     /**
     * Initialize all install functions
     */
    private function installSettings()
    {
        config(['app.debug' => true]);
        Artisan::call('config:clear');
    }

    public function install()
    {
        try{
            DB::beginTransaction();
            // $pid = config('project.pid');
    
            $is_installed = System::getProperty($this->module_name.'_version');
            if (! empty($is_installed)) {
                abort(404);
            }
    
            DB::statement('SET default_storage_engine=INNODB;');
            Artisan::call('module:migrate', ['module' => 'MobileApp', '--force' => true]);
            Artisan::call('module:publish', ['module' => 'MobileApp']);
            System::addProperty($this->module_name.'_version', $this->appVersion);
    
            DB::commit();
            $output = ['success' => 1,
                'msg' => 'Project module installed succesfully',
            ];
        } catch(\Exception $e) {
            DB::rollBack();
            \Log::emergency('File:'.$e->getFile().'Line:'.$e->getLine().'Message:'.$e->getMessage());

            $output = [
                'success' => false,
                'msg' => $e->getMessage(),
            ];
        }

        return redirect()
        ->action([\App\Http\Controllers\Install\ModulesController::class, 'index'])
        ->with('status', $output);
      
    }

        /**
     * Uninstall
     *
     * @return Response
     */
    public function uninstall()
    {
        if (! auth()->user()->can('superadmin')) {
            abort(403, 'Unauthorized action.');
        }

        try {
            System::removeProperty($this->module_name.'_version');

            $output = ['success' => true,
                'msg' => __('lang_v1.success'),
            ];
        } catch (\Exception $e) {
            $output = ['success' => false,
                'msg' => $e->getMessage(),
            ];
        }

        return redirect()->back()->with(['status' => $output]);
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('mobileapp::create');
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
        return view('mobileapp::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('mobileapp::edit');
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
