<?php

namespace Modules\Store\Http\Controllers;

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
                'name' => 'store_module',
                'label' => __('store::lang.website'),
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
        $is_woo_enabled = (bool) $module_util->hasThePermissionInSubscription($business_id, 'store_module', 'superadmin_package');

        if ($is_woo_enabled) {
            Menu::modify('admin-sidebar-menu', function ($menu) {
                $menu->url(
                    action([\Modules\Store\Http\Controllers\StoreController::class, 'index']),
                    __('store::lang.store'),
                    ['icon' => 'fab fa-wordpress', 'style' => config('app.env') == 'demo' ? 'background-color: #9E458B !important;' : '', 'active' => request()->segment(1) == 'store']
                )->order(88);
            });
        }
    }
}