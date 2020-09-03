<?php

namespace App\Models;

use App\QueryFilters\EntityId;
use App\QueryFilters\Name;
use App\QueryFilters\UrlKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Category extends Model
{
    protected $guarded;

    protected $appends = ['product_count'];

    protected $paginateCount = 20;

    public function scopeGrid($query)
    {
        return app(Pipeline::class)
            ->send($query)
            ->through([
                Name::class,
                EntityId::class,
                UrlKey::class,
            ])
            ->thenReturn()
            ->paginate($this->paginateCount);
    }

    public function parentCategory()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }

    public function childCategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function getTreeAttribute()
    {
        foreach ($this->childCategories() as $child)
        {
            return '';
        }
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
