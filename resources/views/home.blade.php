@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>La Molisana</h1>
        <ul>
            @foreach ($products as $product)
                <li>{{ $product['titolo'] }}</li>
            @endforeach
        </ul>
    </section>
@endsection
