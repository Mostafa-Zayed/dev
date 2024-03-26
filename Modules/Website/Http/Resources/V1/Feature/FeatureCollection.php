<?php

namespace Modules\Website\Http\Resources\V1\Feature;

use App\Traits\PaginationTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Api\V1\OfferPriceResource;

class FeatureCollection extends ResourceCollection
{
    use PaginationTrait;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'pagination' => $this->paginationModel($this),
            'data'     => GetAll::collection($this->collection)
        ];
    }
}
