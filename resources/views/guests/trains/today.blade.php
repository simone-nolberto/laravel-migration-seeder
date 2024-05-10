@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>Welcome!</h1>
        <p>Questi sono i treni in partenza oggi</p>
    </div>



    <div class="container">
        <div class="row row-cols-md-3 py-5 g-5">

            @forelse ($TodayTrains as $train)
                <div class="col">
                    <a href="{{ Route('guests.trains.show', $train) }}">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{ $train->azienda }}</h3>
                                <p>Treno N°: {{ $train->train_code }}</p>
                                <p>In partenza da {{ $train->departure_station }} alle ore {{ $train->departure_time }}</p>
                                <p>Arriverà a {{ $train->arrival_station }} alle ore {{ $train->arrival_time }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p>No cap here</p>
            @endforelse



        </div>
    </div>
@endsection
