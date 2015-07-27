<?php

namespace App\Http\Controllers;


use App\Contracts\Repositories\ListingInterface;

class ListingsController extends Controller{

    public function __construct(ListingInterface $listings){
        $this->listings = $listings;
    }

    public function getIndex(){
        $listings = $this->listings->all();
        return view('listings.index', compact('listings'));
    }
} 