<x-layouts.vistaPrincipal titulo="Medicamentos" meta-description="Medicamentos meta description">

    @section('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    @endsection



    <div class="container my-3 bg-white py-4">

        <div style="display: flex; justify-content: space-between">
            <div>
                <h1>Medicamentos</h1>
            </div>

            <div>
                <h2>
                    <a class="btn btn-primary mb-3" href="{{ route('medicamento.create') }}">
                        <i class="bi bi-plus-circle" style="color: white"></i>
                        Agregar
                    </a>
                </h2>
            </div>

        </div>

        <table id="medicamentos" class="table table-striped mt-4">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Mg/Ml/G/Mcg</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Uso</th>
                    <th scope="col">Fecha Vencimiento</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medicamentos as $medicamento)
                    <div style="display: flex; align-items: baseline">

                        <tr>
                            <td>{{ $medicamento->nombre }}</td>
                            <td>{{ $medicamento->gramos }}</td>
                            <td>{{ $medicamento->cantidad }} tabletas</td>
                            <td>{{ $medicamento->uso }}</td>
                            <td>{{ $medicamento->fechaV }}</td>
                            <td>

                                <form action="{{ route('medicamento.destroy', $medicamento->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-info  " href="{{ route('medicamento.edit', $medicamento->id) }}">
                                        <i class="bi bi-pencil-fill" style="color: white"></i>
                                        Editar
                                    </a>
                                    <button class="btn btn-danger" type="submit">
                                        <i class="bi bi-trash" style="color: white"></i>
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
                new DataTable('#medicamentos');
            </script>
        @endsection
    </div>

</x-layouts.vistaPrincipal>
