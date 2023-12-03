<x-layouts.vistaPrincipal 
    titulo="Insumos" 
    meta-description="Insumos meta description">
    
    <h1>Insumos</h1>

    <div>
        <h2>
            <a href="{{route('insumo.create')}}">Agregar</a>
        </h2>
    </div> 

    @foreach ($insumos as $insumo)
        <div style="display: flex; align-items: baseline">
            <h2>
                <a href="{{route('insumos.show', $insumo->id)}}">
                    {{ $insumo->nombre }}
                    {{ $insumo->cantidad }} unidades
                </a>
            </h2>

            &nbsp; &nbsp;

            <a href="{{route('insumo.edit', $insumo->id)}}">Editar</a>

            &nbsp; &nbsp;

            <form action="{{route('insumo.destroy', $insumo->id)}}" method="POST">
            
                @csrf
                @method('DELETE')

                <button type="submit"> Eliminar </button>
            </form>
        </div>
    @endforeach

</x-layouts.vistaPrincipal>