<?php

namespace Modules\Website\Http\Requests\Sliders;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
//            'number' => ['sometimes','numeric'],
//            'heading' => ['required','string'],
//            'description' => ['required','string'],
//            'title' => ['sometimes','string'],
//            'image' => ['required','image'],
//            'app_store_link' => ['sometimes','string'],
//            'google_play_link' => ['sometimes','string'],
//            'external_link' => ['sometimes','string'],
//            'video_link' => ['sometimes','string'],
//            'status' => ['sometimes','in:0,1'],
//            'is_home' => ['sometimes','in:0,1']
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}
