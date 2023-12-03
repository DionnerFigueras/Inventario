<x-layouts.vistaPrincipal 
    titulo="Editar Medicamento - {{$medicamento->nombre}}" 
    meta-description="Editar Medicamentos meta description"> 

    <h1>Editar Medicamento</h1>

    <form action="{{route('medicamento.update', $medicamento)}}" method="POST">

        @csrf @method('PATCH')

        @include('/Medicamentos/formularioMedicamentos')

        <button type="submit"> Actulizar </button>

    </form>    

    <h2>
        <a href="{{route('medicamentos')}}">Regresar</a>
    </h2>

</x-layouts.vistaPrincipal>