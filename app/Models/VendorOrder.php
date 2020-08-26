<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorOrder extends Model
{
    protected $guarded = [];

    public function vendor()
    {
        $this->belongsTo(Vendor::class);
    }
}
