<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteItems extends Model
{
    protected $guarded = [];

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }
}
