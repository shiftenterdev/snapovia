<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Quote extends Model
{
    protected $guarded = [];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model){
            $model->quote_id = (string) Uuid::generate();
        });
    }

    public function items()
    {
        return $this->hasMany(QuoteItems::class);
    }
}
