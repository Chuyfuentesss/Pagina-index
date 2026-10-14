<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fime";

    $conn = mysqli_connect($servername, $username, $password, $dbname, 3307);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Conexion Satisfactoria";

    ?>
</body>
</html>
