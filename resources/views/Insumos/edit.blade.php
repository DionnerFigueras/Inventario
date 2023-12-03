<x-layouts.vistaPrincipal 
    titulo="Editar Insumo - {{$insumo->nombre}}" 
    meta-description="Editar Insumo meta description"> 

    <h1>Editar Insumos</h1>

    <form action="{{route('insumo.update', $insumo)}}" method="POST">

        @csrf @method('PATCH')
        
        @include('/Insumos/formularioInsumos')

        <button type="submit"> Actualizar </button>

    </form>

    <h2>
        <a href="{{route('insumos')}}"> Regresar </a>
    </h2>

</x-layouts.vistaPrincipal>