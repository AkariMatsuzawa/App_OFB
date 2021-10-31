<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_details extends Model
{
    protected $fillable = [
        'address', 'listing_classification','place', 'industry', 'type', 'employees', 'manager',
        ];
    //
    public function company()
    {
        return $this->belongsTo('App\company');

    }
}
