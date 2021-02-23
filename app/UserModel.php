<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';
    public function employee()
    {
        return $this->hasOne('App\Employee', 'id', 'id');
    }

    public function serviceform()
    {
        return $this->hasMany('App\ServiceForm', 'guest_id', 'id');
    }
}
