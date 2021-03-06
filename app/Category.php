<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $fillable = ['name'];

    public function products()
    {
        //return $this->hasMany('App\Product'); or i can write:
        return $this->hasMany(Product::class);
    }


    public static function createCategory($request)
    {
        $categories = new self();

        $categories->name = request('name');

        $categories->save();
    }

}
