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
            'section_features_title' => ['nullable','array'],
            'section_features_title.*' => ['nullable','string','max:255'],
            'section_features_description' => ['nullable','array'],
            'section_features_description_.*' => ['nullable','string'],
            'section_features_image' => ['nullable','file'],
            'section_work_title' => ['nullable','array'],
            'section_work_title.*' => ['nullable','string','max:255'],
            'section_work_description' => ['nullable','array'],
            'section_work_description.*' => ['nullable','string'],
            'section_work_image'  => ['nullable','file'],
            'section_screenshot_title' => ['nullable','array'],
            'section_screenshot_title.*' => ['nullable','string','max:255'],
            'section_screenshot_description' => ['nullable','array'],
            'section_screenshot_description.*' => ['nullable','string'],
            'section_packages_title' => ['nullable','array'],
            'section_packages_title.*' => ['nullable','string'],
            'section_packages_description' => ['nullable','array'],
            'section_packages_description.*' => ['nullable','string'],
            'section_reviews_title' => ['nullable','array'],
            'section_reviews_title.*' => ['nullable','string','max:255'],
            'section_reviews_description' => ['nullable','array'],
            'section_reviews_description.*' => ['nullable','string'],
            'section_questions_title' => ['nullable','array'],
            'section_questions_title.*' => ['nullable','string','max:255'],
            'section_questions_description' => ['nullable','array'],
            'section_questions_description.*' => ['nullable','string'],
            'section_questions_image' => ['nullable','file'],
            // 'section_posts_title' => ['nullable','string','max:255'],
            // 'section_posts_title.*' => ['nullable','array'],
            // 'section_posts_description' => ['nullable','array'],
            // 'section_posts_description.*' => ['nullable','string']
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
