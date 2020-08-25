<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $filable=['total','delivered'];

    public function orderItems()
    {
        return $this->belongsToMany([Product::class]);
    }

    public static function createOrder()
    {
        $user=Auth::user();
        //$order=$user->create->orders()->create()
    }

    
}

