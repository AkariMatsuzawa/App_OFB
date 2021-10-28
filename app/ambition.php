<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ambition extends Model
{
    //
    protected $fillable = [
        'industry','work','place','type'];

    public function student()
    {
        return $this->belongsTo('App\student');

    }
}
