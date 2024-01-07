<?php

namespace Modules\Website\Http\Requests\Sliders;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    public function prepareForValidation()
    {
        $this->merge([
            'number' => rand(1,11),
        ]);

        
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
           'number' => ['nullable','numeric'],
           'heading' => ['required','array'],
           'heading.*' => ['required','string','max:255'],
           'description' => ['required','array'],
           'description.*' => ['required','string'],
           'title' => ['nullable','array'],
           'title.*' => ['nullable','string','max:255'],
           'image' => ['required','image'],
           'app_store_link' => ['nullable'],
           'google_play_link' => ['nullable'],
           'external_link' => ['nullable'],
           'video_link' => ['nullable'],
           'status' => ['nullable','in:0,1'],
           'is_home' => ['nullable','in:0,1']
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
