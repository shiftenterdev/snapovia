<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $guarded = [];

    public $hidden = ['create_at','updated_at'];

    public function orders()
    {
        return $this->hasManyThrough(Product::class,VendorOrder::class,'vendor_id','id','id','order_id');
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class,VendorProduct::class,'vendor_id','id','id','product_id');
    }

    public function settlements()
    {
        return $this->hasManyThrough(Product::class,VendorSettlement::class,'vendor_id','id','id','settlement_id');
    }
}
