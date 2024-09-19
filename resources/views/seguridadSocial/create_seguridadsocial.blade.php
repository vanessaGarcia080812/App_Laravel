<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Seguridad Social</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Crear Seguridad Social</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('seguridadsocial.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_seguridad_social">ID Seguridad Social</label>
                <input type="text" name="id_seguridad_social" class="form-control" maxlength="10" required>
            </div>

            <div class="form-group">
                <label for="nro_documento_empleado">Nro Documento Empleado</label>
                <input type="text" name="nro_documento_empleado" class="form-control" maxlength="10">
            </div>

            <div class="form-group">
                <label for="nombre_seguridad_social">Nombre Seguridad Social</label>
                <input type="text" name="nombre_seguridad_social" class="form-control" maxlength="50">
            </div>

            <div class="form-group">
                <label for="porcentaje_empleado">Porcentaje Empleado</label>
                <input type="number" step="0.01" name="porcentaje_empleado" class="form-control">
            </div>

            <div class="form-group">
                <label for="porcentaje_empleador">Porcentaje Empleador</label>
                <input type="number" step="0.01" name="porcentaje_empleador" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Crear Seguridad Social</button>
            <a href="{{ route('seguridadsocial.index') }}" class="btn btn-secondary mt-3">Ver Todas</a>
        </form>
    </div>
</body>
</html>
