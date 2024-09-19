<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Prestaciones</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Prestaciones</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID Prestación</th>
                    <th>Nro Documento Empleado</th>
                    <th>Tipo de Prestación</th>
                    <th>Monto</th>
                    <th>Fecha de Pago</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestaciones as $prestacion)
                    <tr>
                        <td>{{ $prestacion->id_prestacion }}</td>
                        <td>{{ $prestacion->nro_documento_empleado }}</td>
                        <td>{{ $prestacion->tipo_prestacion }}</td>
                        <td>{{ $prestacion->monto }}</td>
                        <td>{{ $prestacion->fecha_pago }}</td>
                        <td><a href="#">Actualizar</a> | <a href="#">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{ route('prestaciones.create') }}" class="btn btn-primary mt-3">Registrar Nueva Prestación</a>
    </div>

</body>
</html>
