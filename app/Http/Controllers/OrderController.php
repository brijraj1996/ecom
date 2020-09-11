<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

class OrderController extends Controller
{
    public function Orders($type='')
    {
        if($type=='pending')
        {
            $orders=Order::where('delivered','0')->get();

        }

        elseif($type=='delivered')
        {
            $orders=Order::where('delivered','1')->get();
        }

        else{
            $orders=Order::all();
        }

        
        return view('admin.Order',compact('orders'));
    }

    public function orderDeliver(Request $request,$orderId)
    {
        $order=Order::find($orderId);
        if($request->has('delivered'))
        {
            $order->delivered=$request->delivered;
        }
        else{
            $order->delivered="0";
        }
        $order->delivered=$request->delivered;
        $order->save();

        return back();
    }

   
}
