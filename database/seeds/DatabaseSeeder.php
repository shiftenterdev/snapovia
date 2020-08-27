<?php

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
        $this->call(BlogSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CustomerGroupSeeder::class);
        $this->call(CmsSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
