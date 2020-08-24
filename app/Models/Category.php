<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded;

    protected $appends = ['product_count'];

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id');

    }

    public function childCategories()
    {
        return $this->hasMany(Category::class, 'parent_id');

    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function getProductCountAttribute()
    {
        return 5;
    }
}
