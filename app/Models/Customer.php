<?php

namespace App\Models;

use App\QueryFilters\Email;
use App\QueryFilters\FirstName;
use App\QueryFilters\LastName;
use App\QueryFilters\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Support\Str;

class Customer extends Model
{
    protected $paginateCount = 15;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model){
            $model->customer_group_id = 1;
            $model->api_token = Str::random(60);
        });
    }

    public function scopeGrid($query)
    {
        return app(Pipeline::class)
            ->send($query)
            ->through([
                Status::class,
                FirstName::class,
                LastName::class,
                Email::class,
            ])
            ->thenReturn()
            ->paginate($this->paginateCount);
    }

    public function getCustomerIdAttribute()
    {
        return $this->id;
    }

    public function address()
    {
        return $this->hasMany(CustomerAddress::class);
    }

    public function wishlist()
    {
        return $this->belongsToMany(Product::class,'wishlists');
    }
}
