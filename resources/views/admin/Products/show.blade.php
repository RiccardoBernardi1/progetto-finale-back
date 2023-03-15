@extends('layouts.app')

@section('content')
    <div class="py-5">
        <div class="container">
            <h1 class="m-3">{{$product->name}}</h1>
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 m-3">
                    @if($product->image)
                        <img src="{{asset("storage/$product->image")}}" alt="" class="img-fluid mb-4 d-block">
                        <img src="{{$product->image}}" alt="" class="img-fluid mb-4 d-block">
                    @endif
                </div>
                <div class="col-12 col-lg-6 m-3 py-3">
                    <div class="me-4 my-2"><strong>Descrizione:</strong> {{$product->description}}</div>
                    <span class="me-4 my-2"><strong>Prezzo:</strong> {{$product->price}}€</span>
                    <div class="my-2"><strong>Visibilità:</strong> {{$product->is_visible ? "Visibile" : "Nascosto"}}</div>
                    <a href="{{route('admin.products.index')}}" class="btn btn-success my-1">Lista articoli</a>
                    <a href="{{route('admin.products.edit',$product)}}" class="btn btn-warning mx-1 my-1">Modifica articolo</a>
                    <button class="btn btn-danger mx-1 my-1" data-bs-toggle="modal" data-bs-target="#product-modal-{{$product->id}}">Elimina articolo</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="product-modal-{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sei sicuro di voler eliminare "{{$product->name}}"?
                    </div>
                    <div class="modal-footer">
                        <form action="{{route('admin.products.destroy',$product)}}"    method="POST">
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
