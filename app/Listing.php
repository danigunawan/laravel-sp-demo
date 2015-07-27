<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Listing extends Model{

    use ModelFromObj;

    protected  $table = 'listings';
    public $fillable = ['id', 'title', 'description'];

    public function spAllListings(){
        $listings = DB::select('CALL sp_all_listings()');
        return new Collection(array_map(function($listing){
            $model = $this->newFromObj($listing);
            $model->exist = true;
            return $model;
        }, $listings));
    }
} 