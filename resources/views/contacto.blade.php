<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El mejor contacto del mundo</title>
</head>
<body>
    <h1>Aqui va el mejor contacto del mundo de {{ $tipo_usuario }}</h1>
    <form action="guardar-formulario" method="POST">
        @csrf

        @if($tipo_usuario == "cliente")
            <label for="no_cliente">Numero de cliente:</label><br>
            <input type="text" name="no_usuario" value="{{"no_cliente"}}" placeholder="No. de cliente" id="no_cliente"><br>
        @else
        <div class="input_group">
            <label for="nombre">Nombre:</label><br>
            <input value="{{old("nombre")}}" name="nombre" type="text" id="nombre" placeholder="Tu nombre...">
        </div>
        <div class="input_group">
            <label for="correo">Correo:</label><br>
            <input value="{{old("correo")}}" name="correo" type="email" id="correo" placeholder="Tu correo...">
        </div>
        <div class="input_group">
            <label for="mensaje">Mensaje:</label><br>
            <textarea name="mensaje" cols="30" rows="4" id="mensaje" placeholder="Tu mensaje...">{{old("mensaje")}}</textarea>
        </div>
        <input type="submit" value="Enviar formulario"><br>
        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('mensaje')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        @endif
    </form>
</body>
</html>