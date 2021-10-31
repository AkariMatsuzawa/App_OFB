<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class management_list extends Model
{
    //
    protected $fillable = [
        'name', 'icon', 'birthplace',
        ];


    public function company()
    {
        return $this->belongsTo('App\company');

    }

    public function student()
    {
        return $this->belongsTo('App\student');

    }
}
