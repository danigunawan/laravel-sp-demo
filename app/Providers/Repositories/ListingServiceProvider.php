<?php

namespace App\Providers\Repositories;


use App\Listing;
use App\Repositories\SpListingRepository;
use Illuminate\Support\ServiceProvider;

class ListingServiceProvider extends ServiceProvider{
    public function register(){
        $this->app->bind('App\Contracts\Repositories\ListingInterface', function(){
            return new SpListingRepository(new Listing());
        });
    }
} 