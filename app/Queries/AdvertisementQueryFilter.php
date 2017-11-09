<?php

namespace App\Queries;

use App\Category;
use App\Advertisement;

class AdvertisementQueryFilter
{

    public $data;

    public function __construct($data){

        $this->data = $data;
        $this->query = Advertisement::with('category');
    }

    public function handle(){


        if(isset($this->data['city'])){

            $this->query = $this->query->where('city','like', '%'.$this->data['city'].'%');
        }

        if(isset($this->data['category'])){

            if($this->data['category']!='0') {
                $this->query = $this->query->where('category_id', $this->data['category']);
            }
        }

        if(isset($this->data['title'])){

            $this->query = $this->query->where('title','like', '%'.$this->data['title'].'%');
        }

        return $this->query->get();
    }
}