<?php
/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */
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
        self::creating(function ($model) {
            $model->quote_id = (string)Uuid::generate();
        });
    }

    public function getRouteKeyName()
    {
        return 'quote_id';
    }

    public function scopeAddToCart(Quote $quote, $sku, $qty)
    {
        $product = $this->product($sku);
        $this->items()->create([
            'product_id' => $product->id,
            'name'       => $product->name,
            'price'      => amount($product->price),
            'qty'        => $qty,
            'subtotal'   => (int)$qty * amount($product->price)
        ]);
    }

    protected function product($sku)
    {
        return Product::whereSku($sku)->firstOrFail();
    }

    public function items()
    {
        return $this->hasMany(QuoteItems::class);
    }
}
