<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

trait ModelFromObj{
    public function newFromObj(\StdClass $obj){
        return (new static)->fill((array) $obj);
    }
} 