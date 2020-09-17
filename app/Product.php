<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\multipleImageValid;


class Product extends Model
{
    protected $fillable =['name', 'description', 'category_id', 'price', 'image'];


    public function category()
    {
        return $this->BelongsTo(Category::class);
    }

    public static function createProduct($productData, $photos)
    {
        
        $product= Product::create($productData);

        foreach ($photos as $photo) {
            $filename=$photo->getClientOriginalName();
            $photo->move('images',$filename);

            ProductPhoto::create([
                'product_id' => $product->id,
                'image_name' => $filename,
                'image' => '/images/'.$filename
                
            ]); 
        }
        return true;

    }
    public function photo()
    {
        return $this->hasMany(ProductPhoto::class);
    }
    
}
