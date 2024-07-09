<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Equipo</h1>
    <form action="{{ route('equipos.store') }}" method="POST">
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
            <label for="ciudad">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad">
        </div>
        <div class="form-group">
            <label for="estadio">Estadio</label>
            <input type="text" class="form-control" id="estadio" name="estadio">
        </div>
        <div class="form-group">
            <label for="aforo">Aforo</label>
            <input type="number" class="form-control" id="aforo" name="aforo">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
</body>
</html>