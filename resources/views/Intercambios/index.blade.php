<x-layouts.vistaPrincipal titulo="Intercambios" meta-description="Intercambios meta description">

    @section('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    @endsection

    <div class="container my-3 bg-white py-4">

        <div style="display: flex; justify-content: space-between">
            <div>
                <h1>Intercambios</h1>
            </div>

            <div>
                <h2>
                    <a class="btn btn-primary" href="{{ route('intercambio.create') }}">
                        <i class="bi bi-plus-circle"></i>
                        Agregar
                    </a>
                </h2>
            </div>
        </div>

        <table id="intercambios" class="table table-striped mt-4">
            <thead class="table-dark">
                <tr>
                    <th>Medicamento Ofrecido</th>
                    <th>Cantidad</th>
                    <th>Medicamento Solicitado</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($intercambios as $intercambio)
                    <div style="display: flex; align-items: baseline">

                        <tr>
                            <td>{{ $intercambio->medicamento1 }}</td>
                            <td>{{ $intercambio->cantidad1 }}</td>
                            <td>{{ $intercambio->medicamento2 }}</td>
                            <td>{{ $intercambio->cantidad2 }}</td>
                            <td> {{ date('d-m-Y', strtotime($intercambio->created_at)) }}</td>
                            <td>
                                <form action="{{ route('intercambio.destroy', $intercambio->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>

                    </div>
                @endforeach
            </tbody>
        </table>

        @section('js')
            <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
            <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

            <script>
                new DataTable('#intercambios');
            </script>
        @endsection

    </div>
</x-layouts.vistaPrincipal>
