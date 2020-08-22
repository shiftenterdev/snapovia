<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 5; $i++) {
            $category = \App\Models\Category::create([
                'name'             => ucfirst($faker->word),
                'description'      => $faker->paragraph,
                'url_key'          => $faker->word,
                'meta_title'       => ucfirst($faker->word),
                'meta_description' => $faker->paragraph,
                'featured'         => rand(0, 1),
                'position'         => $i,
                'status'           => 1,
            ]);

            for ($j = 1; $j <= 5; $j++) {
                $childCategory = $category->childCategories()->create([
                    'name'             => $faker->sentence(2),
                    'description'      => $faker->paragraph,
                    'url_key'          => $faker->word,
                    'meta_title'       => ucfirst($faker->word),
                    'meta_description' => $faker->paragraph,
                    'position'         => $i . $j,
                    'featured'         => rand(0, 1),
                    'status'           => 1,
                ]);

                for ($k = 1; $k <= 5; $k++) {
                    $childCategory->childCategories()->create([
                        'name'             => $faker->sentence(3),
                        'description'      => $faker->paragraph,
                        'url_key'          => $faker->word,
                        'meta_title'       => ucfirst($faker->word),
                        'meta_description' => $faker->paragraph,
                        'position'         => $i . $j . $k,
                        'featured'         => rand(0, 1),
                        'status'           => 1,
                    ]);
                }
            }
        }
    }
}
