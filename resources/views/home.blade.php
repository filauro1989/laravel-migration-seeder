@extends('layouts.base')

@section('documentTitle')
    Trains
@endsection

@section('content')
    @foreach ($trains as $train)
    <div class="card">
        <h1>{{ $train->data }}</h1>
    </div>
    @endforeach
@endsection