<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klippekort extends Model
{
  protected $fillable = ['hoursMax', 'hoursSpend', 'user_id', 'id', 'updated_at'];
}
