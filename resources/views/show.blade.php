@extends('layouts.base')

@section('documentTitle')
    Show
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <h1>Partenza da: {{ $train->stazione_di_partenza }}</h1>
                    <h1>Arrivo a: {{ $train->stazione_di_arrivo }}</h1>
                    <h3>In partenza alle ore: {{ $train->orario_di_partenza }}</h3>
                    <h3>In arrivo alle ore:{{ $train->orario_di_arrivo }}</h3>
                    <h4>Codice Treno: {{ $train->codice_treno }}</h4>
                    <h2>Numero carrozze: {{ $train->numero_carrozze }}</h2>
                    <h2>In partenza il giorno: {{ $train->data }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection