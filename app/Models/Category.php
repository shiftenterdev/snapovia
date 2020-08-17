<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded;

    public function parentCategory()
    {
        return $this->hasOne(Category::class,'id','parent_id');
    }
}
