<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    public $guarded = ['id'];

    /**
     * Get the comments for the blog post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
