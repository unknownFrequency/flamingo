<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
// Here we can do just App\Task->incomplete();
//    public static function incomplete() {
//        //static instead of Task
//        return static::where('completed', 0)->get();
//    }

    // Allows us to do Task::incomplete() and accept a query
    // eg. App\Task::incomplete()->get() || ->where('id', '>=', 2)->get();
    public function scopeIncomplete($query)
    {
        return $query->where('completed', 0);
    }

}
