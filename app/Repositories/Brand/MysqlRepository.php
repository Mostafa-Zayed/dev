<?php 

namespace App\Repositories\Brand;

use App\Repositories\BrandRepository;
use App\Brands;
use Illuminate\Support\Facades\DB;
class MysqlRepository extends BrandRepository
{

    public function getAll(int $businessId)
    {
        return Brands::select(['name', 'description', 'id'])->where('business_id','=',$businessId)->get();
    }
}