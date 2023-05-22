@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>La Molisana</h1>
        <ul>
            @foreach ($products as $product)
                <li><a href="{{ route('products.show', ['id' => $loop->index]) }}">{{ $product['titolo'] }}</a></li>
            @endforeach
        </ul>
    </section>
@endsection
