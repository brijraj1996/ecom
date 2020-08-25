<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['name', 'description', 'category_id', 'price', 'image'];


    public function category()
    {
        return $this->BelongsTo(Categories::class);
    }

    
}
