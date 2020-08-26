<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorSettlement extends Model
{
    protected $guarded = [];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
