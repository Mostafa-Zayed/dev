<?php 

namespace App\Services;

use App\Repositories\SellingPriceGroupRepository;

class SellingPriceGroupService
{
    public $sellingPriceGroupRepository;

    public function __construct(SellingPriceGroupRepository $sellingPriceGroupRepository)
    {
        $this->sellingPriceGroupRepository = $sellingPriceGroupRepository;
    }

    public function forDropDown(int $businessId, $withDefault = true)
    {
        $sellingPriceGroups = $this->sellingPriceGroupRepository->getAll($businessId);
        
        if ($withDefault && isHasPermission(['access_default_selling_price'])) {
            $dropdown[0] = __('lang_v1.default_selling_price');
        }

        foreach ($sellingPriceGroups as $sellingPriceGroup) {
            if (isHasPermission(['selling_price_group.' . $sellingPriceGroup->id])) {
                $dropdown[$sellingPriceGroup->id] = $sellingPriceGroup->name;
            }
        }

        return $dropdown;
    }
}