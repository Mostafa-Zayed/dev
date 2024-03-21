<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function prepareForValidation()
    {
        $this->merge([
            'business_id' => $this->session()->get('user.business_id'),
            'category_type' => request()->input('category_type'),
            'created_by'    => $this->session()->get('user.id'),
        ]);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           'business_id' => ['required','integer','exists:business,id'],
           'created_by'  => ['required','integer','exists:users,id'],
           'category_type' => ['required','string'],
           'name'          => ['required','string','max:255',Rule::unique('categories')->where(function ($query) {
            return $query->where('name', $this->name)->where('business_id','=',$this->business_id);
        })],
           'short_code'    => ['nullable','max:255'],
           'description'   => ['nullable'],
           'add_as_sub_cat'     => ['sometimes','in:0,1'],
           'parent_id'       =>  ['nullable','exists:categories,id']
        ];
    }

    public function passedValidation()
    {
        $this->merge([
            'parent_id' => (! empty($this->input('add_as_sub_cat')) && $this->input('add_as_sub_cat') == 1 && ! empty($this->input('parent_id'))) ?  $this->input('parent_id') : 0
        ]);
    }
}
