<?php 

namespace App\Services;

use App\Repositories\WarrantyRepository;
use App\Warranty;

class WarrantyService
{
    protected $warrantyRepository;

    public function __construct(WarrantyRepository $warrantyRepository)
    {
        $this->warrantyRepository = $warrantyRepository;
    }

    public function getAllForBusiness($businessId = null)
    {
        return $this->warrantyRepository->getAll($businessId ?? request()->session()->get('user.business_id'));
    }

    public function create(array $warrantyData)
    {
        return $this->warrantyRepository->store($warrantyData);
    }

    public function getOne(int $id,$businessId = null)
    {
        return $this->warrantyRepository->getOne($id, $businessId ?? request()->session()->get('user.business_id'));
    }
}