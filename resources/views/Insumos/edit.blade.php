<x-layouts.vistaPrincipal titulo="Editar Insumo - {{ $insumo->nombre }}"
    meta-description="Editar Insumo meta description">
    <div class="container bg-white mt-3 w-50">

        <div class="row bg-primary mb-4" style="text-align: center; color: white">
            <h1>
                <p class="fw-bold mt-2">Editar Insumos</p>
            </h1>
        </div>


        <form action="{{ route('insumo.update', $insumo) }}" method="POST" class="row mb-3 ms-4 me-4">

            @csrf @method('PATCH')

            @include('/Insumos/formularioInsumos')

            <button class="btn btn-success " type="submit"> Actualizar </button>

        </form>

        <h2 class="row ms-4 me-4">
            <a class="btn btn-secondary mb-2" href="{{ route('insumos') }}"> Regresar </a>
        </h2>
    </div>
</x-layouts.vistaPrincipal>
