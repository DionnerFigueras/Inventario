<x-layouts.vistaPrincipal titulo="Agregar Intercambio" meta-description="Agregar Intercambio meta description">
    <div class="container bg-white w-50">

        <div class="row bg-primary mt-2 mb-3" style="text-align: center; color: white">
            <h1>
                <p class="fw-bold mt-2 mb-2">Agregar Intercambio</p>
            </h1>
        </div>

        <form action="{{ route('intercambio.store') }}" method="POST" class="row ms-4 me-4">
            @csrf

            <div class="row">
                <label for="ofrecido" class="form-label fw-bold">
                    Medicamento ofrecido:
                </label>

                <select name="ofrecido" class="form-control" id="ofrecido">

                    @foreach ($medicamentos as $medicamento)
                        <option value="{{ $medicamento->nombre }}">

                            {{ $medicamento->nombre }}. Disponibles: {{ $medicamento->cantidad }}

                        </option>
                    @endforeach

                </select>

                @error('ofrecido')
                    <br>
                    <small style="color: red"> {{ $message }} </small>
                @enderror

            </div>

            <div class="row">
                <label for="cantidad1" class="form-label fw-bold"> <br>
                    Cantidad a intercambiar:

                    <input name="cantidad1" class="form-control" type="number"
                        value="{{ old('cantidad1', $medicamento->cantidad) }}" placeholder="Cantidad">

                    @error('cantidad1')
                        <br>
                        <small style="color: red"> {{ $message }} </small>
                    @enderror
                </label>

            </div>

            <div class="row">
                <label for="solicitado" class="form-label fw-bold"> <br>
                    Medicamento solicitado:
                </label>

                <select name="solicitado" class="form-control" id="solicitado">

                    @foreach ($medicamentos as $medicamento)
                        <option value="{{ $medicamento->nombre }}">

                            {{ $medicamento->nombre }}. Disponibles: {{ $medicamento->cantidad }}

                        </option>
                    @endforeach
                </select>

                @error('solicitado')
                    <br>
                    <small style="color: red"> {{ $message }} </small>
                @enderror

            </div>

            <div class="row">
                <label for="intercambiar" class="form-label fw-bold"> <br>
                    Cantidad a intercambiar:

                    <input name="cantidad2" class="form-control" type="number"
                        value="{{ old('cantidad2', $medicamento->cantidad) }}">

                    @error('cantidad2')
                        <br>
                        <small style="color: red"> {{ $message }} </small>
                    @enderror
                </label>
            </div> <br>

            <button class="btn btn-success mt-2" type="submit"> Realizar Intercambio </button>

        </form>

        <h2 class="row ms-4 me-4  mt-2">
            <a class="btn btn-secondary mb-2" href="{{ route('intercambios') }}">Regresar</a>
        </h2>

    </div>
</x-layouts.vistaPrincipal>
