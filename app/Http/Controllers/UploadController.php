<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageValidation;
use App\Product;
use App\ProductPhoto;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadform()
    {
        return view('admin.products.uploadform');
    }

    public function uploadSubmit(Request $request)
    {
        foreach ($request->photos as $photo) {
            $filename=$photo->getClientOriginalName();
            $photo->move('images',$filename);

            ProductPhoto::create([
                'product_id' => $request->product_id,
                'image_name' => $filename,
                'image' => '/images/'.$filename
            ]); 
        }
        return 'Upload successful!';
        
    }
}
