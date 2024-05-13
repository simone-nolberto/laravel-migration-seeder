<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{

    public function run()
    {
        $trains = config('db.php');


        foreach ($trains as $train) {

            $newTrains = new Train();
            $newTrains->id = $train['id'];
            $newTrains->azienda = $train['azienda'];
            $newTrains->departure_station = $train['departure_station'];
            $newTrains->arrival_station = $train['arrival_station'];
            $newTrains->departure_day = $train['departure_day'];
            $newTrains->departure_time = $train['departure_time'];
            $newTrains->arrival_time = $train['arrival_time'];
            $newTrains->train_code = $train['train_code'];
            $newTrains->coach_number = $train['coach_number'];
            $newTrains->in_time = $train['in_time'];
            $newTrains->deleted = $train['deleted'];
            $newTrains->save();
        }
    }
}
