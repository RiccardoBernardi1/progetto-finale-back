@extends('layouts.app')

@section('content')
        @if(count($userOrders) > 0)
            <div class="my-3 text-center">
                <h3 class="my-4">Lista Ordini</h3>
            </div>
            <div class="card text-bg-light m-3 px-3 pb-3 shadow-sm ms-card">
                <table class="table">
                    <thead class="sticky-top text-bg-light">
                        <tr >
                            <th scope="col">n°</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Indirizzo</th>
                            <th class="d-none " scope="col">Telefono</th>
                            <th class="d-none position-absolute ms-5" scope="col">Email</th>
                            <th scope="col">Totale</th>
                            <th scope="col">Info</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach($userOrders as $order)
                            <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <td>{{$order->name}}</td>
                                <td>{{$order->address}}</td>
                                <td class="d-none py-3">{{$order->telephone}}</td>
                                <td class="d-none py-3">{{$order->email}}</td>
                                <td>{{$order->total_price}}€</td>
                                <td><a href="{{route('admin.orders.show',$order)}}" class="btn btn-primary">Info</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <div class="mx-3 p-1">
                <a href="{{route('admin.products.index')}}" class="btn btn-secondary me-2">I tuoi articoli</a>
                <a href="{{route('admin.companies.show', Auth::user()->company)}}" class="btn btn-outline-primary">La tua attività</a>
            </div> --}}
        @else
            <div class="alert alert-warning mt-4">
                <strong>
                    <h5>La tua attività non ha nessun ordine associato!</h5>
                </strong>
            </div>
        @endif
@endsection