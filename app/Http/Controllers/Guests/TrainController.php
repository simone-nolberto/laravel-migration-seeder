<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // dd(Train::all());
        $trains = Train::orderBy('id', 'ASC')->get();

        return view('guests.trains.index', compact('trains'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Train $train)
    {
        return view('guests.trains.show', compact('train'));
    }


    public function today(Train $train)
    {
        $TodayTrains = Train::where('departure_station', 'Roma Termini')->get();

        // dd($TodayTrains);
        return view('guests.trains.today', compact('TodayTrains'));
    }
}
