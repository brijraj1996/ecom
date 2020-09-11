<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
// use Overtrue\LaravelShoppingCart\Cart;
use App\User;

class Order extends Model
{
    //
    protected $fillable=['total','delivered', 'user_id'];

    public function orderItems()
    {
        return $this->belongsToMany(Product::class)->withPivot('qty','total');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function createOrder()
    {
      
       $order= Order::Create([
           'user_id' => Auth::Id(),
           'delivered'=>0,
           'total'=>\ShoppingCart::total()
       ]);
        
       
       $cartItems = \ShoppingCart::all();
       foreach($cartItems as $cartItem)
       {
            $order->orderItems()->attach($cartItem['id'],[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->total
            ]);
        }
        
    }

    
}

