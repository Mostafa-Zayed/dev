<?php

namespace App\Http\Requests\Warranty;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Store extends FormRequest
{
    public function prepareForValidation()
    {
        $this->merge([
            'business_id' => $this->session()->get('user.business_id'),
        ]);
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'business_id' => ['required', 'integer', 'exists:business,id'],
            'name' => ['required', 'string', 'max:255', Rule::unique('warranties')->where(function ($query) {
                return $query->where('name', $this->name)->where('business_id', '=', $this->business_id);
            })],
            'duration'  => ['required', 'integer'],
            'description' => ['nullable'],
            'duration_type' => ['required','in:days,months,years']
        ];
    }
}
