<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountryTableSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CustomerGroupSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(CmsSeeder::class);
        $this->call(ShippingTableSeeder::class);
        $this->call(CartPriceRuleSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
