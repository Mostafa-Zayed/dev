<?php

namespace App\Http\Controllers;

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

class FrontEndController extends Controller
{
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
        $websiteSettings = WebsiteSetting::first();
        $features = WebsiteFeature::where('status','1')->where('is_home',1)->get();
        return view('welcome',[
            'template' => $websiteDemo,
            'settings' => $websiteSettings,
            'features' => $features
        ]);
    }
}
