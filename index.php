<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>


    <?php

    if (isset($_POST['enviar'])) {

        session_start();

        if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
            $_SESSION['nombre'] = $_POST['nombre'];
        }

        if (isset($_POST['apellidos']) && !empty($_POST['apellidos'])) {
            $_SESSION['apellidos'] = $_POST['apellidos'];
        }
    }

    ?>


    <form method="POST">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" />
        <br />

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" />
        <br />

        <input type="submit" name="enviar" value="Guardar en la sesion">
        <br />
    </form>

    <a href="pagina2.php"><button>Ir a la pagina 2</button></a>


</body>

</html>