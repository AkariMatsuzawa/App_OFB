<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //

    protected $fillable = [
        'name', 'email', 'address','birthplace','birthdate','phone','univercity','univercity_group','faculty','subject','year','club_activities','qualification','p_language','gender','highschool','icon'
        ];


    public function offers()
    {
        return $this->hasMany('App\offer');
    }

    public function favorites()
    {
        return $this->hasMany('App\favorite');
    }

    public function messseges()
    {
        return $this->hasMany('App\messeage');
    }

    public function management_lists()
    {
        return $this->hasMany('App\management_lists');
    }

    public function ambitions()
    {
        return $this->hasMany('App\ambition');
    }

    public function images()
    {
        return $this->hasMany('App\image');
    }

    public function episodes()
    {
        return $this->hasMany('App\episode');
    }


}
