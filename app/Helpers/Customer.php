<?php

/**
 * @author Iftakharul Alam Bappa <iftakharul@strativ.se> 
 */
namespace App\Helpers;

use Illuminate\Support\Facades\Hash;
use App\Models\Product;

class Customer
{
    const CUSTOMER_SESSION_KEY = '_customer';

    /**
     * Login customer
     * @param $credentials
     * @return bool
     */
    public function attempt($credentials):bool
    {
        if(isset($credentials['email']) && isset($credentials['password'])){
            $customer = \App\Models\Customer::whereEmail($credentials['email'])
                ->whereStatus(1)
                ->first();
            if($customer){
                if (Hash::check($credentials['password'], $customer->password)) {
                    $this->update($customer);
                    return true;
                }
                return false;
            }
            return false;
        }
        return false;
    }

    /**
     * Check if customer logged-in
     * @return bool
     */
    public function check():bool
    {
        return session()->has(self::CUSTOMER_SESSION_KEY);
    }

    /**
     * Logout customer
     */
    public function logout():void
    {
        session()->remove(self::CUSTOMER_SESSION_KEY);
    }

    /**
     * Get customer object
     * @return \App\Models\Customer
     */
    public function user():?\App\Models\Customer
    {
        $customer = \App\Models\Customer::find(session(self::CUSTOMER_SESSION_KEY)->customer_id);
        $this->update($customer);
        return session(self::CUSTOMER_SESSION_KEY)??null;
    }

    /**
     * Update customer object
     * @param \App\Models\Customer $customer
     */
    public function update(\App\Models\Customer $customer):void
    {
        session([self::CUSTOMER_SESSION_KEY=>$customer]);
    }
}