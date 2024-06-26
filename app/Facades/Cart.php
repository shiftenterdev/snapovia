<?php
/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */

namespace App\Facades;

use App\Models\Order;
use App\Models\Quote;
use Illuminate\Support\Facades\Facade;

/**
 * Class Cart
 *
 * @method static bool check()
 * @method static bool removeFromCart($sku)
 * @method static bool updateQty($sku,$qty)
 * @method static bool addToCart($sku,$qty=1)
 * @method static int count()
 * @method static void applyShipping($shipping_id)
 * @method static void create()
 * @method static void applyCoupon($coupon_id)
 * @method static Quote get()
 * @method static Order toOrder()
 * @method static void remove()
 */
class Cart extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'cart';
    }
}
