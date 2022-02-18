@extends('layouts.base')

@section('documentTitle')
    Trains
@endsection

@section('content')
    @foreach ($trains as $train)
    <div class="card">
        <h1>{{ $train->stazione_di_partenza }}</h1>
        <h1>{{ $train->stazione_di_arrivo }}</h1>
        <h3>{{ $train->orario_di_partenza }}</h3>
        <h3>{{ $train->orario_di_arrivo }}</h3>
        <h3>Codice Treno: {{ $train->codice_treno }}</h3>
        <h1>{{ $train->numero_carrozze }}</h1>
        <h1>{{ $train->data }}</h1>
    </div>
    @endforeach
@endsection