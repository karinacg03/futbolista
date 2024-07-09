<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalle del Equipo</h1>
        <p><strong>Código:</strong> {{ $equipo->codigo }}</p>
        <p><strong>Nombre:</strong> {{ $equipo->nombre }}</p>
        <p><strong>Ciudad:</strong> {{ $equipo->ciudad }}</p>
        <p><strong>Estadio:</strong> {{ $equipo->estadio }}</p>
        <p><strong>Aforo:</strong> {{ $equipo->aforo }}</p>
        <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</body>
</html>