<x-layouts.vistaPrincipal titulo="Agregar Insumo" meta-description="Agregar Insumo meta description">
    <div class="container bg-white w-50">

        <div class="row bg-primary mb-3 mt-3" style="text-align: center; color: white">
            <h1>
                <p class="fw-bold mt-2">Agregar Insumo</p>
            </h1>
        </div>

        <form action="{{ route('insumo.store') }}" method="POST" class="row ms-4 me-4 mb-3">

            @csrf

            @include('/Insumos/formularioInsumos')

            <button class="btn btn-success " type="submit"> Agregar </button>

        </form>

        <h2 class="row ms-4 me-4">
            <a class="btn btn-secondary mb-2" href="{{ route('insumos') }}">Regresar</a>
        </h2>
    </div>
</x-layouts.vistaPrincipal>
