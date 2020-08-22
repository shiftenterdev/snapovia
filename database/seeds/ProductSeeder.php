<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 200; $i++) {
            $product = \App\Models\Product::create([
                'sku'               => ucfirst($faker->word),
                'name'              => ucfirst($faker->word),
                'url_key'           => ucfirst($faker->word),
                'product_type'      => 'simple',
                'qty'               => rand(5, 100),
                'is_new'            => rand(0, 1),
                'featured'          => rand(0, 1),
                'price'             => rand(1000, 99900),
                'short_description' => $faker->paragraph,
                'description'       => $faker->paragraph,
                'meta_title'        => $faker->word,
                'meta_description'  => $faker->paragraph,
            ]);
        }
    }
}
