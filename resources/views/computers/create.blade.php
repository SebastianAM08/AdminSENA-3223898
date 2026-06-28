<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Computador</title>
</head>

<body>

    <h1>Formulario Computador</h1>

    <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Número:
            <br>
            <input type="text" name="number">
        </label>
        <br>

        <label>
            Marca:
            <br>
            <input type="text" name="brand">
        </label>
        <br>
        <br>

        <button type="submit"> Crear Computador</button>

    </form>

</body>
</html>