<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['name', 'description', 'category_id', 'price', 'image'];


    public function category()
    {
        return $this->BelongsTo(Category::class);
    }

    public static function createProduct($request)
    {
        $formInput=$request->except('image');
        
        $image=$request->image;
        if($image)
        {
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);

        }
        $formInput['image'] = '/images/'.$imageName;
      
        return self::create($formInput);
    }

    public function photo()
    {
        return $this->hasMany(ProductPhoto::class);
    }
}
