<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function associcateProducts()
    {
        return $this->hasManyThrough(Product::class,'product_links','product_id','child_id','id','id');
    }
}
