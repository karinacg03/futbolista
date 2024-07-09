<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Jugadores</h1>
    <a href="{{ route('jugadores.create') }}" class="btn btn-primary">Añadir Jugador</a>
    <table class="table">
            <tr>
                <th>Nombre</th>
                <th>Código</th>
                <th>Posición</th>
                <th>Fecha de Nacimiento</th>
                <th>Acciones</th>
            </tr>
            @foreach ($jugadores as $jugador)
                <tr>
                    <td>{{ $jugador->nombre }}</td>
                    <td>{{ $jugador->codigo }}</td>
                    <td>{{ $jugador->posicion }}</td>
                    <td>{{ $jugador->fecha_nac }}</td>
                    <td>
                        <a href="{{ route('jugadores.show', $jugador->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('jugadores.edit', $jugador->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('jugadores.destroy', $jugador->id) }}" method="POST" style="display:inline-block;">
        
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
</div>
</body>
</html>