<?php

namespace App\Repositories;

use App\User;

class UserRepository
{

    public function findAds()
    {
        return auth()->user()->advertisements;
    }
}