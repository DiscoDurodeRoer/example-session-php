<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina 2</title>
</head>

<body>

    <?php


    session_start();

    if (isset($_SESSION['nombre'])) {
        echo "Nombre: " . $_SESSION['nombre'] . "<br/>";
    } else {
        echo "No hay nombre en la sesion.<br/>";
    }

    if (isset($_SESSION['apellidos'])) {
        echo "Apellidos: " . $_SESSION['apellidos'] . "<br/>";
    } else {
        echo "No hay apellidos en la sesion.<br/>";
    }

    if (isset($_POST['borrar'])) {
        session_destroy();
        header("Location: index.php");
    }

    ?>




    <form method="POST">
        <input type="submit" name="borrar" value="Borrar sesion">
        <br />
    </form>

    <a href="index.php"><button>Volver al index</button></a>


</body>

</html>