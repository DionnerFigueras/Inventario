<x-layouts.vistaPrincipal
titulo="{{$medicamento->nombre}}" 
meta-description="{{$medicamento->nombre}} meta description">

    <h1>Medicamentos</h1>

    <h2>Medicamento: {{$medicamento->nombre}} {{$medicamento->gramos}}
    </h2>

    <h2>Cantidad disponible: {{$medicamento->cantidad}} tabletas</h2>


    <h2>
        <a href="{{route('medicamentos')}}">Regresar</a>
    </h2>

</x-layouts.vistaPricipal>