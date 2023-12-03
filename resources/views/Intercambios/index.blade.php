
<x-layouts.vistaPrincipal 
    titulo="Intercambios" 
    meta-description="Intercambios meta description">

    <h1>Intercambios</h1>

    <div>
        <h2>
            <a href="{{route('intercambio.create')}}">Agregar</a>
        </h2>
    </div> 

    @foreach ($intercambios as $intercambio)

        <div style="display: flex; align-items: baseline">

            <h2>

                Se han cambiado {{$intercambio->cantidad1}} tabletas de {{$intercambio->medicamento1}} por {{$intercambio->cantidad2}} tabletas de {{$intercambio->medicamento2}} el {{$intercambio->created_at}}
    
            </h2>

            &nbsp; &nbsp;

            <form action="{{route('intercambio.destroy', $intercambio->id)}}" method="POST">
                
                @csrf
                @method('DELETE')

                <button type="submit"> Eliminar </button>
            </form>

        </div>



    @endforeach

</x-layouts.vistaPrincipal>
