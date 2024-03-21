<?php 

namespace App\Repositories\Category;

use App\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\DB;

class MysqlRepository extends CategoryRepository
{
    public function getAll(int $businessId, $type = null) 
    {
        return ! empty($type) ? Category::ForBusiness($businessId)->Type($type)->get() : Category::ForBusiness($businessId)->get();
    }

    public function forDropDown(int $businessId, $type = null)
    {
        return Category::ForBusiness($businessId)->type($businessId, $type)->where('parent_id', 0)
                    ->select(DB::raw('IF(short_code IS NOT NULL, CONCAT(name, "-", short_code), name) as name'), 'id')
                    ->orderBy('name', 'asc')
                    ->get();
    }
}