<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class ShippingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shippings = [
            [
                'title'       => 'Standard Shipping',
                'description' => 'Delivery in 5 - 7 working days',
                'amount'      => 8.00,
            ], [
                'title'       => 'Express Shipping',
                'description' => 'Delivery in 3 - 5 working days',
                'amount'      => 12.00,
            ], [
                'title'       => 'Free Shipping',
                'description' => 'Delivery in 10 - 14 working days',
                'amount'      => 0.00,
            ],
        ];

        foreach ($shippings as $shipping) {
            \App\Models\Shipping::create([
                'title'       => $shipping['title'],
                'amount'      => $shipping['amount'],
                'description' => $shipping['description'],
            ]);
        }
    }
}
