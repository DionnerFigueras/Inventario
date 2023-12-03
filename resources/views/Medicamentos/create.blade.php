<x-layouts.vistaPrincipal 
    titulo="Agregar Medicamento" 
    meta-description="Agregar Medicamento meta description">

    <h1>Agregar un Nuevo Medicamentos</h1>

    <form action="{{route('medicamentos.store')}}" method="POST">

        @csrf

        @include('/Medicamentos/formularioMedicamentos')

        <button type="submit"> Agregar </button>

    </form>

    <h2>
        <a href="{{route('medicamentos')}}">Regresar</a>
    </h2>

</x-layouts.vistaPrincipal>