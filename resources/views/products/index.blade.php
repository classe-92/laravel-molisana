@extends('layouts.admin')

@section('content')
    <section class="container">
        <h1>La Molisana</h1>
        <form action="{{ route('products.index') }}" method="GET">
            <select name="type" id="type">
                <option value="">all</option>
                <option value="lunga">lunga</option>
                <option value="corta">corta</option>
                <option value="cortissima">cortissima</option>
            </select>
            <button type="submit">Cerca</button>
        </form>
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
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Vedi</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Modifica</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button btn btn-danger ms-3"
                                    data-item-title="{{ $product->title }}">Cancella</button>

                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    @include('partials.popupdelete');
@endsection
