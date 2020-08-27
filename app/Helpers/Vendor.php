<?php

/**
 * @author Iftakharul Alam Bappa <iftakharul@strativ.se> 
 */
namespace App\Helpers;

use Illuminate\Support\Facades\Hash;
use App\Models\Product;

class Vendor
{
    const VENDOR_SESSION_KEY = '_vendor';

    /**
     * Login vendor
     * @param $credentials
     * @return bool
     */
    public function attempt($credentials):bool
    {
        if(isset($credentials['email']) && isset($credentials['password'])){
            $vendor = \App\Models\Vendor::whereEmail($credentials['email'])
                ->whereStatus(1)
                ->first();
            if($vendor){
                if (Hash::check($credentials['password'], $vendor->password)) {
                    $this->update($vendor);
                    return true;
                }
                return false;
            }
            return false;
        }
        return false;
    }

    /**
     * Check if vendor logged-in
     * @return bool
     */
    public function check():bool
    {
        return session()->has(self::VENDOR_SESSION_KEY);
    }

    /**
     * Logout vendor
     */
    public function logout():void
    {
        session()->remove(self::VENDOR_SESSION_KEY);
    }

    /**
     * Get vendor object
     * @return \App\Models\Vendor
     */
    public function user():?\App\Models\Vendor
    {
        return session(self::VENDOR_SESSION_KEY)??null;
    }

    /**
     * Update vendor object
     * @param \App\Models\Vendor $vendor
     */
    public function update(\App\Models\Vendor $vendor):void
    {
        session([self::VENDOR_SESSION_KEY=>$vendor]);
    }
}
