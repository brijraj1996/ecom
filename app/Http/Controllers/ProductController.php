<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Http\Requests\ImageValidation;
use App\Http\Requests\multipleImageValid;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $product=Product::all();
        return view('admin.products.create',compact('categories','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(multipleImageValid $request)
    {
        $validatedData=$request->validated();
        $photosData = $request->photos;

        $product = Product::createProduct($validatedData, $photosData);
        // if($product) {
            return redirect()->route('admin.index');      
        // }
    }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('front.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(multipleImageValid $request,Product $product)
    {
        #dd($product);
       $product->update($request->all());
       return redirect(route('products.index'))->with('message','Product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Product::findOrFail($id);
        $del->delete();
        return redirect()->back();


    }

    

    


    
}
