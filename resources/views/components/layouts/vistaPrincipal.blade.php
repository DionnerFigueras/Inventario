<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description'}}">
    <title>{{ $titulo }}</title>
</head>

<body>

    <div>
        <h2>Logo (opcional)</h2>

        <h1>Nombre del CDI</h1>
    </div>
    
    <x-layouts.navegacionPrincipal> </x-navegacionPrincipal>
    
    
        @if (session('estatus'))
        <div>
            {{session('estatus')}}
        </div>
        @endif    

    {{ $slot }}

</body>

</html>