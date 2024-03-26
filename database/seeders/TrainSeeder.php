<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //  genero dati finti usando il faker
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {

            $train = new Train;

            $train->company = $faker->company();
            $train->from = $faker->address();
            $train->to = $faker->address();
            $train->departure_time = $faker->date() . " " . $faker->time();
            $train->arrival_time = $faker->date() . " " . $faker->time();

            $train_code = "";

            for ($y = 0; $y < 10; $y++) {
                $train_code .= $faker->randomLetter();
            }

            $train->train_code = $train_code;
            $train->coaches_number = $faker->numberBetween(5, 10);

            $train->save();
        }
    }


}
