<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function address()
    {
        return $this->hasMany(CustomerAddress::class);
    }
}
