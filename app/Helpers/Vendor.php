<?php

/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */

namespace App\Helpers;

use Illuminate\Support\Facades\Hash;

class Vendor
{
    const VENDOR_SESSION_KEY = '_vendor';

    /**
     * Login vendor
     */
    public function attempt($credentials): bool
    {
        if (isset($credentials['email']) && isset($credentials['password'])) {
            $vendor = \App\Models\Vendor::whereEmail($credentials['email'])
                ->whereStatus(1)
                ->first();
            if ($vendor) {
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
     */
    public function check(): bool
    {
        return session()->has(self::VENDOR_SESSION_KEY);
    }

    /**
     * Logout vendor
     */
    public function logout(): void
    {
        session()->remove(self::VENDOR_SESSION_KEY);
    }

    /**
     * Get vendor object
     */
    public function user(): ?\App\Models\Vendor
    {
        return session(self::VENDOR_SESSION_KEY) ?? null;
    }

    /**
     * Update vendor object
     */
    public function update(\App\Models\Vendor $vendor): void
    {
        session([self::VENDOR_SESSION_KEY => $vendor]);
    }
}
