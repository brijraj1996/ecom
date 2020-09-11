<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    protected $fillable =['image','image_name','product_id'];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    // public static function addImage($request)
    // {
    //     $formInput=$request->except('image');
        
    //     $image=$request->image;
    //     if($image)
    //     {
    //         $imageName=$image->getClientOriginalName();
    //         $image->move('images',$imageName);

    //     }
    //     $formInput['image'] = '/images/'.$imageName;
      
    //     return self::create($formInput);
    // }
}
