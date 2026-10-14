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
  background-color: black;
}
 
* {
  box-sizing: border-box;
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
</style>
</head>
<body>
 
<div class="p-4 bg-dark text-white text-center">
  <h2>Registro de Alumno</h2>
</div>
 
<div class="container-fluid" style="max-width:600px; margin:30px auto;">
 
  <form action="registrado.php" method="post">
    <div class="container">
      <h1>Registrar Alumno</h1>
      <p>Llena todos los datos del formulario.</p>
      <hr>
 
      <label for="numcuenta"><b>Numero de Cuenta</b></label>
      <input type="number" placeholder="Num Cuenta" name="numcuenta" id="numcuenta" required>
 
      <label for="name1"><b>Nombre completo</b></label>
      <input type="text" placeholder="Nombre completo" name="nombre" id="name1" required>
 
      <label for="email"><b>Correo</b></label>
      <input type="text" placeholder="Enter Email" name="correo" id="correo" required>
 
      <hr>
      <p>Al crear una cuenta aceptas nuestros <a href="#">Terminos y Privacidad</a>.</p>
 
      <button type="submit" class="registerbtn">Register</button>
    </div>
 
    <div class="container signin">
      <p><a href="index.php">Regresar al inicio</a></p>
    </div>
  </form>
</div>
 
</body>
</html>
 