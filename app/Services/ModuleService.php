<?php

namespace App\Services;

use App\Repositories\ModuleRepository;
use Module;
use Illuminate\Support\Facades\DB;

class ModuleService
{
    private static $erpModules = [];
    public $moduleRepository;

    public function __construct(ModuleRepository $moduleRepository)
    {
        $this->moduleRepository = $moduleRepository;
    }

    public static function getModuleData($functionName, $arguments = null)
    {
        $modules = Module::toCollection()->toArray();
        foreach ($modules as $module => $details) {
            if (self::isModuleInstalled($details['name'])) {
                self::$erpModules['installed'][] = $details;
            }
        }
    }

    public static function isModuleInstalled(string $moduleName)
    {
        $isModuleExists = Module::has($moduleName);
        if ($isModuleExists) {
            $moduleName = DB::table('system')->where('key', strtolower($moduleName) . '_verison')->value('key');
            return !empty($moduleName) ? true : false;
        }
        return false;
    }

    public static function generateErpModulesData(string $type = 'all', string $functionName, $arguments = null)
    {
        if ($type != 'all') {
            if (!empty(self::$erpModules[$type])) {
                foreach (self::$erpModules[$type] as $installedModule) {
                    $className = 'Modules\\' . $installedModule['name'] . '\Http\Controllers\DataController';
                    if (class_exists($className)) {
                        $classObject = new $className();
                        if (method_exists($classObject, $functionName)) {
                            if (!empty($arguments)) {
                                $data[$installedModule['name']] = call_user_func([$classObject, $functionName], $arguments);
                            } else {
                                $data[$installedModule['name']] = call_user_func([$classObject, $functionName]);
                            }
                        }
                    }
                }
            }
        }
    }

    public static function getOneModuleData(string $moduleName, $functionName, $arguments = null)
    {
        $className = 'Modules\\'.$moduleName.'\Http\Controllers\DataController';
        if (class_exists($className)) {
            $classObject = new $className();
            if (method_exists($classObject, $functionName)) {
                if (!empty($arguments)) {
                    $data[$moduleName['name']] = call_user_func([$classObject, $functionName], $arguments);
                } else {
                    $data[$moduleName['name']] = call_user_func([$classObject, $functionName]);
                }
            }
        }
    }
}
