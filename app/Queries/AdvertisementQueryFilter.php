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

        if(isset($this->data['category'])){

            if($this->data['category']!='0') {
                $this->query = $this->query->where('category_id', $this->data['category']);
            }
        }

        if(isset($this->data['advertisement'])){

            $this->query = $this->query->where('name','like', '%'.$this->data['advertisement'].'%');
        }

        return $this->query->get();
    }
}