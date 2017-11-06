<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $guarded = ['id'];

    public function getCategoryNameAttribute(){
        $value = str_replace('_', ' ', $this->name);
        $value = ucwords($value);
        return $value;
    }

    /**
     * Get the comments for the blog post.
     */
    public function advertisements()
    {
        return $this->hasMany(Advertisement::class);
    }
}
