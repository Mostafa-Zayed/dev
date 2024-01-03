<?php

namespace Modules\Website\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'section_features_title' => ['sometimes','array'],
            'section_features_title.*' => ['sometimes','string','max:255'],
            'section_features_description' => ['sometimes','array'],
            'section_features_description_.*' => ['sometimes','string'],
            'section_features_image' => ['sometimes','file'],
            'section_work_title' => ['sometimes','array'],
            'section_work_title.*' => ['sometimes','string','max:255'],
            'section_work_description' => ['sometimes','array'],
            'section_work_description.*' => ['sometimes','string'],
            'section_work_image'  => ['sometimes','file'],
            'section_screenshot_title' => ['sometimes','array'],
            'section_screenshot_title.*' => ['sometimes','string','max:255'],
            'section_screenshot_description' => ['sometimes','array'],
            'section_screenshot_description.*' => ['sometimes','string'],
            'section_packages_title' => ['sometimes','array'],
            'section_packages_title.*' => ['sometimes','string','max:255'],
            'section_packages_description' => ['sometimes','array'],
            'section_packages_description.*' => ['sometimes','string','max:255'],
            'section_reviews_title' => ['sometimes','array'],
            'section_reviews_title.*' => ['sometimes','string','max:255'],
            'section_reviews_description' => ['sometimes','array'],
            'section_reviews_description.*' => ['sometimes','string'],
            'section_questions_title' => ['sometimes','array'],
            'section_questions_title.*' => ['sometimes','string','max:255'],
            'section_questions_description' => ['sometimes','array'],
            'section_questions_description.*' => ['sometimes','string'],
            'section_questions_image' => ['sometimes','file'],
            'section_posts_title' => ['sometimes','string','max:255'],
            'section_posts_title.*' => ['sometimes','array'],
            'section_posts_description' => ['sometimes','array'],
            'section_posts_description.*' => ['sometimes','string']
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
