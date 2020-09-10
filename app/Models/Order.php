<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model){
            $model->order_id = '1'.str_pad($model->id,6,0,STR_PAD_LEFT);
            $model->invoice_id = '1'.str_pad($model->id,6,0,STR_PAD_LEFT);
        });
    }

    public function items()
    {
        return $this->hasMany(OrderItems::class);
    }

    public function billing()
    {
        return $this->hasOne(OrderBilling::class);
    }

    public function shipping()
    {
        return $this->hasOne(OrderShipping::class);
    }

    public function paymentInfo()
    {
        return $this->hasOne(PaymentInfo::class);
    }

    public function coupon()
    {
        return $this->belongsTo(CartPriceRule::class,'coupon_id','id');
    }
}
