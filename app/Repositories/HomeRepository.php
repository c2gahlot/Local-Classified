<?php

namespace App\Repositories;

use App\Queries\AdvertisementQueryFilter;

class HomeRepository
{

    public function filter($data){

        return (new AdvertisementQueryFilter($data))->handle();
    }
}