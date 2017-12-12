<?php

namespace App;

use App\Scopes\ChatScope;
use YoHang88\LetterAvatar\LetterAvatar;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function advertisements()
    {
        return $this->hasMany(Advertisement::class);
    }

    public function getAvatarAttribute()
    {
        return new LetterAvatar($this->name);
    }
}
