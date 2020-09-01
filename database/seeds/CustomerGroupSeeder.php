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
        $groups = ['Not Logged in','General','Private','Company','Offer'];
        foreach ($groups as $group) {
            \App\Models\CustomerGroup::create(['title' => $group]);
        }
    }
}
