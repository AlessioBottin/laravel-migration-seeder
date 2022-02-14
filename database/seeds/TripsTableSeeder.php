<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrip = new Trip();
            $newTrip->destination = $faker->city();
            $newTrip->departure_from = $faker->city();
            $newTrip->flight_lenght = rand(1, 20);
            $newTrip->price = rand(1, 10000);
            $newTrip->departure_time = $faker->dateTime();
            $newTrip->businness_class = rand(0,1);
            $newTrip->save();
        }
    }
}
