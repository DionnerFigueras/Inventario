
<label>
    Nombre del insumo: <br>
    <input name="nombreInsumo" type="text" value="{{old('nombreInsumo', $insumo->nombre)}}">
    @error('nombreInsumo')
        <br>
        <small style="color: red"> {{$message}} </small>
    @enderror
</label> <br>

<label>
    Cantidad del insumo: <br>
    <input name="cantidadInsumo" type="number" value="{{old('cantidadInsumo', $insumo->cantidad)}}">
    @error('cantidadInsumo')
        <br>
        <small style="color: red"> {{$message}} </small>
    @enderror
</label> <br> <br>