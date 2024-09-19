<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Crear producto</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/prueba/vista1">Inicio</a></li>
                <li><a href="{{ route('producto.index') }}">Listar</a></li>
            </ul>
        </nav>
    </header>
    <section>
    <form action="{{ route('producto.store') }}" method="post">
        @csrf
        <label class="label" for="">Nombre</label>
        <input class="datos" name="nombre" type="text">
            <br>
            <br>
        <label class="label" for="">Descripción</label>
        <input class="datos" name="descripcion" type="text">
        <br>    
        <br>
        <label class="label" for="">Presentación</label>
        <input class="datos" name="presentacion" type="text">
        <br>
        <br>
        <label class="label" for="">Pais Origen</label>
        <input class="datos" name="pais_origen" type="text">
        <br>
        <br>
        <label class="label" for="">Precio</label>
        <input class="datos" name="precio" type="number">
        <br>
        <br>

        <label class="label" for="">Stock</label>
        <input class="datos" name="stock" type="number">
        <br>
        <br>
        <button  class="button2" type="submit">Enviar</button>
    </form>
    </body>
</section>
</html>