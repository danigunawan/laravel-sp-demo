<?php

namespace App\Repositories;


use App\Contracts\Repositories\ListingInterface;

class ListingRepository extends Repository implements ListingInterface{
    public function all(){
        $this->model->get();
    }
} 