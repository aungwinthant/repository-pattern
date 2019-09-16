<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends Repository implements CategoryRepositoryInterface{
    
    public function  __construct(Category $category)
    {
        $this->model = $category;
    }
}