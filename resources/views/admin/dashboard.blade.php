@extends('layouts.app')

@section('content')   

<div class="container">
    <div class="my-3 text-center">
        <h1>Dashboard</h1>
    </div>
    <div class="">
        <section class="card text-bg-light m-3 p-3 shadow-sm">
            @if (count(Auth::user()->company->products) > 0)
            <h3 class="my-4">Articoli in vendita</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th class="d-none" scope="col">Immagine</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Visibilità</th>
                        <th scope="col">Dettagli</th>
                        <th class="d-none d-md-block" scope="col">Modifica</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ Auth::user()->company->products[0]->id }}</th>
                        <td>{{ Auth::user()->company->products[0]->name }}</td>
                        <td>{{ Auth::user()->company->products[0]->description }}</td>
                        <td class="d-none">{{ is_null(Auth::user()->company->products[0]->image) ? 'Nessuna Immagine' : '' }}</td>
                        <td>{{ Auth::user()->company->products[0]->price }}€</td>
                        <td>{{ Auth::user()->company->products[0]->is_visible ? 'Visibile' : 'Nascosto' }}</td>
                        <td><a href="{{ route('admin.products.show', Auth::user()->company->products[0]) }}" class="btn btn-primary">Info</a></td>
                        <td class="d-none d-md-block"><a href="{{ route('admin.products.edit', Auth::user()->company->products[0]) }}" class="btn btn-warning">Modifica</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">{{ Auth::user()->company->products[1]->id }}</th>
                        <td>{{ Auth::user()->company->products[1]->name }}</td>
                        <td>{{ Auth::user()->company->products[1]->description }}</td>
                        <td class="d-none">{{ is_null(Auth::user()->company->products[1]->image) ? 'Nessuna Immagine' : '' }}</td>
                        <td>{{ Auth::user()->company->products[1]->price }}€</td>
                        <td>{{ Auth::user()->company->products[1]->is_visible ? 'Visibile' : 'Nascosto' }}</td>
                        <td><a href="{{ route('admin.products.show', Auth::user()->company->products[1]) }}" class="btn btn-primary">Info</a></td>
                        <td class="d-none d-md-block"><a href="{{ route('admin.products.edit', Auth::user()->company->products[1]) }}" class="btn btn-warning">Modifica</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">{{ Auth::user()->company->products[2]->id }}</th>
                        <td>{{ Auth::user()->company->products[2]->name }}</td>
                        <td>{{ Auth::user()->company->products[2]->description }}</td>
                        <td class="d-none">{{ is_null(Auth::user()->company->products[2]->image) ? 'Nessuna Immagine' : '' }}</td>
                        <td>{{ Auth::user()->company->products[2]->price }}€</td>
                        <td>{{ Auth::user()->company->products[2]->is_visible ? 'Visibile' : 'Nascosto' }}</td>
                        <td><a href="{{ route('admin.products.show', Auth::user()->company->products[2]) }}" class="btn btn-primary">Info</a></td>
                        <td class="d-none d-md-block"><a href="{{ route('admin.products.edit', Auth::user()->company->products[2]) }}" class="btn btn-warning">Modifica</a></td>
                        
                    </tr>
                </tbody>
            </table>
            @else
                <div class="alert alert-warning mt-4">
                    <strong>
                        <h5>La tua attività non ha nessun prodotto associato! Aggiungine uno per cominciare a vendere con
                            DeliveBoo!</h5>
                    </strong>
                </div>
            @endif
            <div>
                <a href="{{ route('admin.products.create') }}" class="btn btn-success" >Aggiungi Articoli in Vendita</a>
                <a href="{{route('admin.products.index')}}" class="btn btn-secondary mx-5 my-1">Lista Prodotti</a>
            </div>
        </section>
        <section class="card text-bg-light m-3 p-3 shadow-sm">
            @if(count($userOrders) > 0)
            <h3 class="my-4">Ordini</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">n°</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Indirizzo</th>
                        <th scope="col">Telefono</th>
                        <th class="d-none d-md-block" scope="col">Email</th>
                        <th scope="col">Totale</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $userOrders[0]->id }}</th>
                        <td>{{$userOrders[0]->name}}</td>
                        <td>{{$userOrders[0]->address}}</td>
                        <td>{{$userOrders[0]->telephone}}</td>
                        <td class="d-none d-md-inline-block py-3">{{$userOrders[0]->email}}</td>
                        <td>{{$userOrders[0]->total_price}}€</td>
                        <td><a href="{{route('admin.orders.show',$userOrders[0])}}" class="btn btn-primary">Info</a></td>
                    </tr>
                    <tr>
                        <th scope="row">{{ $userOrders[1]->id }}</th>
                        <td>{{$userOrders[1]->name}}</td>
                        <td>{{$userOrders[1]->address}}</td>
                        <td>{{$userOrders[1]->telephone}}</td>
                        <td class="d-none d-md-inline-block py-3">{{$userOrders[1]->email}}</td>
                        <td>{{$userOrders[1]->total_price}}€</td>
                        <td><a href="{{route('admin.orders.show',$userOrders[1])}}" class="btn btn-primary">Info</a></td>
                    </tr>
                    <tr>
                        <th scope="row">{{ $userOrders[2]->id }}</th>
                        <td>{{$userOrders[2]->name}}</td>
                        <td>{{$userOrders[2]->address}}</td>
                        <td>{{$userOrders[2]->telephone}}</td>
                        <td class="d-none d-md-inline-block py-3">{{$userOrders[2]->email}}</td>
                        <td>{{$userOrders[2]->total_price}}€</td>
                        <td><a href="{{route('admin.orders.show',$userOrders[2])}}" class="btn btn-primary">Info</a></td>
                    </tr>
                </tbody>
            </table>
            <div>
                <a href="{{route('admin.orders.index')}}" class="btn btn-secondary">Lista Ordini</a>
            </div>
            @else
                <div class="alert alert-warning mt-4">
                    <strong>
                        <h5>La tua attività non ha nessun ordine associato!</h5>
                    </strong>
                </div>
            @endif
        </section>
        <section class="card text-bg-light m-3 p-3 shadow-sm">
            <h1 class="text-center">Statistiche Incassi</h1>
            <canvas id="lineChart"></canvas>
            <div>
                <a href="{{route('admin.stats')}}" class="btn btn-secondary">Vai alle Statistiche</a>
            </div> 
        </section>


    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- /Chart.js -->

    <!-- Data Stats main left -->
    <script>
        var ctx = document.getElementById('lineChart').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($totalLabels) !!},
                datasets: [{
                    label: 'Totale Incassi €',
                    data: {!! json_encode($totalData) !!},
                    fill: true,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    </div>
</div>
@endsection