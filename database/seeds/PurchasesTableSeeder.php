<?php

use App\Purchase;
use Illuminate\Database\Seeder;

class PurchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Purchase::truncate();
        $purchases = [
            [
                'buyer' => 'Patrick Oryono',
                'car_id' => 1,
                'amount' => 20000000
            ],

            [
                'buyer' => 'Patrick Oryono',
                'car_id' => 2,
                'amount' => 20000000
            ],

            [
                'buyer' => 'Patrick Oryono',
                'car_id' => 2,
                'amount' => 20000000
            ]
        ];

        foreach ($purchases as $purchase) {
            \App\Purchase::create($purchase);
        }
    }
}
