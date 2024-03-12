<?php 

namespace App\Repositories\InvoiceSchema;

use App\Repositories\InvoiceSchemeRepository;
use Illuminate\Support\Facades\DB;

class MysqlRepository extends InvoiceSchemeRepository
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