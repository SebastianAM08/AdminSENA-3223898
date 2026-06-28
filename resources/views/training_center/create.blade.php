
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Centro</title>
</head>

<body>

    <h1>Formulario Centro Formación</h1>

    <form action="{{ route('training_center.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        <label>
            Ubicación:
            <br>
            <input type="text" name="location">
        </label>
        <br>
        <br>

        <button type="submit"> Crear Centro</button>

    </form>

</body>
</html>

