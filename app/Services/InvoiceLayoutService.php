<?php 

namespace App\Services;

use App\Repositories\InvoiceLayoutRepository;

class InvoiceLayoutService
{
    public $invoiceLayoutRepository;

    public function __construct(InvoiceLayoutRepository $invoiceLayoutRepository)
    {
        $this->invoiceLayoutRepository = $invoiceLayoutRepository;
    }

    
}