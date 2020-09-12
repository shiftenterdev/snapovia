<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

//    public static function boot()
//    {
//        parent::boot();
//
//        static::created(function ($model) {
//            $model->order_id = '1' . str_pad($model->id, 6, 0, STR_PAD_LEFT);
//            $model->invoice_id = '1' . str_pad($model->id, 6, 0, STR_PAD_LEFT);
//        });
//    }

    protected static function booted()
    {
        static::creating(function ($order) {
            $last_id = Order::select('id')->max('id') ?? 1;
            $order->order_id = $last_id + 10000;
            $order->invoice_id = $last_id + 10000;
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
        return $this->belongsTo(CartPriceRule::class, 'coupon_id', 'id');
    }
}
