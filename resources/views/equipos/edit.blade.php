<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Equipo</h1>
        <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $equipo->codigo }}">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $equipo->nombre }}">
            </div>
            <div class="form-group">
                <label for="ciudad">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ $equipo->ciudad }}">
            </div>
            <div class="form-group">
                <label for="estadio">Estadio</label>
                <input type="text" class="form-control" id="estadio" name="estadio" value="{{ $equipo->estadio }}">
            </div>
            <div class="form-group">
                <label for="aforo">Aforo</label>
                <input type="number" class="form-control" id="aforo" name="aforo" value="{{ $equipo->aforo }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>  
</body>
</html>