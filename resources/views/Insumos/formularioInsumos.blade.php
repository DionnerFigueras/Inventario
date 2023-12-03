<div>
    <div class="row">
        <label for="nombreInsumo" class="form-label fw-bold">
            Nombre del insumo:
            <input name="nombreInsumo" class="form-control" type="text"
                value="{{ old('nombreInsumo', $insumo->nombre) }}" placeholder="Insumo">

            @error('nombreInsumo')
                <br>
                <small style="color: red"> {{ $message }} </small>
            @enderror
        </label>
    </div>

    <div class="row">

        <label for="cantidadInsumo" class="form-label fw-bold">
            Cantidad del insumo:

            <input name="cantidadInsumo" class="form-control" type="number"
                value="{{ old('cantidadInsumo', $insumo->cantidad) }}" placeholder="Cantidad">
            @error('cantidadInsumo')
                <br>
                <small style="color: red"> {{ $message }} </small>
            @enderror
        </label>
    </div>

    <div class="row">
        <label for="usoInsumo" class="form-label fw-bold">
            Uso:

            <input name="usoInsumo" class="form-control" type="text" value="{{ old('usoInsumo', $insumo->uso) }}"
                placeholder="Uso">
            @error('usoInsumo')
                <br>
                <small style="color: red"> {{ $message }} </small>
            @enderror
        </label>
    </div>
</div>
