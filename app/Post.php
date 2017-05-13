<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    // For allowing Mass Assignments. Like in Rails
    // protected $fillable = ['title', 'body'];

    // Fields not allowed in Mass Assignment
    protected $guarded = [];

    // Call this as a property instead of as a function to let Laravel eager-load the HasMany relationship
    // $post->comments (try in tinker)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
