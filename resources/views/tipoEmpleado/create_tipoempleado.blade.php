<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Tipo de Empleado</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Crear Tipo de Empleado</h1>

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

        <form action="{{ route('tipoempleado.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_tipo_empleado">ID Tipo Empleado</label>
                <input type="text" name="id_tipo_empleado" class="form-control" maxlength="10" required>
            </div>

            <div class="form-group">
                <label for="nombre_tipo_empleado">Nombre Tipo Empleado</label>
                <input type="text" name="nombre_tipo_empleado" class="form-control" maxlength="50">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Crear</button>
            <a href="{{ route('tipoempleado.index') }}" class="btn btn-secondary mt-3">Ver Todos los Tipos de Empleado</a>
        </form>
    </div>
</body>
</html>
