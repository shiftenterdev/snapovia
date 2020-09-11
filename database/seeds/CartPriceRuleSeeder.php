<?php

use Illuminate\Database\Seeder;

class CartPriceRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CartPriceRule::create([
            'name'              => 'Introduction',
            'Description'       => 'Get 20% discount on checkout',
            'status'            => 1,
            'per_customer'      => 3,
            'max_use'           => 10,
            'customer_group_id' => 0,
            'coupon_code'       => '1122G',
            'discount_amount'   => 20.00,
            'discount_type'     => 'PERCENT',
            'conditions'        => '{}'
        ]);
    }
}
