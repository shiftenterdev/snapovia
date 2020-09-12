<?php
/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */

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
