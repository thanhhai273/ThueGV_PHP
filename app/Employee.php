<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function user()
    {
        return $this->belongsTo('App\UserModel', 'id', 'id');
    }

    public function serviceform()
    {
        return $this->hasMany('App\ServiceForm', 'employee_id', 'id');
    }
}
