<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    //
    public function company()
    {
        return $this->belongsTo('App\company');

    }

    public function student()
    {
        return $this->belongsTo('App\student');

    }
}
