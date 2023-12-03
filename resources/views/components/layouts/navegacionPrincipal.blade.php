<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid my-0">
        <a class="navbar-brand" href="{{ route('inicio') }}">
            <i class="bi bi-house color" style="color: white"></i>
            Inicio
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('medicamentos') ? 'text-white' : 'text-secondary' }}"
                        href="{{ route('medicamentos') }}">Medicamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('insumos') ? 'text-white' : 'text-secondary' }}"
                        href="{{ route('insumos') }}">Insumos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('intercambios') ? 'text-white' : 'text-secondary' }}"
                        href="{{ route('intercambios') }}">Intercambios</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
