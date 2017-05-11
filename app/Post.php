<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // For allowing Mass Assignments. Like in Rails
    protected $fillable = ['title', 'body'];
}
