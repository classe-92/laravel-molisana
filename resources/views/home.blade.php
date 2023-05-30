@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Home page</h1>

        @foreach ($products as $product)
            <h3>{{ $product->title }}</h3>
        @endforeach

        <p>{{ $post->body }}</p>
    </section>
@endsection
