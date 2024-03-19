<?php 

namespace App\Repositories\SellingPriceGroup;

use App\Repositories\SellingPriceGroupRepository;
use Illuminate\Support\Facades\DB;
use App\SellingPriceGroup;

class MysqlRepository extends SellingPriceGroupRepository
{
    public function getAll(int $businessId)
    {
        return SellingPriceGroup::ForBusiness($businessId)->active()->get();
    }
}