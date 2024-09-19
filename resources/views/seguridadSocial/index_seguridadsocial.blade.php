<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Seguridad Social</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Seguridad Social</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID Seguridad Social</th>
                    <th>Nro Documento Empleado</th>
                    <th>Nombre Seguridad Social</th>
                    <th>Porcentaje Empleado</th>
                    <th>Porcentaje Empleador</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seguridadsocial as $ss)
                    <tr>
                        <td>{{ $ss->id_seguridad_social }}</td>
                        <td>{{ $ss->nro_documento_empleado }}</td>
                        <td>{{ $ss->nombre_seguridad_social }}</td>
                        <td>{{ $ss->porcentaje_empleado }}%</td>
                        <td>{{ $ss->porcentaje_empleador }}%</td>
                        <td><a href="#">Actualizar</a> | <a href="#">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{ route('seguridadsocial.create') }}" class="btn btn-primary mt-3">Registrar Nueva Seguridad Social</a>
    </div>

</body>
</html>
