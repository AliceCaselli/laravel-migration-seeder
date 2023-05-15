<?php

namespace Database\Seeders;

use App\Models\Train;
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
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->name();
            $train->departure_station = $faker->word();
            $train->arrival_station = $faker->word();
            $train->departure_time = $faker->dateTime();
            $train->arrival_time = $faker->dateTime();
            $train->train_code = $faker->randomNumber(4, true);
            $train->number_of_cars = $faker->randomDigit();
            $train->type = $faker->name();
            $train->is_on_time = $faker->boolean();
            $train->is_cancelled = $faker->boolean();
            $train->save();
        }
    }
}
