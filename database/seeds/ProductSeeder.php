<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $color       = ['Blue', 'Green', 'Red', 'White', 'Purple', 'Violet', 'Pink', 'Gray', 'Navy Blue'];
    public $size        = ['22', '23', '25', 'M', 'L', 'XL', 'XXL', 'S'];
    public $productType = ['simple', 'configurable'];

    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
        $category_ids = [];

        /**
         * Category
         */
        for ($i = 1; $i <= 5; $i++) {
            $category = \App\Models\Category::create([
                'name'             => ucfirst($faker->department(1, true)),
                'description'      => $faker->paragraph,
                'url_key'          => Str::slug(($faker->word) . $i),
                'url_path'         => Str::slug(($faker->word) . $i),
                'meta_title'       => ucfirst($faker->word),
                'meta_description' => $faker->paragraph,
                'featured'         => rand(0, 1),
                'position'         => $i,
                'status'           => 1,
            ]);
            \App\Models\UrlResolver::create([
                'entity_id'   => $category->id,
                'entity_type' => 'category',
                'url_key'     => $category->url_key,
                'url_path'    => $category->url_path
            ]);

            $category_ids[] = $category->id;

            for ($j = 1; $j <= 5; $j++) {
                $childCategory = $category->childCategories()->create([
                    'name'             => ucfirst($faker->department(1, true)),
                    'description'      => $faker->paragraph,
                    'url_key'          => Str::slug($faker->word . $i . $j),
                    'url_path'         => $category->url_path . '/' . Str::slug($faker->word . $i . $j),
                    'meta_title'       => ucfirst($faker->word),
                    'meta_description' => $faker->paragraph,
                    'position'         => $i,
                    'featured'         => rand(0, 1),
                    'status'           => 1,
                ]);

                \App\Models\UrlResolver::create([
                    'entity_id'   => $childCategory->id,
                    'entity_type' => 'category',
                    'url_key'     => $childCategory->url_key,
                    'url_path'    => $childCategory->url_path
                ]);

                $category_ids[] = $childCategory->id;

                for ($k = 1; $k <= 5; $k++) {
                    $grandChildCategory = $childCategory->childCategories()->create([
                        'name'             => ucfirst($faker->department(1, true)),
                        'description'      => $faker->paragraph,
                        'url_key'          => Str::slug($faker->word . $i . $j . $k),
                        'url_path'         => $category->url_path . '/' . $childCategory->url_path . '/' . Str::slug($faker->word . $i . $j . $k),
                        'meta_title'       => ucfirst($faker->word),
                        'meta_description' => $faker->paragraph,
                        'position'         => $i,
                        'featured'         => rand(0, 1),
                        'status'           => 1,
                    ]);
                    \App\Models\UrlResolver::create([
                        'entity_id'   => $grandChildCategory->id,
                        'entity_type' => 'category',
                        'url_key'     => $grandChildCategory->url_key,
                        'url_path'    => $grandChildCategory->url_path
                    ]);

                    $category_ids[] = $grandChildCategory->id;

                }
            }
        }

        /**
         * Product
         */
        $sku = 10000;
        for ($i = 1; $i <= env('SAMPLE_PRODUCT_COUNT',500); $i++) {
            $productType = $this->productType[rand(0, 1)];
            $price = rand(1000, 99900);
            $product = \App\Models\Product::create([
                'sku'               => ++$sku,
                'name'              => ucfirst($faker->productName),
                'url_key'           => $faker->uuid,
                'product_type'      => $productType,
                'qty'               => rand(5, 100),
                'color'             => $productType == 'simple' ? $this->color[rand(0, count($this->color) - 1)] : null,
                'size'              => $productType == 'simple' ? $this->size[rand(0, count($this->size) - 1)] : null,
                'is_new'            => rand(0, 1),
                'featured'          => rand(0, 1),
                'price'             => $price,
                'visibility'        => rand(2, 4),
                'special_price'     => $productType == 'simple' ? $price * (rand(99, 50) / 100) : 0,
                'short_description' => $faker->paragraph,
                'description'       => $faker->paragraph,
                'meta_title'        => $faker->word,
                'meta_description'  => $faker->paragraph,
            ]);

            \App\Models\UrlResolver::create([
                'entity_id'   => $product->id,
                'entity_type' => 'product',
                'url_key'     => $product->url_key
            ]);
            $cat_id = $category_ids[rand(0, count($category_ids) - 1)];
            $product->categories()->sync($cat_id);

            /**
             * Associcated products
             */
            if ($productType == 'configurable') {
                for ($j = 1; $j <= 5; $j++) {
                    $associatedProduct = $product->associcatedProducts()->create([
                        'sku'               => ++$sku,
                        'name'              => ucfirst($faker->productName),
                        'url_key'           => $faker->uuid,
                        'product_type'      => 'simple',
                        'qty'               => rand(5, 100),
                        'color'             => $this->color[rand(0, count($this->color) - 1)],
                        'size'              => $this->size[rand(0, count($this->size) - 1)],
                        'is_new'            => rand(0, 1),
                        'featured'          => rand(0, 1),
                        'visibility'        => 1,
                        'price'             => rand(1000, 99900),
                        'short_description' => $faker->paragraph,
                        'description'       => $faker->paragraph,
                        'meta_title'        => $faker->word,
                        'meta_description'  => $faker->paragraph,
                    ]);

                    \App\Models\UrlResolver::create([
                        'entity_id'   => $associatedProduct->id,
                        'entity_type' => 'product',
                        'url_key'     => $associatedProduct->url_key
                    ]);

                    $associatedProduct->categories()->sync($cat_id);
                }
            }
        }
    }
}
