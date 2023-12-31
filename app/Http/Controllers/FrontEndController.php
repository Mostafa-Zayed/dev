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

class FrontEndController extends Controller
{
    public function index()
    {
        $websiteDemo = WebsiteDemo::with(['websiteSlider','websiteFeature'])->where('status',1)->first();
        $websiteSettings = WebsiteSetting::first();
        // dd($websiteSettings);
        // dd($websiteDemo);
        // $sliders = WebsiteSlider::get();
        // dd($sliders);
        // $features = WebsiteFeature::get();
        // $works    = WebsiteWork::get();
        // $screenShots = WebsiteScreenshot::get();
        // $reviews     = WebsiteTestmonial::get();
        // $partners    = WebsitePartner::get();
        // $questions   = WebsiteQuestion::get();
        // $posts       = WebsitePost::get();
        return view('welcome',['template' => $websiteDemo,'settings' => $websiteSettings]);
    }
}
