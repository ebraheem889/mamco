<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name',
        'company_name_en',
        'commercial_number',
        'tax_card',
        'address',
        'approved_policy',
        'telephone',
        'email',
        'password',
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


    public function sells(){

        return $this->hasMany(Sell::class);
    }


    public function getStatus(){

        return $this->status == 1 ?'Active':'UnActive';

    }


    public function setStatusActive(){

        return $this->status = 1;

    }
    public function setStatusDeActive(){

        return $this->status = 0;

    }
}
