<?php 

namespace App\Repositories\InvoiceScheme;

use App\InvoiceScheme;
use App\Repositories\InvoiceSchemeRepository;
use Illuminate\Support\Facades\DB;

class MysqlRepository extends InvoiceSchemeRepository
{
    public function getById(int $id)
    {
        return InvoiceScheme::find($id);
    }

    public function getAll(int $businessId)
    {
        return InvoiceScheme::ForBusiness($businessId)->get();
    }
}