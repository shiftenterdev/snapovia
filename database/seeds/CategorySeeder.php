<?php

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
        $categories = [
            [
                'id'        => 1,
                'name'      => 'Men',
                'position'  => 1,
                'status'    => 1,
                'url_key'   => 'men',
                'parent_id' => 0
            ],
            [
                'id'        => 2,
                'name'      => 'Women',
                'position'  => 2,
                'status'    => 1,
                'url_key'   => 'women',
                'parent_id' => 0
            ],
            [
                'id'        => 3,
                'name'      => 'Dress',
                'position'  => 3,
                'status'    => 1,
                'url_key'   => 'dress',
                'parent_id' => 2
            ],
            [
                'id'        => 4,
                'name'      => 'Kids',
                'position'  => 4,
                'status'    => 1,
                'url_key'   => 'kids',
                'parent_id' => 2
            ],
            [
                'id'        => 5,
                'name'      => 'Shoes',
                'position'  => 4,
                'status'    => 1,
                'url_key'   => 'shoes',
                'parent_id' => 4
            ]
        ];

        \App\Models\Category::insert($categories);
    }
}
