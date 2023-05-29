@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>{{ $product->title }}</h1>
        <div class="card">
            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->title }}">
            <div class="card-body">
                <h5 class="card-title"> {{ $product->title }}</h5>
                <p class="card-text">{!! $product->description !!}</p>
                <p class="card-text"><strong>Peso:</strong>
                    {{ $product->peso }} - <strong>Tipo:</strong> {{ $product->type }} - <strong>Cottura:</strong>
                    {{ $product->cooking_time }}</p>

            </div>
        </div>
    </section>
@endsection
