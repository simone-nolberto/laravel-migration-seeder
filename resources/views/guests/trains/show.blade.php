@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $train->azienda }}</h3>
                        <p>Treno N°: {{ $train->train_code }}</p>
                        <p>In partenza da {{ $train->departure_station }} alle ore {{ $train->departure_time }}</p>
                        <p>Arriverà a {{ $train->arrival_station }} alle ore {{ $train->arrival_time }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
