<?php 

namespace App\Services;

use App\Repositories\CountryRepository;

class CountryService
{
    protected $countryRepository;

    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;    
    }
    public function forDropDown(int $businessId)
    {
        return $this->countryRepository->getAll($businessId)->pluck('name','id');
    }

}