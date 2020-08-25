<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

class OrderController extends Controller
{
    public function Orders()
    {
        $orders=Order::all();
        
        return view('admin.orders',compact('orders'));
    }

    public function store(Request $request )
    {
        
    }
}
