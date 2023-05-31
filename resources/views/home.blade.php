@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Home page</h1>

        <p>{{ $post->body }}</p>

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                @foreach ($products as $product)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }} ">
                        <img src="{{ $product->image }}" class="d-block w-100" alt="{{ $product->title }}">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
@endsection
