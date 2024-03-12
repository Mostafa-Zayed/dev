<?php 

namespace App\Repositories\InvoiceLayout;

use App\Repositories\InvoiceLayoutRepository;
use Illuminate\Support\Facades\DB;

class MysqlRepository extends InvoiceLayoutRepository
{
    public function getAll()
    {
        DB::table('business')->get();
    }

    public function store($businessData)
    {
        DB::table('business')->insert($businessData);
    }
}