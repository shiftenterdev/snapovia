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
    public $attributes = [
        'Color'       => ['Blue', 'Green', 'Red', 'White', 'Purple', 'Violet', 'Pink', 'Gray', 'Navy Blue'],
        'Size'        => ['22', '23', '25', 'M', 'L', 'XL', 'XXL', 'S'],
        'Manufacture' => ['BD', 'US', 'IN', 'SE', 'UK'],
        'Length'      => 'text',
        'Weight'      => 'text',
    ];

    public $categories = [
        'Man\'s Fashion'       => ['Top' => ['Shirt', 'T-shirt'], 'Bottom' => ['Pants'], 'Trends' => ['Tie', 'Cap']],
        'Women\'s Clothing'    => ['Top' => ['Saree', 'Tops', 'Tee'], 'Bottom' => ['Pant', 'Palajo', 'Lehenga', 'Skirt']],
        'Computer & Office'    => ['Boys' => ['Shirt', 'Pants'], 'Girls' => ['Skirt', 'Dress']],
        'Jewelry & Watches'    => ['Home' => ['Fan', 'TV', 'Radio'], 'Office' => ['Laptop', 'Air Condition', 'Air Cooler']],
        'Bags & Shoes'         => ['Smartphone' => ['Apple', 'Samsung', 'LG'], 'Feature Phone' => ['Nokia', 'Erricson']],
        'Automobiles'          => ['Car' => ['Apple', 'Samsung', 'LG'], 'Motorcycle' => ['Nokia', 'Erricson']],
        'Consumer Electronics' => ['Refregerator' => ['Apple', 'Samsung', 'LG'], 'Washing Machine' => ['Nokia', 'Erricson']],
    ];

    public $productType = ['simple', 'configurable'];

    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
        $category_ids = [];

        /**
         * Attribute
         */
        foreach ($this->attributes as $name => $attribute_options) {
            $fieldType = 'select';
            if (!is_array($attribute_options)) {
                $fieldType = $attribute_options;
            }
            $attribute = \App\Models\Attribute::create([
                'name'                 => $name,
                'label'                => $name,
                'slug'                 => Str::slug($name),
                'entity_type'          => 'product',
                'attribute_field_type' => $fieldType,
            ]);
            if (is_array($attribute_options)) {
                foreach ($attribute_options as $value) {
                    $attribute->options()->create([
                        'option_value' => $value,
                    ]);
                }
            }
        }

        /**
         * Category
         */
        $i = 1;

        \App\Models\Category::create([
            'name'             => 'Root',
            'description'      => $faker->paragraph,
            'url_key'          => 'root',
            'url_path'         => '',
            'meta_title'       => '',
            'meta_description' => '',
            'featured'         => 0,
            'position'         => 0,
            'status'           => 1,
        ]);

        foreach ($this->categories as $level1 => $level2) {

            $category = \App\Models\Category::create([
                'name'             => ucfirst($level1),
                'description'      => $faker->paragraph,
                'url_key'          => Str::slug($level1),
                'url_path'         => Str::slug($level1),
                'meta_title'       => ucfirst($faker->word),
                'meta_description' => $faker->paragraph,
                'featured'         => rand(0, 1),
                'parent_id'        => 1,
                'position'         => $i++,
                'status'           => 1,
            ]);
            \App\Models\UrlResolver::create([
                'entity_id'   => $category->id,
                'entity_type' => 'category',
                'url_key'     => $category->url_key,
                'url_path'    => $category->url_path,
            ]);

            $category_ids[] = $category->id;

            foreach ($level2 as $level3 => $level4) {
                $childCategory = $category->childCategories()->create([
                    'name'             => ucfirst($level3),
                    'description'      => $faker->paragraph,
                    'url_key'          => Str::slug($level3 . ++$i),
                    'url_path'         => $category->url_path . '/' . Str::slug($level3 . $i),
                    'meta_title'       => ucfirst($level3),
                    'meta_description' => $faker->paragraph,
                    'position'         => $i,
                    'featured'         => rand(0, 1),
                    'status'           => 1,
                ]);

                \App\Models\UrlResolver::create([
                    'entity_id'   => $childCategory->id,
                    'entity_type' => 'category',
                    'url_key'     => $childCategory->url_key,
                    'url_path'    => $childCategory->url_path,
                ]);

                $category_ids[] = $childCategory->id;

                foreach ($level4 as $level5) {
                    $grandChildCategory = $childCategory->childCategories()->create([
                        'name'             => ucfirst($level5),
                        'description'      => $faker->paragraph,
                        'url_key'          => Str::slug($faker->word . ++$i),
                        'url_path'         => $category->url_path . '/' . $childCategory->url_path . '/' . Str::slug($level5 . $i),
                        'meta_title'       => ucfirst($level5),
                        'meta_description' => $faker->paragraph,
                        'position'         => $i,
                        'featured'         => rand(0, 1),
                        'status'           => 1,
                    ]);
                    \App\Models\UrlResolver::create([
                        'entity_id'   => $grandChildCategory->id,
                        'entity_type' => 'category',
                        'url_key'     => $grandChildCategory->url_key,
                        'url_path'    => $grandChildCategory->url_path,
                    ]);

                    $category_ids[] = $grandChildCategory->id;

                }
            }
        }

        /**
         * Product
         */
        $sku = 10000;
        for ($i = 1; $i <= env('SAMPLE_PRODUCT_COUNT', 500); $i++) {
            $productType = $this->productType[rand(0, 1)];
            $price = rand(10000, 60000)/100;
            $product = \App\Models\Product::create([
                'sku'               => ++$sku,
                'name'              => ucfirst($faker->productName),
                'url_key'           => $faker->uuid,
                'product_type'      => $productType,
                'qty'               => rand(5, 100),
                //                'color'             => $productType == 'simple' ? $this->color[rand(0, count($this->color) - 1)] : null,
                //                'size'              => $productType == 'simple' ? $this->size[rand(0, count($this->size) - 1)] : null,
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
                'url_key'     => $product->url_key,
            ]);
            $cat_id = $category_ids[rand(0, count($category_ids) - 1)];
            $product->categories()->sync($cat_id);

            /**
             * Associated products
             */
            if ($productType == 'configurable') {
                for ($j = 1; $j <= 5; $j++) {
                    $associatedProduct = $product->associcatedProducts()->create([
                        'sku'               => ++$sku,
                        'name'              => ucfirst($faker->productName),
                        'url_key'           => $faker->uuid,
                        'product_type'      => 'simple',
                        'qty'               => rand(5, 100),
                        //                        'color'             => $this->color[rand(0, count($this->color) - 1)],
                        //                        'size'              => $this->size[rand(0, count($this->size) - 1)],
                        'is_new'            => rand(0, 1),
                        'featured'          => rand(0, 1),
                        'visibility'        => 1,
                        'price'             => rand(10000, 60000)/100,
                        'short_description' => $faker->paragraph,
                        'description'       => $faker->paragraph,
                        'meta_title'        => $faker->word,
                        'meta_description'  => $faker->paragraph,
                    ]);

//                    $associatedProduct->attributes()->create([
//
//                    ]);
                    $color = \App\Models\Attribute::productAttribute('color')->firstOrFail();
                    $size = \App\Models\Attribute::productAttribute('size')->firstOrFail();

                    $associatedProduct->attributes()->sync([$size->id, $color->id]);

                    \App\Models\UrlResolver::create([
                        'entity_id'   => $associatedProduct->id,
                        'entity_type' => 'product',
                        'url_key'     => $associatedProduct->url_key,
                    ]);

                    $associatedProduct->categories()->sync($cat_id);
                }
            }
        }
    }
}
