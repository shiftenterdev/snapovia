<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $customer = \App\Models\Customer::create([
            'password'          => bcrypt('password'),
            'email'             => 'customer@mail.com',
            'first_name'        => $faker->firstName,
            'last_name'         => $faker->lastName,
            'gender'            => 'male',
            'customer_group_id' => 1,
            'dob'               => $faker->date('Y-m-d'),
            'country'           => $faker->country
        ]);

        $customer->address()->create([
            'first_name'       => $faker->firstName,
            'last_name'        => $faker->lastName,
            'address_line_1'   => $faker->streetAddress,
            'telephone'        => $faker->phoneNumber,
            'city'             => $faker->city,
            'default_shipping' => 1,
            'default_billing'  => 1,
            'postcode'         => $faker->postcode,
            'country'          => $faker->country,
        ]);

//        $customer->wishlist()->sync([1, 2, 3, 4, 5]);


        for ($i = 1; $i <= env('SAMPLE_CUSTOMER_COUNT', 20); $i++) {

            $customer = \App\Models\Customer::create([
                'password'          => bcrypt('password'),
                'email'             => $faker->email,
                'first_name'        => $faker->firstName,
                'last_name'         => $faker->lastName,
                'gender'            => 'male',
                'dob'               => $faker->date('Y-m-d'),
                'customer_group_id' => 1,
                'country'           => $faker->country
            ]);

            $on = 1;
            for ($j = 1; $j <= 2; $j++) {

                $customer->address()->create([
                    'first_name'       => $faker->firstName,
                    'last_name'        => $faker->lastName,
                    'address_line_1'   => $faker->streetAddress,
                    'telephone'        => $faker->phoneNumber,
                    'city'             => $faker->city,
                    'default_shipping' => $on ? 1 : 0,
                    'default_billing'  => $on ? 1 : 0,
                    'postcode'         => $faker->postcode,
                    'country'          => $faker->country,
                ]);

                $on = 0;
            }
        }
    }
}
