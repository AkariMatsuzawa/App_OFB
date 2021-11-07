<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    //
    protected $fillable = [
        'company_id','student_id','text',

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
