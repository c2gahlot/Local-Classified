<?php

namespace App\Repositories;



use App\Advertisement;

class AdvertisementRepository
{

    public function find($id){

        return Advertisement::findOrFail($id);
    }
}