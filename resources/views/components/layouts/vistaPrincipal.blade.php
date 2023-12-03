<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}">
    <title>{{ $titulo }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    @yield('css')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="bg-info" style="display: flex ;color: white;">
        <div>
            <img src="/feactures/Logo.png" alt="..." style="">
        </div>
        <div>
            <h1 style="margin-left: 20px; margin-top: 50px">
                <p class="fw-bold">Parroquia San BuenaVentura</p>
            </h1>
        </div>

    </div>

    <x-layouts.navegacionPrincipal> </x-navegacionPrincipal>


        @if (session('estatus'))
            <div>
                {{ session('estatus') }}
            </div>
        @endif

        {{ $slot }}

        @yield('js')
</body>

</html>
