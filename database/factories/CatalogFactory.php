<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;


$factory->define(\App\Models\Product::class, function (Faker $faker) {
    $color = ['Blue', 'Green', 'Red', 'White', 'Purple', 'Violet', 'Pink', 'Gray', 'Navy Blue'];
    $size = ['22', '23', '25', 'M', 'L', 'XL', 'XXL', 'S'];
    return [
        'sku'               => ucfirst($faker->word),
        'name'              => ucfirst($faker->word),
        'url_key'           => ucfirst($faker->word),
        'product_type'      => 'simple',
        'qty'               => rand(5, 100),
        'color'             => $color[rand(0, count($color) - 1)],
        'size'              => $size[rand(0, count($size) - 1)],
        'is_new'            => rand(0, 1),
        'featured'          => rand(0, 1),
        'price'             => rand(1000, 99900),
        'short_description' => $faker->paragraph,
        'description'       => $faker->paragraph,
        'meta_title'        => $faker->word,
        'meta_description'  => $faker->paragraph,
    ];
});
