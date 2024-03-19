<?php 

namespace App\Repositories\InvoiceLayout;

use App\InvoiceLayout;
use App\Repositories\InvoiceLayoutRepository;
use Illuminate\Support\Facades\DB;

class MysqlRepository extends InvoiceLayoutRepository
{
    public function store($businessData)
    {
        DB::table('business')->insert($businessData);
    }

    public function getAll(int $businessId)
    {
        return InvoiceLayout::ForBusiness($businessId)->get();
    }
}