<x-layouts.vistaPrincipal 
    titulo="Medicamentos" 
    meta-description="Medicamentos meta description">
    
    <h1>Medicamentos</h1>

    <div>
        <h2>
            <a href="{{route('medicamento.create')}}">Agregar</a>
        </h2>
    </div> 

    @foreach ($medicamentos as $medicamento)
        <div style="display: flex; align-items: baseline">
            <h2>
                <a href="{{route('medicamentos.show', $medicamento->id)}}">
                    {{ $medicamento->nombre }}
                    {{ $medicamento->gramos }}
                    {{ $medicamento->cantidad }} tabletas              
                </a>
            </h2>

            &nbsp; &nbsp;

            <a href="{{route('medicamento.edit', $medicamento->id)}}">editar</a>

            &nbsp; &nbsp;

            <form action="{{route('medicamento.destroy', $medicamento->id)}}" method="POST">
            
                @csrf
                @method('DELETE')

                <button type="submit">Eliminar</button>

            </form>
        </div>
    @endforeach

    
</x-layouts.vistaPrincipal>