<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
  position: static; /* evita que Bootstrap fuerce position:relative y recorte el menu */
}

.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

/* Estilos del formulario dentro del modal */
#formModal .modal-body {
  background-color: white;
  padding: 0;
}

.form-container {
  padding: 16px;
  background-color: white;
}

.form-container input[type=text],
.form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  box-sizing: border-box;
}

.form-container input[type=text]:focus,
.form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.form-container hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.form-container .registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.form-container .registerbtn:hover {
  opacity: 1;
}

.form-container a {
  color: dodgerblue;
}

.form-signin {
  background-color: #f1f1f1;
  text-align: center;
  padding: 16px;
}
</style>
</head>
<body>
<?php
  $acceso = $_POST['acceso'] ?? '';

  // Solo guardamos el usuario en sesion cuando viene del formulario de login
  if ($acceso == "1") {
    $_SESSION["usuario"] = $_POST['usuario'] ?? '';
  }

  // Si no hay sesion, queda vacio y no marca warning
  $usuarioa = $_SESSION["usuario"] ?? '';
?>
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Inicio</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Alumnos
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="registrar.php">Registrar </a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#formModal">Formulario </a>
      <a href="Consultar.php">Consultar</a>
    </div>
  </div>
  <a href="logout.php">Salir</a>
  <a href="#usuario">usuario: <?php echo htmlspecialchars($usuarioa); ?></a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">
  <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
</div>

<!-- Modal con el formulario de Registro (igual al de index principal) -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Ejercicio 1 - Formulario de Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="registrado.php" method="post">
          <div class="form-container">
            <h1>Registro</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="name1"><b>Nombre completo</b></label>
            <input type="text" placeholder="Nombre completo" name="name1" id="name1" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
            <hr>
            <p>By creating an account you agree to our <a href="#">Terms &amp; Privacy</a>.</p>

            <button type="submit" class="registerbtn">Register</button>
          </div>

          <div class="form-signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>