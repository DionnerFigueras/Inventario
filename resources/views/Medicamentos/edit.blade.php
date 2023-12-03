<x-layouts.vistaPrincipal titulo="Editar Medicamento - {{ $medicamento->nombre }}"
    meta-description="Editar Medicamentos meta description">
    <div class="container bg-white w-50">

        <div class="bg-primary row mb-3 mt-3" style="text-align: center; color: white">

            <h1>
                <p class="fw-bold mt-2">Editar Medicamento</p>
            </h1>
        </div>


        <form action="{{ route('medicamento.update', $medicamento) }}" method="POST" class="row ms-4 me-4 mb-3">

            @csrf @method('PATCH')

            @include('/Medicamentos/formularioMedicamentos')

            <button class="btn btn-success" type="submit"> Actulizar </button>

        </form>

        <h2 class="row ms-4 me-4">
            <a class="btn btn-secondary mb-2" href="{{ route('medicamentos') }}">Regresar</a>
        </h2>
    </div>
</x-layouts.vistaPrincipal>
