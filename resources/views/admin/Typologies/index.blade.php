@extends('layouts.app')

@section('content')
    <h1>Lista tipologie</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($typologies as $typology)
                <tr>
                    <th scope="row">{{ $typology->id }}</th>
                    <td>{{ $typology->name }}</td>
                    <td>
                        <a href="{{ route('admin.typologies.show', $typology) }}" class="btn btn-primary">Info</a>
                        @if(count($typology->companies)==0)
                        <a href="{{ route('admin.typologies.edit', $typology) }}" class="btn btn-warning mx-2">Modifica</a>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#typology-modal-{{ $typology->id }}">Elimina</button>
                        @endif
                    </td>
                </tr>

                <div class="modal fade" id="typology-modal-{{ $typology->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Sei sicuro di voler eliminare "{{ $typology->name }}"?
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('admin.typologies.destroy', $typology) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Annulla</button>
                                    <button type="submit" class="btn btn-primary">Conferma</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.typologies.create') }}" class="btn btn-success">Aggiungi tipologia</a>
    <a href="{{ route('admin.companies.show', Auth::user()->company) }}" class="btn btn-outline-primary">La tua attività</a>
@endsection
