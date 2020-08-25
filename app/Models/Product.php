<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Product extends Model implements HasMedia
{
    use HasMediaTrait;

    public $guarded = [];

    protected $appends = [
        'base_image',
        'default_image'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function associcatedProducts()
    {
        return $this->hasMany(Product::class, 'parent_id');
    }

    public function scopeSearch($query, $search)
    {
        return $query->when($search['sku'] != '', function ($q) use ($search) {
            return $q->where('sku', $search['sku']);
        })->when($search['name'] != '', function ($q) use ($search) {
            return $q->where('name', 'LIKE', '%' . $search['name'] . '%');
        })->when($search['status'] != '', function ($q) use ($search) {
            return $q->where('status', $search['status']);
        })->when($search['visibility'] != '', function ($q) use ($search) {
            return $q->where('visibility', $search['visibility']);
        });
    }

    public function relatedProducts()
    {
//        return $this->hasMany(Product::class, 'parent_id');
    }

    public function parentProduct()
    {
        return $this->belongsTo(Product::class, 'parent_id');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(150)->height(150);
    }

    public function getBaseImageAttribute()
    {
        $file = $this->getMedia('products')->last();

        if ($file) {
            $file->url = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;

    }

    public function getPlaceholderImageAttribute()
    {
        return 'https://via.placeholder.com/80';
    }

    public function getSampleImageAttribute()
    {
        return '/sample-data/products/' . rand(0, 534) . '.jpg';
    }
}
