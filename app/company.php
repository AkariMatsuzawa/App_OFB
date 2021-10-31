<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Company extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','password',
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function offers()
    {
        return $this->hasMany('App\offer');

    }

    public function favorites()
    {
        return $this->hasMany('App\favorite');

    }

    public function messeages()
    {
        return $this->hasMany('App\messege');

    }

    public function management_lists()
    {
        return $this->hasMany('App\management_list');

    }

    public function company_details()
    {
        return $this->hasOne('App\company_details');

    }
}
