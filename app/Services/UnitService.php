<?php 

namespace App\Services;

use App\Repositories\UnitRepository;
use App\Unit;
use Illuminate\Support\Facades\Hash;

class UnitService
{
    protected $unitRepository;

    public function __construct(UnitRepository $unitRepository)
    {
        $this->unitRepository = $unitRepository;
    }

    public function getAllForBusiness($businessId = null)
    {
        return $this->unitRepository->getAll($businessId ?? request()->session()->get('user.business_id'));
    }

    /**
     * Return list of units for a business
     *
     * @param  int  $business_id
     * @param  bool  $show_none = true
     * @return array
     */
    public function forDropDown($businessId = null , $showNone = false, $onlyBase = true)
    {
        $units = $this->unitRepository->forDropDown($businessId ?? request()->session()->get('user.business_id'), $showNone, $onlyBase);
        return $showNone ? $units->pluck('name','id')->prepend(__('messages.please_select'), '') : $units->pluck('name','id');
    }

    public function addNew(array $unitData)
    {
        return $this->unitRepository->store($unitData);
    }

    public function getOne(int $id, $businessId =  null)
    {
        return $this->unitRepository->getOne($businessId ?? request()->session()->get('user.business_id'), $id);
    }

    public function isUnitAssociatedWithProduct(int $unitId)
    {
        return $this->unitRepository->isUnitAssociatedWithProduct($unitId);
    }
}