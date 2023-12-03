<label>
    Nombre del medicamento: <br>
    <input name="nombreMedicamento" type="text" value="{{old('nombreMedicamento', $medicamento->nombre)}}"> 

    @error('nombreMedicamento')
        <br>
        <small style="color: red"> {{$message}} </small>
    @enderror
</label> <br>

<label>
    Gramos del medicamento: <br>
    <input name="gramosMedicamento" type="text" value="{{old('gramosMedicamento', $medicamento->gramos)}}">

    @error('gramosMedicamento')
        <br>
        <small style="color: red"> {{$message}} </small>
    @enderror
</label> <br>

<label>
    Cantidad del medicamento: <br>
    <input name="cantidadMedicamento" type="number" value="{{old('cantidadMedicamento', $medicamento->cantidad)}}">

    @error('cantidadMedicamento')
        <br>
        <small style="color: red"> {{$message}} </small>
    @enderror
    
</label> <br> <br>