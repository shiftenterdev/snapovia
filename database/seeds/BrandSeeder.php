<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 50; $i++) {
            $brand = \App\Models\Brand::create([
                'name'        => ucfirst($faker->word),
                'description' => $faker->paragraph,
            ]);
        }
    }
}
