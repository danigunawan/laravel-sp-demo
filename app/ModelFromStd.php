<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

trait ModelFromStd{
    public function newFromStd(\StdClass $std){
        return (new static)->fill((array) $std);
    }
} 