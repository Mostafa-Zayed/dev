<?php

namespace Modules\Website\Http\Controllers;

use App\Traits\UploadTrait;
use App\Utils\BusinessUtil;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Website\Http\Requests\Settings\Update;
use Modules\Website\Entities\WebsiteSetting;

class WebsiteSettingController extends Controller
{
    use UploadTrait;
    private $businessUtil;

    public function __construct(BusinessUtil $businessUtil)
    {
        $this->businessUtil = $businessUtil;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $settings = WebsiteSetting::first();
        return view('website::settings.index',['settings' => $settings ?? []]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Update $request)
    {
        try{
            $requestPayload = $request->validated();
            // dd($requestPayload);
            $notAllowed = $this->businessUtil->notAllowedInDemo();
            if (! empty($notAllowed)) {
                return $notAllowed;
            }
            $settings = WebsiteSetting::first();
            // dd($this->generateSettingsRequest($requestPayload));
            if(! empty($settings)){
                $settings->update($this->generateSettingsRequest($requestPayload));
                return view('website::settings.index',['settings' => $settings]);
            }else{
                $settings = WebsiteSetting::create($this->generateSettingsRequest($requestPayload));
            }
            return view('website::settings.index',['settings' => $settings]);
        }catch(\Exception $exception) {
            \Log::emergency('File:'.$exception->getFile().'Line:'.$exception->getLine().'Message:'.$exception->getMessage());

            $output = ['success' => 0,
                'msg' => __('messages.something_went_wrong'),
            ];
        }
        
    }


    public function generateSettingsRequest(& $settings)
    {
        $websiteSettings = [];
        

        if(! empty($settings['location_address']['ar'])){
            $websiteSettings['location_address']['ar'] = $settings['location_address']['ar'];
        }
        if(! empty($settings['location_address']['en'])){
            $websiteSettings['location_address']['en'] = $settings['location_address']['en'];
        }

        if(! empty($settings['footer_description']['ar'])){
            $websiteSettings['footer_description']['ar'] = $settings['footer_description']['ar'];
        }
        if(! empty($settings['footer_description']['en'])){
            $websiteSettings['footer_description']['en'] = $settings['footer_description']['en'];
        }
        
        if(! empty($settings['newsletter_description']['ar'])){
            $websiteSettings['newsletter_description']['ar'] = $settings['newsletter_description']['ar'];
        }
        if(! empty($settings['newsletter_description']['en'])){
            $websiteSettings['newsletter_description']['en'] = $settings['newsletter_description']['en'];
        }
        if(! empty($settings['section_features_description']['ar'])){
            $websiteSettings['section_features_description']['ar'] = $settings['section_features_description']['ar'];
        }
        if(! empty($settings['section_features_description']['en'])){
            $websiteSettings['section_features_description']['en'] = $settings['section_features_description']['en'];
        }
        if(! empty($settings['section_features_title']['ar'])){
            $websiteSettings['section_features_title']['ar'] = $settings['section_features_title']['ar'];
        }
        if(! empty($settings['section_features_title']['en'])){
            $websiteSettings['section_features_title']['en'] = $settings['section_features_title']['en'];
        }
        if(! empty($settings['section_work_title']['ar'])){
            $websiteSettings['section_work_title']['ar'] = $settings['section_work_title']['ar'];
        }
        if(! empty($settings['section_work_title']['en'])){
            $websiteSettings['section_work_title']['en'] = $settings['section_work_title']['en'];
        }
        if(! empty($settings['section_work_description']['ar'])){
            $websiteSettings['section_work_description']['ar'] = $settings['section_work_description']['ar'];
        }
        if(! empty($settings['section_work_description']['en'])){
            $websiteSettings['section_work_description']['en'] = $settings['section_work_description']['en'];
        }

        if(! empty($settings['section_screenshot_title']['ar'])){
            $websiteSettings['section_screenshot_title']['ar'] = $settings['section_screenshot_title']['ar'];
        }
        if(! empty($settings['section_screenshot_title']['en'])){
            $websiteSettings['section_screenshot_title']['en'] = $settings['section_screenshot_title']['en'];
        }

        if(! empty($settings['section_screenshot_description']['ar'])){
            $websiteSettings['section_screenshot_description']['ar'] = $settings['section_screenshot_description']['ar'];
        }
        if(! empty($settings['section_screenshot_description']['en'])){
            $websiteSettings['section_screenshot_description']['en'] = $settings['section_screenshot_description']['en'];
        }

        
        if(! empty($settings['section_packages_title']['ar'])){
            $websiteSettings['section_packages_title']['ar'] = $settings['section_packages_title']['ar'];
        }
        if(! empty($settings['section_packages_title']['en'])){
            $websiteSettings['section_packages_title']['en'] = $settings['section_packages_title']['en'];
        }

         
        if(! empty($settings['section_packages_description']['ar'])){
            $websiteSettings['section_packages_description']['ar'] = $settings['section_packages_description']['ar'];
        }
        if(! empty($settings['section_packages_description']['en'])){
            $websiteSettings['section_packages_description']['en'] = $settings['section_packages_description']['en'];
        }

        if(! empty($settings['section_reviews_title']['ar'])){
            $websiteSettings['section_reviews_title']['ar'] = $settings['section_reviews_title']['ar'];
        }

        if(! empty($settings['section_reviews_title']['en'])){
            $websiteSettings['section_reviews_title']['en'] = $settings['section_reviews_title']['en'];
        }
        if(! empty($settings['section_reviews_description']['en'])){
            $websiteSettings['section_reviews_description']['en'] = $settings['section_reviews_description']['en'];
        }
        if(! empty($settings['section_reviews_description']['ar'])){
            $websiteSettings['section_reviews_description']['ar'] = $settings['section_reviews_description']['ar'];
        }

        if(! empty($settings['section_questions_title']['ar'])){
            $websiteSettings['section_questions_title']['ar'] = $settings['section_questions_title']['ar'];
        }

        if(! empty($settings['section_questions_title']['en'])){
            $websiteSettings['section_questions_title']['en'] = $settings['section_questions_title']['en'];
        }
        if(! empty($settings['section_questions_description']['en'])){
            $websiteSettings['section_questions_description']['en'] = $settings['section_questions_description']['en'];
        }
        if(! empty($settings['section_questions_description']['ar'])){
            $websiteSettings['section_questions_description']['ar'] = $settings['section_questions_description']['ar'];
        }

        if(! empty($settings['section_features_image'])){
            $websiteSettings['section_features_image'] = $settings['section_features_image'];
        }

        if(! empty($settings['section_work_image'])){
            $websiteSettings['section_work_image'] = $settings['section_work_image'];
        }

        if(! empty($settings['section_questions_image'])){
            $websiteSettings['section_questions_image'] = $settings['section_questions_image'];
        }

        if(! empty($settings['support_email'])){
            $websiteSettings['support_email'] = $settings['support_email'];
        }

        if(! empty($settings['sales_email'])){
            $websiteSettings['sales_email'] = $settings['sales_email'];
        }

        if(! empty($settings['facbook_link'])){
            $websiteSettings['facbook_link'] = $settings['facbook_link'];
        }
        if(! empty($settings['twitter_link'])){
            $websiteSettings['twitter_link'] = $settings['twitter_link'];
        }
        if(! empty($settings['instagram_link'])){
            $websiteSettings['instagram_link'] = $settings['instagram_link'];
        }
        if(! empty($settings['pinterest_link'])){
            $websiteSettings['pinterest_link'] = $settings['pinterest_link'];
        }
        return $websiteSettings;

    }
}
