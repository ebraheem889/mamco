<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $guarded=[];



    public function User (){

        $this->belongsTo(User::class);

    }



    public function scopeWhenProductSearch($query , $search){

        return $query->when($search , function ($q) use ($search){

            return $q->where('product_name' , 'like' , "%$search%");


        });

    }

    public function scopeWhenProductAndCompanySearch($query , $search){

        return $query->when($search , function ($q) use ($search){

            return $q
                ->Where('company_name' , 'like' , "%$search%")
                ->orWhere('company_name_en' , 'like' , "%$search%");

        });

    }

    public function scopeActiveProduct($query){


        return $query->where(function ($q){

            return $q->where('status' ,'=' , 1);

        });


    }
    public function getStatus(){

        return $this->status == 1 ?'Active':'UnActive';

    }
    public function scopeAuthUser($query){


        return $query->where(function ($q){

            return $q->where('user_id' ,'=' ,auth()->user()->getAuthIdentifier());

        });


    }


}
