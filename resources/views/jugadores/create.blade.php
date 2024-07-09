<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Jugador</h1>
    <form action="{{ route('jugadores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="posicion">Posición</label>
            <input type="text" class="form-control" id="posicion" name="posicion">
        </div>
        <div class="form-group">
            <label for="fecha_nac">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
</body>
</html>