<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Product extends Model implements HasMedia
{
    use HasMediaTrait;

    const CATALOG = [2, 4];
    const SEARCH = [1, 4];

    public $guarded = [];

    protected $paginateCount = 20;

    protected $appends = [
        'base_image',
        'sample_image'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function associcatedProducts()
    {
        return $this->hasMany(Product::class, 'parent_id');
    }

    public function tax()
    {
        return $this->belongsTo(TaxClass::class);
    }

    public function scopeGrid($query, $search)
    {
        return $query->when($search['id'] != '', function ($q) use ($search) {
            if (trim(strpos($search['id'], '-'))) {
                $ids = explode('-', $search['id']);
                return $q->whereBetween('id', [$ids[0], $ids[1]]);
            } else {
                return $q->where('id', $search['id']);
            }
        })->when($search['price'] != '', function ($q) use ($search) {
            return $q->where('price', ($search['price'] * 100));
        })->when($search['sku'] != '', function ($q) use ($search) {
            return $q->where('sku', $search['sku']);
        })->when($search['product_type'] != '', function ($q) use ($search) {
            return $q->where('product_type', $search['product_type']);
        })->when($search['name'] != '', function ($q) use ($search) {
            return $q->where('name', 'LIKE', '%' . $search['name'] . '%');
        })->when($search['status'] != '', function ($q) use ($search) {
            return $q->where('status', $search['status']);
        })->when($search['visibility'] != '', function ($q) use ($search) {
            return $q->where('visibility', $search['visibility']);
        })->select(['name', 'visibility', 'product_type', 'id', 'special_price', 'price', 'sku', 'status', 'qty'])
            ->paginate($this->paginateCount);
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            return $query->where(function ($q) use ($search) {
                $q->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('sku', 'LIKE', $search . '%');
            })
                ->whereStatus(1)
                ->whereIn('visibility', self::SEARCH)
                ->select(['name', 'product_type', 'special_price', 'price', 'sku', 'id', 'url_key'])
                ->paginate(6);
        }
        return [];
    }

    public function scopeHome($query, $count = 8)
    {
        return $query->select(['name', 'product_type', 'special_price', 'price', 'sku', 'id', 'url_key', 'visibility'])
            ->whereStatus(1)
            ->whereIn('visibility', self::CATALOG)
            ->orderBy('id', 'desc')
            ->limit($count)
            ->get();
    }

    public function scopeFront($query,$sortBy,$category_id=null)
    {
        return $query->whereStatus(1)
//            ->whereIn('visibility', self::CATALOG)
            ->when($category_id,function ($query) use ($category_id){
                $query->whereHas('categories',function ($q) use ($category_id){
                    if($category_id==1){
                        $q->where('categories.parent_id', $category_id);
                    }else {
                        $q->where('categories.id', $category_id);
                    }
                });
            })
            ->sort($sortBy)
            ->select(['name', 'id', 'price', 'sku', 'url_key','qty']);
    }

    public function scopeSort($query, $sort_by)
    {
        return $query->when($sort_by, function ($q)use ($sort_by) {
            $sort = explode('_',$sort_by);
            return $q->orderBy($sort[0], $sort[1]);
        });
    }

    public function scopeFilter($query)
    {
        return $query;
    }

    public function relatedProducts()
    {
//        return $this->hasMany(Product::class, 'parent_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
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
        return '/sample-data/products/' . ($this->id % 50) . '.jpg';
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'entity_attributes', 'entity_id', 'attribute_id');
    }

    public function attributeValues()
    {
        return $this->hasMany(EntityAttribute::class, 'entity_id');
    }
}
