<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests\addressvalid;
use App\Order;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Rfc4122\Validator;

// use Illuminate\Support\Facades\Auth;



class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
        'address' => 'required',
        'city' => 'required',
        'phone' => 'required',
        'zip' => 'required|integer',
        'phone' => 'required|integer',
        'state' => 'required',
        'country' =>'required'
       
        ]);   
        
        // $validated = $request->validated();
        \Auth::user()->address()->create($request->all());
        Order::createOrder();

        
        return redirect()->back();

        // dd($request->all());
            
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
