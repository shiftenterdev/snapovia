<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatalogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $color = ['Blue', 'Green', 'Red', 'White', 'Purple', 'Violet', 'Pink', 'Gray', 'Navy Blue'];
        $size = ['22', '23', '25', 'M', 'L', 'XL', 'XXL', 'S'];
        return [
            'sku'               => ucfirst($this->faker->word),
            'name'              => ucfirst($this->faker->word),
            'url_key'           => ucfirst($this->faker->word),
            'product_type'      => 'simple',
            'qty'               => rand(5, 100),
            'color'             => $color[rand(0, count($color) - 1)],
            'size'              => $size[rand(0, count($size) - 1)],
            'is_new'            => rand(0, 1),
            'featured'          => rand(0, 1),
            'price'             => rand(1000, 99900),
            'short_description' => $this->faker->paragraph,
            'description'       => $this->faker->paragraph,
            'meta_title'        => $this->faker->word,
            'meta_description'  => $this->faker->paragraph,
        ];
    }
}
