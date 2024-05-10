@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-md-3 py-5 g-5">

            @forelse ($trains as $train)
                <div class="col">
                    <a href="{{ Route('guests.trains.show', $train) }}">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{ $train->azienda }}</h3>
                                <p>Treno N°: {{ $train->train_code }}</p>
                                <p>In partenza il {{ $train->departure_day }} da {{ $train->departure_station }} alle ore
                                    {{ $train->departure_time }}</p>
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
