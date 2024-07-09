<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Equipos</h1>
        <a href="{{ route('equipos.create') }}" class="btn btn-primary">Añadir Equipo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Código</th>
                    <th>Ciudad</th>
                    <th>Estadio</th>
                    <th>Aforo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipos as $equipo)
                    <tr>
                        <td>{{ $equipo->nombre }}</td>
                        <td>{{ $equipo->codigo }}</td>
                        <td>{{ $equipo->ciudad }}</td>
                        <td>{{ $equipo->estadio }}</td>
                        <td>{{ $equipo->aforo }}</td>
                        <td>
                            <a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>