<x-layouts.vistaPrincipal titulo="Agregar Medicamento" meta-description="Agregar Medicamento meta description">
    <div class="container bg-white w-50">

        <div class="bg-primary row mb-3 mt-3" style="text-align: center; color: white">

            <h1>
                <p class="fw-bold mt-2">Agregar Medicamento</p>
            </h1>

        </div>


        <form action="{{ route('medicamentos.store') }}" method="POST" class="row mb-3 ms-4 me-4">

            @csrf

            @include('/Medicamentos/formularioMedicamentos')

            <button class="btn btn-success" type="submit"> Agregar </button>
        </form>

        <h2 class="row me-4 ms-4">
            <a class="btn btn-secondary mb-2" href="{{ route('medicamentos') }}">Regresar</a>
        </h2>


    </div>
</x-layouts.vistaPrincipal>
