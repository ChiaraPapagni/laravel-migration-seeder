<?php

use Faker\Generator as Faker;
use App\Models\Flight;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $_flight = new Flight();
            $_flight->airline = $faker->company();
            $_flight->departure_airport = $faker->streetName();
            $_flight->arrival_airport = $faker->streetName();
            $_flight->destination = $faker->city();
            $_flight->flight_duration = $faker->randomNumber(3, true);
            $_flight->price = $faker->randomFloat(2);
            $_flight->save();
        }
    }
}