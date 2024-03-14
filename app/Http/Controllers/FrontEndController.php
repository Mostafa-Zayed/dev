<?php

namespace App\Http\Controllers;

use App\Utils\ModuleUtil;
use Illuminate\Http\Request;
use Modules\Website\Entities\WebsiteDemo;
use Modules\Website\Entities\WebsiteFeature;
use Modules\Website\Entities\WebsitePartner;
use Modules\Website\Entities\WebsitePost;
use Modules\Website\Entities\WebsiteQuestion;
use Modules\Website\Entities\WebsiteScreenshot;
use Modules\Website\Entities\WebsiteSlider;
use Modules\Website\Entities\WebsiteTestmonial;
use Modules\Website\Entities\WebsiteWork;
use Modules\Website\Entities\WebsiteSetting;
use Modules\Website\Entities\WebsiteTemplate;
use Modules\Superadmin\Entities\Package;
use Modules\Website\Entities\WebsiteReview;

class FrontEndController extends Controller
{
    public $moduleUtil;

    public function __construct(ModuleUtil $moduleUtil)
    {
        $this->moduleUtil = $moduleUtil;
    }
    public function index()
    {
        $websiteDemo = WebsiteTemplate::with(
            [
                'websiteSlider',
                'websiteFeatures',
                'websiteWorks',
                'websiteScreenShots'
            ]
        )->where('status',1)->first();
        $packages        = Package::listPackages(true);
        $websiteSettings = WebsiteSetting::first();
        $reviews         = WebsiteReview::with('user')->where('is_home',1)->get();
        $permissions     = $this->moduleUtil->getModuleData('superadmin_package');
        $partners        = WebsitePartner::get();
        $permission_formatted = [];
        foreach ($permissions as $permission) {
            foreach ($permission as $details) {
                $permission_formatted[$details['name']] = $details['label'];
            }
        }
        $features = WebsiteFeature::where('status','1')->where('is_home',1)->get();
        return view('welcome',[
            'template' => $websiteDemo,
            'settings' => $websiteSettings,
            'features' => $features,
            'packages' => $packages,
            'permission_formatted' => $permission_formatted,
            'reviews' => $reviews,
            'partners' => $partners
        ]);
    }
}
