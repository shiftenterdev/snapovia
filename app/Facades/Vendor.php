<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class Vendor extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'customer';
    }
}
