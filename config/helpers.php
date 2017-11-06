<?php

if(! function_exists('categories')) {

    function categories()
    {
        $categories = \App\Category::all();
        $value = ['0' => 'All'];
        foreach ($categories as $category){
            $value[$category->id] = $category->category_name;
        }
        return $value;
    }
}

?>