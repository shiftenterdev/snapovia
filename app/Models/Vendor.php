<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasMany(VendorOrder::class);
    }

    public function products()
    {
        return $this->hasMany(VendorProduct::class);
    }

    public function settlements()
    {
        return $this->hasMany(VendorSettlement::class);
    }
}
