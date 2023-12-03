<x-layouts.vistaPrincipal 
    titulo="Agregar Intercambio" 
    meta-description="Agregar Intercambio meta description"> 

    <h1>Agregar un Nuevo Intercambio</h1>

    <form action="{{route('intercambio.store')}}" method="POST">
        @csrf

        <div>
            <label>
                Medicamento a intercambiar: <br> 
            </label>
            
            <select name="intercambiar" id="intercambiar">

                    @foreach ($medicamentos as $medicamento)
                        <option value="{{$medicamento->nombre}}"> 

                            {{$medicamento->nombre}}. Disponibles: {{$medicamento->cantidad}} 

                        </option>
                    @endforeach

            </select>  

            @error('intercambiar')
            <br>
            <small style="color: red"> {{$message}} </small>
            @enderror
            
        </div>  <br>

        <div>
            <label>
                Cantidad a intercambiar: <br>
                <input name="cantidad1" type="number" value="{{old('cantidad1', $medicamento->cantidad)}}">

                @error('cantidad1')
                <br>
                <small style="color: red"> {{$message}} </small>
                @enderror
            </label>


        </div> <br>

        <div>
            <label>
                Medicamento intercambiado: <br>
            </label>

            <select name="intercambiado" id="intercambiado"> 
                
                @foreach ($medicamentos as $medicamento)

                    <option value="{{$medicamento->nombre}}">
                    
                        {{$medicamento->nombre}}. Disponibles: {{$medicamento->cantidad}}               

                    </option>    

                @endforeach
            </select>

            @error('intercambiado')
            <br>
            <small style="color: red"> {{$message}} </small>
            @enderror 

        </div> <br>

        <div>
            <label>
                Cantidad a intercambiar: <br>
                <input name="cantidad2" type="number" value="{{old('cantidad2', $medicamento->cantidad)}}">

                @error('cantidad2')
                    <br>
                    <small style="color: red"> {{$message}} </small>
                @enderror
            </label>
        </div> <br>

        <button type="submit"> Realizar Intercambio </button>

    </form>

    <h2>
        <a href="{{route('intercambios')}}">Regresar</a>
    </h2>
</x-layouts.vistaPrincipal>