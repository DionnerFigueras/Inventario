<x-layouts.vistaPrincipal
titulo="{{$insumo->nombre}}" 
meta-description="{{$insumo->nombre}} meta description">


<h1>Insumos</h1>

<h2>Insumo: {{$insumo->nombre}}</h2>
<h2>Cantidad disponible: {{$insumo->cantidad}} unidades</h2>

<h2>
    <a href="{{route('insumos')}}">Regresar</a>
</h2>
    
</x-layouts.vistaPrincipal>