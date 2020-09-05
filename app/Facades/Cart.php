<?php


namespace App\Facades;


use App\Models\Quote;
use Illuminate\Support\Facades\Facade;


/**
 * Class Cart
 * @package App\Facades
 * @method static bool check()
 * @method static bool removeFromCart($sku)
 * @method static bool updateQty($sku,$qty)
 * @method static bool addToCart()
 * @method static int count()
 * @method static Quote get()
 * @method static void remove()
 */
class Cart extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'cart';
    }
}