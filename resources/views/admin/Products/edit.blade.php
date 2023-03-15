@extends('layouts.app')

@section('content')
<div class="container">
        <h1 class="my-4">Modifica un articolo</h1>
        <form action="{{route('admin.products.update', $product)}}" method="POST" enctype="multipart/form-data" id="product-form">

            @csrf
            @method("PUT")

            <div class="mb-3">
                <label for="name" class="form-label">Nome prodotto*</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Inserisci il nome" id="name" name="name" value="{{old('name', $product->name)}}" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione*</label>
                <input class="form-control @error('description') is-invalid @enderror" type="tel" placeholder="Inserisci la descrizione" id="description" name="description" value="{{old('description', $product->description)}}" required>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" placeholder="Inserisci un'immagine" id="image" name="image" value="{{old('image', $product->image)}}">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo*</label>
                <input class="form-control @error('price') is-invalid @enderror" type="number" placeholder="Inserisci il prezzo" id="price" name="price" value="{{old('price', $product->price)}}" required step="0.01">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Categoria*</label>
                <input class="form-control @error('category') is-invalid @enderror" type="text" placeholder="Inserisci la categoria" id="category" name="category" value="{{old('category', $product->category)}}" required>
                @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="is_visible" class="form-label">Visibilità*</label>
                <select class="form-select" name="is_visible" id="is_visible">
                    <option value="1" {{ old('is_visible', $product->is_visible) == 1 ? 'selected' : '' }} >Visibile</option>
                    <option value="0" {{ old('is_visible', $product->is_visible) == 0 ? 'selected' : '' }}>Non visibile</option>
                </select>
                @error('is_visible')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Applica Modifiche</button>
            <a href="{{url()->previous()}}" type="reset" class="btn btn-secondary">Indietro</a>
        </form>
    </div>
    <script>
        const priceInput = document.querySelector('#price');

        priceInput.addEventListener('blur', function() {
            if (priceInput.value.indexOf('.') === -1) {
                priceInput.value = parseFloat(priceInput.value).toFixed(2);
            }
        });

        const form = document.querySelector('#product-form');
        
        form.addEventListener('submit', function(event) {
            // Impedisci il comportamento predefinito del modulo
            event.preventDefault();
            
            // Verifica se l'input contiene solo una cifra decimale
            if (priceInput.value.indexOf('.') === -1) {
                priceInput.value = parseFloat(priceInput.value).toFixed(2);
            }
            
            // Invia il modulo al server
            form.submit();
        });

    </script>
@endsection