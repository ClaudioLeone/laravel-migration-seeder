<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) { 
            $train = new Train();
            $train->company_name = $faker->company();
            $train->departure_station = $faker->randomElement(['Milano', 'Catania', 'Roma', 'Torino', 'Bari', 'Genova']);
            $train->arrival_station = $faker->randomElement(['Milano', 'Catania', 'Roma', 'Torino', 'Bari', 'Genova']);
            $train->departure_time = $faker->dateTimeBetween('-1 day', '+2 days');
            $train->arrival_time = $faker->dateTimeBetween('+1 day', '+2 days');
            $train->train_code = $faker->randomNumber(5, true);
            $train->num_of_wagons = $faker->randomDigitNotZero();
            $train->is_in_time = $faker->randomElement([true, false]);
            $train->save();
        }
    }
}
