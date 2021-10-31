<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class episode extends Model
{
    //
    protected $fillable = [
        'student_id','reserch_content', 'future_image', 'text1', 'text2', 'text3',
    ];

    public function student()
    {
        return $this->belongsTo('App\student');

    }
}
