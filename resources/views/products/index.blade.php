@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>La Molisana</h1>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row gy-4">
            @foreach ($products as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->title }}">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $product->title }}</h5>
                            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Vai
                                al
                                dettaglio</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Modifica</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </section>
@endsection
