<?php
session_start();
require_once "conexion.php";

// =====================================================
// ELIMINAR ALUMNO
// =====================================================
if (isset($_POST["eliminar"])) {
    $numcuenta = $_POST["numcuenta"];
    $sql = "DELETE FROM alumnos WHERE numcuenta = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $numcuenta);
    if ($stmt->execute()) {
        echo "<script>
                alert('Alumno eliminado correctamente');
                window.location.href = 'consultar.php';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('No se pudo eliminar el alumno');
              </script>";
    }
    $stmt->close();
}

// =====================================================
// ACTUALIZAR ALUMNO
// =====================================================
if (isset($_POST["actualizar"])) {
    $numcuentae = $_POST["numcuenta"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    $sql2 = "UPDATE alumnos SET nombre = ?, correo = ? WHERE numcuenta = ?";
    $stmt = $conn->prepare($sql2);

    if (!$stmt) {
        die("Error al preparar UPDATE: " . $conn->error);
    }

    $stmt->bind_param("ssi", $nombre, $correo, $numcuentae);

    if ($stmt->execute()) {
        echo "<script>
                alert('Alumno actualizado correctamente');
                window.location.href = 'consultar.php';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('Error al actualizar: " . addslashes($stmt->error) . "');
              </script>";
    }
    $stmt->close();
}

// =====================================================
// CONSULTAR ALUMNO PARA MODIFICAR
// =====================================================
$alumnoEditar = null;
if (isset($_GET["editar"])) {
    $numcuentae = $_GET["editar"];
    $sql2 = "SELECT * FROM alumnos WHERE numcuenta = ?";
    $stmt = $conn->prepare($sql2);
    $stmt->bind_param("i", $numcuentae);
    $stmt->execute();
    $resultadoEditar = $stmt->get_result();

    if ($resultadoEditar->num_rows > 0) {
        $alumnoEditar = $resultadoEditar->fetch_assoc();
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Registrar Alumno</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}
.container {
  padding: 16px;
  background-color: white;
}
input[type=text], input[type=password], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus, input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
a {
  color: dodgerblue;
}
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
th, td {
  text-align: left;
  padding: 16px;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}
/* Estilos adicionales necesarios para Modificar y Eliminar */
.btn-modificar {
  background-color: #f39c12;
  color: white;
  border: none;
  padding: 6px 12px;
  border-radius: 4px;
  text-decoration: none;
  font-size: 14px;
}
.btn-modificar:hover {
  background-color: #d68910;
  color: white;
}
.btn-eliminar {
  background-color: #e74c3c;
  color: white;
  border: none;
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 14px;
}
.btn-eliminar:hover {
  background-color: #c0392b;
}
.modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.6);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}
.modal-contenido {
  background: white;
  width: 400px;
  max-width: 90%;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 5px 25px rgba(0,0,0,0.3);
}
.campo {
  margin-bottom: 18px;
}
.campo label {
  display: block;
  margin-bottom: 6px;
  font-weight: bold;
}
.campo input {
  width: 100%;
  padding: 10px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 5px;
}
.botones {
  display: flex;
  justify-content: center;
  gap: 10px;
  margin-top: 20px;
}
.btn-guardar {
  background: #27ae60;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
.btn-cancelar {
  background: #7f8c8d;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
</style>
</head>
<body>
 
<div class="p-4 bg-dark text-white text-center">
  <h2>Registro de Alumno</h2>
</div>
 
<div class="container-fluid" style="max-width:800px; margin:30px auto;">
<?php
    $sql = "SELECT * FROM alumnos";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
?>
<table>
  <tr>
    <th>Num Cuenta</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th colspan="2" style="text-align: center;">Acciones</th>
  </tr>
  <?php
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $row["numcuenta"]; ?></td>
        <td><?php echo $row["nombre"]; ?></td>
        <td><?php echo $row["correo"]; ?></td>
        <td style="text-align: center;">
            <a href="consultar.php?editar=<?php echo $row["numcuenta"]; ?>" class="btn-modificar">Modificar</a>
        </td>
        <td style="text-align: center;">
            <form method="POST" action="consultar.php" style="margin:0;" onsubmit="return confirm('¿Está seguro de eliminar este alumno?');">
              <input type="hidden" name="numcuenta" value="<?php echo $row["numcuenta"]; ?>">
              <button type="submit" name="eliminar" class="btn-eliminar">Eliminar</button>
            </form>
        </td>
    </tr>
    <?php
  }
  ?>
</table>
<?php
    } else {
      echo "No existen alumnos";
    }
?>
</div>

<!-- ==================================================
     MODAL DE MODIFICACIÓN
     ================================================== -->
<?php
if ($alumnoEditar != null) {
?>
<div class="modal">
  <div class="modal-contenido">
    <h3 class="text-center mb-3">Modificar alumno</h3>
    <form method="POST" action="consultar.php">
      <input type="hidden" name="numcuenta" value="<?php echo $alumnoEditar["numcuenta"]; ?>">
      
      <div class="campo">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo htmlspecialchars($alumnoEditar["nombre"]); ?>" required>
      </div>
      
      <div class="campo">
        <label>Correo</label>
        <input type="email" name="correo" value="<?php echo htmlspecialchars($alumnoEditar["correo"]); ?>" required>
      </div>

      <div class="botones">
        <button type="submit" name="actualizar" class="btn-guardar">Guardar</button>
        <button type="button" class="btn-cancelar" onclick="window.location.href='consultar.php';">Cancelar</button>
      </div>
    </form>
  </div>
</div>
<?php
}
?>

</body>
</html>