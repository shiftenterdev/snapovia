<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class Brand extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $guarded = [];

    protected $appends = [
        'logo',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['identifier'] = Str::slug($value);
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('brand')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;

    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
