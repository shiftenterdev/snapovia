<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class Vendor
 * @package App\Facades
 * @method static bool attempt($credentials)
 * @method static bool check()
 * @method static \App\Models\Vendor user()
 */
class Vendor extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'customer';
    }
}
