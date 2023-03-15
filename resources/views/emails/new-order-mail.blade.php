<div class="container-fluid text-center">
    <h1>Hai ricevuto un nuovo ordine:</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefono</th>
            <th scope="col">Indirizzo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $order->name }}</th>
            <td>{{ $order->email }}</td>
            <td>{{ $order->telephone }}</td>
            <td>{{ $order->address }}</td>
          </tr>
        </tbody>
    </table>
    <h2>Entra nel tuo spazio riservato per i dettagli!</h2>
</div>