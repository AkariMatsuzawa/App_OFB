<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_details extends Model
{
    //
    public function company()
    {
        return $this->belongsTo('App\company');

    }
}
