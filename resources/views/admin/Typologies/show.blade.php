@extends('layouts.app')

@section('content')
    <div class="py-5">
        <h1 class="my-2">{{ $typology->name }}</h1>
        <a href="{{ route('admin.typologies.index') }}" class="btn btn-primary mx-1 my-3">Lista tipologie</a>
        <a href="{{ route('admin.companies.show',Auth::user()->company) }}" class="btn btn-secondary mx-1 my-3">La tua attività</a>
        @if(count($typology->companies)==0)
        <a href="{{ route('admin.typologies.edit', $typology) }}" class="btn btn-warning mx-1 my-3">Modifica tipologia</a>
        <button class="btn btn-danger mx-1 my-3" data-bs-toggle="modal"
            data-bs-target="#typology-modal-{{ $typology->id }}">Elimina tipologia</button>
        <h3>Questa tipologia non ha ancora nessuna attivita associata.</h3>
        @endif
        <div class="modal fade" id="typology-modal-{{ $typology->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sei sicuro di voler eliminare "{{ $typology->name }}"?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('admin.typologies.destroy', $typology) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <button type="submit" class="btn btn-primary">Conferma</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 my-1">
            @foreach ($typology->companies as $company)
                <div class="card" style="width: 18rem; margin-left: 10px">
                    <img src="{{ $company->image }}" class="card-img-top my-2" alt="{{ $company->company_name }}"
                        style="height: 150px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $company->company_name }}</h5>
                        @if ($company->typologies->isNotEmpty())
                            @foreach ($company->typologies as $typology)
                                <a href="{{route('admin.typologies.show',$typology)}}" class="badge bg-secondary text-decoration-none text-light me-2">{{ $typology->name }}</a>
                            @endforeach
                        @endif
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $company->telephone }}</li>
                        <li class="list-group-item">{{ $company->address }}</li>
                        <li class="list-group-item">{{ $company->opening_hours }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('admin.orders.create') }}" class="btn btn-primary card-link">Ordina</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
