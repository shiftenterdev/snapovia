<?php

/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */

namespace App\Helpers;

use App\Models\Quote;
use Illuminate\Support\Facades\Hash;

class Customer
{
    const CUSTOMER_SESSION_KEY = '_customer';

    /**
     * Login customer
     * @param $credentials
     * @return bool
     */
    public function attempt($credentials): bool
    {
        if (isset($credentials['email']) && isset($credentials['password'])) {
            $customer = \App\Models\Customer::whereEmail($credentials['email'])
                ->whereStatus(1)
                ->first();
            if ($customer) {
                if (Hash::check($credentials['password'], $customer->password)) {
                    $this->update($customer);
                    $this->mergeCart($customer->id);
                    return true;
                }
                return false;
            }
            return false;
        }
        return false;
    }

    /**
     * Update customer object
     * @param \App\Models\Customer $customer
     */
    public function update(\App\Models\Customer $customer): void
    {
        session([self::CUSTOMER_SESSION_KEY => $customer]);
    }

    /**
     * Merge cart with existing cart
     * @param int $customer_id
     * @return void
     */
    private function mergeCart($customer_id)
    {
        $existing_quote = Quote::where('customer_id', $customer_id)->first();
        if ($existing_quote) {
            \App\Facades\Cart::merge($existing_quote->id);
        } else {
            \App\Facades\Cart::addCustomerToQuote($customer_id);
        }
    }

    public function login($credentials): bool
    {
        if (isset($credentials['email']) && isset($credentials['password'])) {
            $customer = \App\Models\Customer::whereEmail($credentials['email'])
                ->whereStatus(1)
                ->first();
            if ($customer) {
                if (Hash::check($credentials['password'], $customer->password)) {
                    return true;
                }
                return false;
            }
            return false;
        }
        return false;
    }

    /**
     * Logout customer
     */
    public function logout(): void
    {
        session()->remove(self::CUSTOMER_SESSION_KEY);
    }

    /**
     * Get customer object
     * @return \App\Models\Customer
     */
    public function user(): ?\App\Models\Customer
    {
        if (!$this->check()) {
            return null;
        }
        $customer = \App\Models\Customer::find(session(self::CUSTOMER_SESSION_KEY)->customer_id);
        $this->update($customer);
        return session(self::CUSTOMER_SESSION_KEY) ?? null;
    }

    /**
     * Check if customer logged-in
     * @return bool
     */
    public function check(): bool
    {
        return session()->has(self::CUSTOMER_SESSION_KEY);
    }

    /**
     * @param array $data
     * @return \App\Models\Customer
     */
    public function create(array $data): \App\Models\Customer
    {
        $customer =  \App\Models\Customer::create([
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'],
            'email'      => $data['email'],
            'password'   => bcrypt($data['password']),
        ]);

        $this->login($data);

        return $customer;
    }
}
