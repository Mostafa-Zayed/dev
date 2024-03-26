<?php

namespace Modules\Website\Http\Resources\V1\Feature;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'   => $this->id,
            'name' => $this->name,
            'key'  => $this->key,
        ];
    }
}