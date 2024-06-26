<?php
/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Customer
 *
 * @method static bool attempt($credentials)
 * @method static \App\Models\Customer create(array $data)
 * @method static bool check()
 * @method static bool login($credentials)
 * @method static void logout()
 * @method static \App\Models\Customer user()
 */
class Customer extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'customer';
    }
}
