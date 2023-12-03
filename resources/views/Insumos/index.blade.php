<x-layouts.vistaPrincipal titulo="Insumos" meta-description="Insumos meta description">

    @section('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    @endsection

    <div class="container my-3 bg-white py-4">

        <div style="display: flex; justify-content: space-between">
            <div>
                <h1>Insumos</h1>
            </div>

            <div>
                <h2>
                    <a class="btn btn-primary mb-3" href="{{ route('insumo.create') }}">
                        <i class="bi bi-plus-circle"></i>
                        Agregar
                    </a>
                </h2>
            </div>
        </div>

        <table id="insumos" class="table table-striped mt-4">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Uso</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($insumos as $insumo)
                    <div style="display: flex; align-items: baseline">

                        <tr>
                            <td>{{ $insumo->nombre }}</td>
                            <td>{{ $insumo->cantidad }} unidades</td>
                            <td>{{ $insumo->uso }}</td>
                            <td>
                                <form action="{{ route('insumo.destroy', $insumo->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-info" href="{{ route('insumo.edit', $insumo->id) }}">
                                        <i class="bi bi-pencil-fill" style="color: white"></i>
                                        Editar
                                    </a>
                                    <button class="btn btn-danger" type="submit">
                                        <i class="bi bi-trash"></i>
                                        Eliminar
                                    </button>
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
                new DataTable('#insumos');
            </script>
        @endsection

    </div>
</x-layouts.vistaPrincipal>
