<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceForm extends Model
{
    protected $table = 'service_forms';
    public function user()
    {
        return $this->belongsTo('App\UserModel', 'id', 'guest_id');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee', 'id', 'employee_id');
    }
}
