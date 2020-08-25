<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class FrontController extends Controller
{
    //
    public function index()
    {
        $shirts=Product::all();

        return view('front.home',compact('shirts'));
    }

    public function shirts()
    {
        $shirts=Product::all();
        return view('front.shirts',compact('shirts'));
        
    }

    public function shirt($id)
    {
        $product = Product::find($id);
        return view('front.shirt', compact('product'));
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
