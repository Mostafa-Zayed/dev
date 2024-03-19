<?php 

namespace App\Services;

use App\Repositories\CityRepository;

class CityService
{
    protected $cityRepository;

    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;    
    }
    public function forDropDown(int $businessId)
    {
        return $this->cityRepository->getAll($businessId)->pluck('name','id');
    }
}