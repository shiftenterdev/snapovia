<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EntityAttribute extends Pivot
{
    protected $guarded = [];

    public $timestamps = false;

    public function attributeValue()
    {
        return $this->hasOne(EntityAttributeValue::class);
    }
}
