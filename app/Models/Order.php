<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function items()
    {
        return $this->hasMany(OrderItems::class);
    }

    public function billingInfo()
    {
        return $this->hasOne(BillingInfo::class);
    }

    public function shippingInfo()
    {
        return $this->hasOne(ShippingInfo::class);
    }

    public function paymentInfo()
    {
        return $this->hasOne(PaymentInfo::class);
    }
}
