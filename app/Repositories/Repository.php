<?php

namespace App\Repositories;

abstract class Repository {

    public function __construct($model){
        $this->model = $model;
    }
} 