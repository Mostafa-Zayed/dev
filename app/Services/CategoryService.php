<?php 

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;   
    }

    public function forDropDown(int $businessId, $type = null)
    {
        return $this->categoryRepository->forDropDown($businessId, $type)->pluck('name','id');
    }
}