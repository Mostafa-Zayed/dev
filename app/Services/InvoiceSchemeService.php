<?php 

namespace App\Services;

use App\Repositories\InvoiceSchemeRepository;
use Illuminate\Support\Facades\DB;

class InvoiceSchemeService
{
    public $invoiceSchemeRepository;

    public function __construct(InvoiceSchemeRepository $invoiceSchemeRepository)
    {
        $this->invoiceSchemeRepository = $invoiceSchemeRepository;
    }

    public function getInvoiceScheme(int $invoiceSchemeId)
    {
        return $this->invoiceSchemeRepository->getById($invoiceSchemeId);
    }

    public function removeFromDefault(int $businessId)
    {
        DB::table('invoice_schemes')->where([
            ['business_id', '=', $businessId],
            ['is_default','=', 1]
        ])
        ->update([
            'is_default' => 0
        ]);
    }

    public function create($invoiceSchemeDetails)
    {
        return DB::table('invoice_schemes')->insert($invoiceSchemeDetails);
    }

    public function setDefault(int $invoiceSchemeId, int $businessId)
    {
        $this->removeFromDefault($businessId);
        DB::table('invoice_schemes')
        ->where([
            ['business_id', '=', $businessId],
            ['id','=', $invoiceSchemeId]
        ])
        ->update([
            'is_default' => 1
        ]);
    }

    public function forDropDown(int $businessId)
    {
        return $this->invoiceSchemeRepository->getAll($businessId)->pluck('name','id');
    }
}