<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $guarded = [];

    public function scopeProduct($query)
    {
        return $query->where('entity_type','product')->get();
    }

    public function scopeProductAttribute($query,$slug)
    {
        return $query->where('entity_type','product')
            ->whereSlug($slug);
    }

    public function options()
    {
        return $this->hasMany(AttributeOption::class);
    }
}
