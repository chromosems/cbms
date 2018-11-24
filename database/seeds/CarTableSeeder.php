<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Car::truncate();
        $cars = [
            [
                'name' => 'Spacio',
                'model' => 'N12',
                'yom' => '2000'
            ],

            [
                'name' => 'Alion',
                'model' => 'N12',
                'yom' => '2000'
            ],

            [
                'name' => 'Hilux',
                'model' => 'N12',
                'yom' => '2000'
            ]
        ];

        foreach ($cars as $car) {
            \App\Car::create($car);
        }
    }
}
