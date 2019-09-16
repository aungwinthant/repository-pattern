<?php

namespace App\Repositories;

interface CategoryRepositoryInterface{
    
    public function list();

    public function save(array $data);

    public function update(array $data);
}