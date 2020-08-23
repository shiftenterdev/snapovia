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

    public function associcatedProducts()
    {
        return $this->hasMany(Product::class, 'parent_id');
    }

    public function relatedProducts()
    {
//        return $this->hasMany(Product::class, 'parent_id');
    }

    public function parentProduct()
    {
        return $this->belongsTo(Product::class, 'parent_id');
    }
}
