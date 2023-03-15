@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Modifica tipologia</h1>
        <form action="{{ route('admin.typologies.update', $typology) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome*</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Inserisci il nome"
                    id="name" name="name" value="{{ old('name', $typology->name) }}" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Applica Modifiche</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Indietro</a>
        </form>
    </div>
@endsection
