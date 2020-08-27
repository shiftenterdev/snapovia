<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntityAttribute extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function attributeValue()
    {
        return $this->hasOne(EntityAttributeValue::class);
    }
}
