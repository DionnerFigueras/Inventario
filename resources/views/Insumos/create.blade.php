<x-layouts.vistaPrincipal 
    titulo="Agregar Insumo" 
    meta-description="Agregar Insumo meta description"> 

    <h1>Agregar un Nuevo Insumo</h1>

    <form action="{{route('insumo.store')}}" method="POST">

        @csrf

        @include('/Insumos/formularioInsumos')

        <button type="submit"> Agregar </button>

    </form>

    <h2>
        <a href="{{route('insumos')}}">Regresar</a>
    </h2>

</x-layouts.vistaPrincipal>