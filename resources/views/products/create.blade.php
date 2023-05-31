@extends('layouts.app');

@section('content')
    <section class="container">
        <h1>Inserisci Nuovo prodotto</h1>
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelp" value="{{ old('title') }}" required min="3" maxlength="255">
                <div id="titleHelp" class="form-text">Inserisci un titolo - required - minimo 3 caratteri massimo 255
                    caratteri</div>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Peso</label>
                <input type="text" class="form-control @error('weight') is-invalid @enderror" name="weight"
                    id="weight" aria-describedby="weightHelp" value="{{ old('weight') }}" required maxlength="25">
                <div id="weightHelp" class="form-text">Inserisci il peso</div>
                @error('weight')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelp">
                <div id="typeHelp" class="form-text">Inserisci il tipo</div>
            </div>
            <div class="mb-3">
                <label for="cooking_time" class="form-label">Tempo di cottura</label>
                <input type="text" class="form-control" name="cooking_time" id="cooking_time"
                    aria-describedby="cooking_timeHelp">
                <div id="cooking_timeHelp" class="form-text">Inserisci il tempo di cottura</div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="image" id="image" aria-describedby="imageHelp">
                <div id="imageHelp" class="form-text">Inserisci immagine</div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10">

            </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </section>
@endsection
