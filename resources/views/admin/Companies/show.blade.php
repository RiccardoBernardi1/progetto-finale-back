@extends('layouts.app')

@section('content')
    <section class="text-align-center">
        <div class="my-3 text-center">
            <h1 class="my-4">La tua Attività</h1>
        </div>
        <div class="card text-bg-light m-3 p-3 shadow-sm">
            <div class="row">
                <div class="col-12 col-md-6">
                    {{-- Img del Ristorante --}}
                    @if($company->image)  
                        <img src="{{asset("storage/$company->image")}}" alt="" class="img-fluid mb-4 d-block">
                        <img src="{{$company->image}}" alt="" class="img-fluid mb-4 d-block">
                    @endif
                </div>
                <div class="col-12 col-md-6">
                    <div class="m-2">
                        {{-- Nome e dati principali --}}
                        <h1 >{{$company->company_name}}</h1>
                        @if($company->typologies->isNotEmpty())
                            <h3 class="my-2 d-inline">
                                @foreach ($company->typologies as $typology)
                                    <a href="{{route('admin.typologies.show',$typology)}}" class="badge rounded-pill text-bg-primary text-decoration-none text-light my-2 py-1"><small>{{$typology->name}}</small></a>
                                @endforeach
                            </h3><br>
                        @endif
                        <span><strong>Indirizzo:</strong> {{$company->address}}</span><br>
                        <span><strong>Orario di Apertura:</strong> {{$company->opening_hours}}</span><br>
                        <span><strong>Ordine Minimo:</strong> {{$company->minimum_order}}€</span><br>
                        <span><strong>Partita IVA:</strong> {{$company->p_iva}}</span><br>
                        {{-- Bottoni --}}
                        <div class="d-flex flex-column align-items-start my-3">
                            {{-- <a href="{{route('admin.products.index')}}" class="btn btn-success my-1">Mostra Articoli in Vendita</a>
                            <a href="{{route('admin.orders.index')}}" class="btn btn-primary my-1">Mostra Lista Ordini</a> --}}
                            <a href="{{route('admin.companies.edit',$company)}}" class="btn btn-warning my-1">Modifica Info Attività</a>
                            <button class="btn btn-danger my-1" data-bs-toggle="modal" data-bs-target="#company-modal-{{$company->id}}">Elimina Attività</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <div class="modal fade" id="company-modal-{{$company->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare "{{$company->company_name}}"?
                </div>
                <div class="modal-footer">
                    <form action="{{route('admin.companies.destroy',$company)}}"    method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <button type="submit" class="btn btn-primary">Conferma</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
