<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Detalle del Jugador</h1>
        <p><strong>Código:</strong> {{ $jugador->codigo }}</p>
        <p><strong>Nombre:</strong> {{ $jugador->nombre }}</p>
        <p><strong>Posición:</strong> {{ $jugador->posicion }}</p>
        <p><strong>Fecha de Nacimiento:</strong> {{ $jugador->fecha_nac }}</p>
        <a href="{{ route('jugadores.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</body>
</html>