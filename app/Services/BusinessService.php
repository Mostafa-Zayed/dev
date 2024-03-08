<?php 

namespace App\Services;

use App\Repositories\BusinessRepository;

class BusinessService
{
    public $businessRepository;

    public function __construct(BusinessRepository $businessRepository)
    {
        $this->businessRepository = $businessRepository;
    }
}