<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{

    public function run(Faker $faker)
    {
        // $trains = config('db.php');
        // foreach ($trains as $train) {

        //     $newTrains = new Train();
        //     $newTrains->id = $train['id'];
        //     $newTrains->azienda = $train['azienda'];
        //     $newTrains->departure_station = $train['departure_station'];
        //     $newTrains->arrival_station = $train['arrival_station'];
        //     $newTrains->departure_day = $train['departure_day'];
        //     $newTrains->departure_time = $train['departure_time'];
        //     $newTrains->arrival_time = $train['arrival_time'];
        //     $newTrains->train_code = $train['train_code'];
        //     $newTrains->coach_number = $train['coach_number'];
        //     $newTrains->in_time = $train['in_time'];
        //     $newTrains->deleted = $train['deleted'];
        //     $newTrains->save();
        // }


        for ($i = 0; $i < 10; $i++) {
            $newTrains = new Train();
            $newTrains->id = $faker->numerify();
            $newTrains->azienda = $faker->word(1) . 'Trains';
            $newTrains->departure_station = $faker->streetName() . 'station';
            $newTrains->arrival_station = $faker->streetName() . 'station';
            $newTrains->departure_day = $faker->date();
            $newTrains->departure_time = $faker->time();
            $newTrains->arrival_time = $faker->time();
            $newTrains->train_code = $faker->randomNumber(4, true);
            $newTrains->coach_number = $faker->randomNumber(4, true);
            $newTrains->in_time = $faker->boolean();
            $newTrains->deleted = $faker->boolean();
            $newTrains->save();
        }
    }
}
