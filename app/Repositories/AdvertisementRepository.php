<?php

namespace App\Repositories;

use App\Advertisement;

class AdvertisementRepository
{

    public function find($id)
    {

        return Advertisement::with('user')->findOrFail($id);
    }

    public function save($data)
    {
        $data = [
            "title"       => $data['title'],
            "price"       => $data['price'],
            "price_type"  => $data['price_type'],
            "user_id"     => auth()->user()->id,
            "category_id" => $data['category'],
            "description" => $data['description'],
            "city"        => $data['city']
        ];

        return Advertisement::create($data);
    }

    public function update($data, $id)
    {
        $advertisement = $this->find($id);

        $data = [
            "title"       => $data['title'],
            "price"       => $data['price'],
            "price_type"  => $data['price_type'],
            "category_id" => $data['category'],
            "description" => $data['description'],
            "city"        => $data['city']
        ];

        $advertisement->update($data);

        return $advertisement;
    }
}