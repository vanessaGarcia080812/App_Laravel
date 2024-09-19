<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Prestación</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Crear Prestación</h1>

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

        <form action="{{ route('prestaciones.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_prestacion">ID Prestación</label>
                <input type="text" name="id_prestacion" class="form-control" maxlength="10" required>
            </div>

            <div class="form-group">
                <label for="nro_documento_empleado">Nro Documento Empleado</label>
                <input type="text" name="nro_documento_empleado" class="form-control" maxlength="10">
            </div>

            <div class="form-group">
                <label for="tipo_prestacion">Tipo de Prestación</label>
                <input type="text" name="tipo_prestacion" class="form-control" maxlength="50">
            </div>

            <div class="form-group">
                <label for="monto">Monto</label>
                <input type="number" step="0.01" name="monto" class="form-control" maxlength="10">
            </div>

            <div class="form-group">
                <label for="fecha_pago">Fecha de Pago</label>
                <input type="date" name="fecha_pago" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Crear Prestación</button>
            <a href="{{ route('prestaciones.index') }}" class="btn btn-secondary mt-3">Ver Todas las Prestaciones</a>
        </form>
    </div>
</body>
</html>
