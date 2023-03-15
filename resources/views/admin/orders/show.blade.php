@extends('layouts.app')

@section('content')
    <div class="py-5">
        <div class="container">
            <h1 class="m-3">Ordine numero: {{ $order->id }}</h1>
            <div class="row align-items-center">
                <div class="col m-3 py-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Nome:</th>
                                <td>{{ $order->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Telefono:</th>
                                <td>{{ $order->telephone }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email:</th>
                                <td>{{ $order->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Indirizzo:</th>
                                <td>{{ $order->address }}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="pt-3">Prodotti:</th>
                                <td class="row align-items-center pt-3">
                                    @foreach ($order->products as $product)
                                        <span
                                            class="me-3 fw-bold col-3 text-center {{ count($order->products) > $loop->iteration ? 'mb-3' : 'mb-2' }}">{{ $product->name }}
                                        </span>
                                        <span
                                            class="mx-3 col-3 text-center {{ count($order->products) > $loop->iteration ? 'mb-3' : 'mb-2' }}">Prezzo:
                                            {{ $product->price }}€</span>
                                        <span
                                            class="mx-3 col-3 text-center {{ count($order->products) > $loop->iteration ? 'mb-3' : 'mb-2' }}">Quantità:
                                            x{{ $order->products()->where('product_id', $product->id)->first()->pivot->quantity }}</span>
                                        @if (count($order->products) > $loop->iteration)
                                            <hr class="w-75">
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Totale:</th>
                                <td>{{ $order->total_price }}€</td>
                            </tr>
                            <tr>
                                <th scope="row">Data:</th>
                                <td>{{ $order->created_at }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <a class="btn btn-success text-decoration-none" href="{{ route('admin.orders.index') }}"> Torna alla
                        lista ordini</a>
                    {{-- <a href="{{route('admin.orders.index')}}" class="btn btn-primary me-2">Lista Ordini</a> --}}
                    {{-- <button class="btn btn-danger my-1" data-bs-toggle="modal"
                        data-bs-target="#order-modal-{{ $order->id }}">Elimina Ordine</button> --}}
                    {{-- <a href="{{route('admin.products.index')}}" class="btn btn-primary me-2">I tuoi articoli</a>
                      <a href="{{route('admin.companies.show', Auth::user()->company)}}" class="btn btn-outline-info">La tua attività</a> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="modal fade" id="order-modal-{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare l'ordine numero"{{$order->id}}"?
                </div>
                <div class="modal-footer">
                    <form action="{{route('admin.orders.destroy',$order)}}"    method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <button type="submit" class="btn btn-primary">Conferma</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
