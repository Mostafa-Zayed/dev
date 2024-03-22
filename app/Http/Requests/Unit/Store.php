<?php

namespace App\Http\Requests\Unit;

use App\Traits\General;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Store extends FormRequest
{
    use General;
    public function prepareForValidation()
    {
        $this->merge([
            'business_id' => $this->session()->get('user.business_id'),
            'created_by'    => $this->session()->get('user.id'),
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
            'created_by'  => ['required', 'integer', 'exists:users,id'],
            'actual_name' => ['required', 'string', 'max:255', Rule::unique('units')->where(function ($query) {
                return $query->where('actual_name', $this->actual_name)->where('business_id', '=', $this->business_id)->where('deleted_at','=',null);
            })],
            'short_name'  => ['nullable', 'max:255', Rule::unique('units')->where(function ($query) {
                return $query->where('short_name', $this->short_name)->where('business_id', '=', $this->business_id)->where('deleted_at','=',null);
            })],
            'allow_decimal' => ['required', 'in:0,1'],
            'base_unit_id' => ['nullable','exists:units,id'],
            'base_unit_multiplier' => ['nullable'],
            'define_base_unit'  => ['sometimes','in:0,1']
        ];
    }

    public function passedValidation()
    {
        if ($this->has('define_base_unit') && !empty($this->base_unit_id) && !empty($this->base_unit_multiplier)) {
            $base_unit_multiplier = self::num_uf($this->base_unit_multiplier);
            if ($base_unit_multiplier != 0) {
                $this->base_unit_id = $this->base_unit_id;
                $this->base_unit_multiplier = $base_unit_multiplier;
            }
        }
    }
}
