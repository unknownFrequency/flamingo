<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    // Setting default value of role to customer(id = 2)
//    protected $attributes = [
//        'role_id' => 2
//    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function publish(Post $post)
    {
        $this->posts()->save($post);
//        Post::create([
//            'title' => request('title'),
//            'body'  => request('body'),
//            'user_id' => auth()->id()
//        ]);
    }
}
