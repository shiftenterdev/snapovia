<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $guarded = [];

    public function items()
    {
        return $this->hasMany(QuoteItems::class);
    }
}
