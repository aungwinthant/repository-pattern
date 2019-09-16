<?php

namespace App\Repositories;

abstract class Repository{

    
    public function save(array $data){
        /*note this is for demonstration purpose 
        please be sure to filter the array with the data you want*/
        return $this->model->create($data);
    }

    public function update(array $data){
        $this->model->update($data);
    }

    public function list(){
        return $this->model->all();
    }
}