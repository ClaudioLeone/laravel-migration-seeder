@extends('layouts.app')

@section('title')
    Trains list
@endsection

@section('content')
    <div class="ms-container">
        <ul>
            @foreach ($trains as $train)
                <li class="d-flex align-items-center">
                    <h6>Treno per: {{ $train->departure_station }}</h6>
                    <h6>Da: {{ $train->arrival_station }}</h6>
                    <p>Compagnia: <em>{{ $train->company_name }}</em></p>
                    <p>Codice treno: <em><b>#{{ $train->train_code }}</b></em></p>
                    <p>partenza: <em>{{ $train->departure_time }}</em></p>
                    <p>arrivo: <em>{{ $train->arrival_time }}</em></p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection