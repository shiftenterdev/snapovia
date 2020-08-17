<?php

use Illuminate\Database\Seeder;

class CustomerGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            [
                'title' => 'default'
            ],
            [
                'title' => 'Company',
            ],
            [
                'title' => 'Private'
            ]
        ];

        \App\Models\CustomerGroup::insert($groups);
    }
}
