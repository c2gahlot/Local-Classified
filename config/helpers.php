<?php

if (!function_exists('categories')) {

    function categories()
    {
        $categories = \App\Category::all();
        $value = ['0' => 'All'];
        foreach ($categories as $category) {
            $value[$category->id] = $category->category_name;
        }
        return $value;
    }
}

if (!function_exists('price_type')) {

    function price_type()
    {
        $value = [
            'NEGOTIABLE' => 'Negotiable',
            'FIXED'      => 'Fixed'
        ];

        return $value;
    }
}

?>