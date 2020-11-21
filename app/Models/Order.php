<?php
/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */
namespace App\Models;

use App\QueryFilters\Email;
use App\QueryFilters\OrderId;
use App\QueryFilters\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Order extends Model
{
    protected $guarded = [];

    protected $paginateCount = 15;

    protected static function booted()
    {
        static::creating(function ($order) {
            $last_id = Order::select('id')->max('id') ?? 1;
            $order->order_id = $last_id + 10000;
            $order->invoice_id = $last_id + 10000;
        });
    }

    public function scopeGrid($query)
    {
        return app(Pipeline::class)
            ->send($query)
            ->through([
                OrderStatus::class,
                OrderId::class,
                Email::class,
            ])
            ->thenReturn()
            ->paginate($this->paginateCount);
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
        return $this->hasOne(Payment::class);
    }

    public function coupon()
    {
        return $this->belongsTo(CartPriceRule::class, 'coupon_id', 'id');
    }
}
