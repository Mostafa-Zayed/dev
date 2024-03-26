<?php 

namespace App\Services;

use App\Repositories\BrandRepository;

class BrandService
{
    protected $brandRepository;


    public function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    public function getAllForBusiness($businessId = null)
    {
        return $this->brandRepository->getAll($businessId ?? request()->session()->get('user.business_id'));
    }
}