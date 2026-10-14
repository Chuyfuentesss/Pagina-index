<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumnos</title>
</head>
<body>
<?php
    require_once "conexion.php";

    $numcuenta = $_POST["numcuenta"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    //echo " numcuenta ".$numcuenta." nombre ".$nombre." email ".$correo;

    // Se corrigieron los nombres de las columnas
    $sql = "INSERT INTO alumnos (numcuenta, nombre, correo)
            VALUES ('$numcuenta', '$nombre', '$correo')";

    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Alumno registrado satisfactoriamente');
        window.location.href = 'resgitrar.php'
        </scrip>"
        //echo "<br>Registro de alumno satisfactoriamente";
    } else {
        echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
</body>
</html>