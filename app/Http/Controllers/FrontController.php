<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class FrontController extends Controller
{
    //
    public function index()
    {
        $products=Product::all();

        return view('front.home',compact('products'));
    }

    public function products()
    {
        $products=Product::all();
        return view('front.products',compact('products'));
        
    }

    public function product($id)
    {
        $product = Product::find($id);
        return view('front.product', compact('product'));
    }

    public function login()
    {
        return view('front.user-login');
    }

    public function success()
    {
        return view('front.success');
    }

    public function logout()
    {
        return view('front.logout');
    }
}
