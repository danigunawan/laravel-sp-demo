<?php

namespace App\Repositories;

use App\Contracts\Repositories\ListingInterface;

class SpListingRepository extends Repository implements ListingInterface{
    public function all(){
        return $this->model->spAllListings();
    }
} 