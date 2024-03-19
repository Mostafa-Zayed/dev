<?php 

namespace App\Services;

use App\Repositories\BusinessLocationRepository;

class BusinessLocationService
{
    public $businessLocationRepository;

    public function __construct(BusinessLocationRepository $businessLocationRepository)
    {
        $this->businessLocationRepository = $businessLocationRepository;
    }
    
}