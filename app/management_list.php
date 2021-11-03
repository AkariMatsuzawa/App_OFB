<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class management_list extends Model
{
    //
    protected $fillable = [
        'company_id','student_id','name', 'univercity', 'faculty','subject','gender',
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
