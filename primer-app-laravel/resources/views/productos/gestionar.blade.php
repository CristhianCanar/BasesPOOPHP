<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestionar productos</title>
</head>
<body>
    Listado de productos
    {{ $productos }}
    @foreach($productos as $producto)
        <h1>{{ $producto->nombre }}</h1>
        <h4>{{ $producto->marca }}</h4>
    @endforeach
</body>
</html>
