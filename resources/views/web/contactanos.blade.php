<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactanos</title>
</head>
<body>
    <h1>contactanos</h1><br>

    <form action="{{ route('contactanos.store') }}" method="POST">
        @csrf
        <label for="">
            Nombre: <br>
            <input type="text" name="name">
        </label>

        <label for="email">
            Correo: <br>
            <input type="email" name="email">
        </label>

        <label for="mensaje">
            Deja tu mensaje: <br>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
        </label>

        <button>Enviar</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif
</body>
</html>