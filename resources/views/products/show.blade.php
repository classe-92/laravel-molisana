@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>{{ $product['titolo'] }}</h1>
        <div class="card">
            <img src="{{ $product['src'] }}" class="card-img-top" alt="{{ $product['titolo'] }}">
            <div class="card-body">
                <h5 class="card-title"> {{ $product['titolo'] }}</h5>
                <p class="card-text">{!! $product['descrizione'] !!}</p>
                <p class="card-text"><strong>Peso:</strong>
                    {{ $product['peso'] }} - <strong>Tipo:</strong> {{ $product['tipo'] }} - <strong>Cottura:</strong>
                    {{ $product['cottura'] }}</p>

            </div>
        </div>
    </section>
@endsection
