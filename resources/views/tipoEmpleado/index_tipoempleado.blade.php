<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tipos de Empleado</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Tipos de Empleado</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID Tipo Empleado</th>
                    <th>Nombre Tipo Empleado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipoEmpleados as $tipoEmpleado)
                    <tr>
                        <td>{{ $tipoEmpleado->id_tipo_empleado }}</td>
                        <td>{{ $tipoEmpleado->nombre_tipo_empleado }}</td>
                        <td><a href="#">Actualizar</a> | <a href="#">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{ route('tipoempleado.create') }}" class="btn btn-primary mt-3">Registrar Nuevo Tipo de Empleado</a>
    </div>
</body>
</html>
