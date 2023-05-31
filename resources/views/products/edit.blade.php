@extends('layouts.app');

@section('content')
    <section class="container">
        <h1>Modifica Prodotto con id: {{ $product->id }}</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid
                @enderror" name="title"
                    id="title" aria-describedby="titleHelp" value="{{ old('title', $product->title) }}">
                <div id="titleHelp" class="form-text">Inserisci un titolo</div>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Peso</label>
                <input type="text" class="form-control @error('weight')

                @enderror" name="weight"
                    id="weight" aria-describedby="weightHelp" value="{{ $product->weight }}">
                <div id="weightHelp" class="form-text">Inserisci il peso</div>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelp"
                    value="{{ $product->type }}">
                <div id="typeHelp" class="form-text">Inserisci il tipo</div>
            </div>
            <div class="mb-3">
                <label for="cooking_time" class="form-label">Tempo di cottura</label>
                <input type="text" class="form-control" name="cooking_time" id="cooking_time"
                    aria-describedby="cooking_timeHelp" value="{{ $product->cooking_time }}">
                <div id="cooking_timeHelp" class="form-text">Inserisci il tempo di cottura</div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="image" id="image" aria-describedby="imageHelp"
                    value="{{ $product->image }}">
                <div id="imageHelp" class="form-text">Inserisci immagine</div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10">
                 {{ $product->description }}
            </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </section>
@endsection
