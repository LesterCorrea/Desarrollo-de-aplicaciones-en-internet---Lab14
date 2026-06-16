<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Query Builder Example</title>
</head>

<body>

    <h1>Productos</h1>

    <ul>
        <li><a href="{{ route('products.index') }}">Inicio</a></li>
        <li><a href="{{ route('products.list') }}">Consulta</a></li>
        <li><a href="{{ route('products.create') }}">Agregar</a></li>
    </ul>

    @yield('content')

</body>
</html>