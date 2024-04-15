<?php

namespace Modules\MobileApp\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Menu;
use App\Utils\ModuleUtil;

class DataController extends Controller
{

    public function superadmin_package()
    {
        return [
            [
                'name' => 'mobileapp_module',
                'label' => __('mobileapp::lang.mobileapp'),
                'default' => true,
            ],
        ];
    }

    /**
     * Adds Woocommerce menus
     *
     * @return null
     */
    public function modifyAdminMenu()
    {
        $module_util = new ModuleUtil();

        $business_id = session()->get('user.business_id');
        $is_woo_enabled = (bool) $module_util->hasThePermissionInSubscription($business_id, 'mobileapp_module', 'superadmin_package');

        if ($is_woo_enabled) {
            Menu::modify('admin-sidebar-menu', function ($menu) {
                $menu->url(
                    action([\Modules\MobileApp\Http\Controllers\MobileAppController::class, 'index']),
                    __('mobileapp::lang.mobileapp'),
                    ['icon' => 'fab fa-wordpress', 'style' => config('app.env') == 'demo' ? 'background-color: #9E458B !important;' : '', 'active' => request()->segment(1) == 'mobileapp']
                )->order(88);
            });
        }
    }
}