<div>
    <div class="row">
        <label for="nombreMedicamento" class="form-label fw-bold">
            Nombre del medicamento:

            <input name="nombreMedicamento" class="form-control" type="text"
                value="{{ old('nombreMedicamento', $medicamento->nombre) }}" placeholder="Medicamento">

            @error('nombreMedicamento')
                <br>
                <small style="color: red"> {{ $message }} </small>
            @enderror
        </label> <br>
    </div>

    <div class="row">
        <label for="gramosMedicamento" class="form-label fw-bold">
            Gramos del medicamento:
            <input name="gramosMedicamento" class="form-control" type="text"
                value="{{ old('gramosMedicamento', $medicamento->gramos) }}" placeholder="Gramos">

            @error('gramosMedicamento')
                <br>
                <small style="color: red"> {{ $message }} </small>
            @enderror
        </label> <br>
    </div>

    <div class="row">
        <label for="cantidadMedicamento" class="form-label fw-bold">
            Cantidad del medicamento:

            <input name="cantidadMedicamento" class="form-control" type="number"
                value="{{ old('cantidadMedicamento', $medicamento->cantidad) }}" placeholder="Cantidad">

            @error('cantidadMedicamento')
                <br>
                <small style="color: red"> {{ $message }} </small>
            @enderror

        </label> <br>
    </div>

    <div class="row">
        <label for="usoMedicamento" class="form-label fw-bold">
            Uso del medicamento: <br>
            <input name="usoMedicamento" class="form-control" type="text"
                value="{{ old('usoMedicamento', $medicamento->uso) }}" placeholder="Uso">

            @error('usoMedicamento')
                <br>
                <small style="color: red"> {{ $message }} </small>
            @enderror

        </label> <br>
    </div>

    <div class="row">
        <label for="fechaV" class="form-label fw-bold">
            Fecha Vencimiento: <br>
            <input name="fechaV" class="form-control" type="date" value="{{ old('fechaV', $medicamento->fechaV) }}"
                placeholder="Fecha">

            @error('fechaV')
                <br>
                <small style="color: red"> {{ $message }} </small>
            @enderror

        </label> <br>
    </div>
</div>
