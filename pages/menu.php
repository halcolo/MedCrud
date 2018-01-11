<?php  
//Start the connections and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if($_SESSION['user'] == "") { header("Location: index.php"); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/general.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

  <body background="../img/moon.jpg">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.html"><img src="../img/ico2.png" style="max-width:120px; margin: -7px;" name="Inicio"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="admin.php">Administración de Usuarios</a></li>
      <li><a href="hojas.php">Ingreso de Hojas de vida</a></li>
      <li><a href="consulta.php">Consulta de H.V</a></li>
      <li><a href="actualizacion.php">Actualización de H.V</a></li>
      <li><a href="reportes.php">Reportes Especiales</a></li>
      <li><a href="estructuras.html">Ciclos</a></li>
      <li><a href="form.html">Operaciones Matemáticas</a></li>
      <li><a href="usu.php">Crear usuario</a></li>
<?php 
if($_SESSION['user'] != "") { 
?>  
      <li><a href="function/logout.php">Cerrar sesion</a></li>
<?php 
}
?>  

    </ul>
    </div>
  </nav>
  
<div class=" text-center">
        <h1></form> MEDIMAX</h1>
        <img aling=center src="../img/portada.png"><style type="width:105px; height:150px;"></style>
      <p>Su salud al dia.</p> 
    </div>
      <div class="row">
        <div class="container">
        <h3>Información.</h3>
        <p>Gestor de la informacion generada por los curriculum (H.V) del personal de nuestro hospital MEDIMAX.</p>
      </div>

      </div>
      </div>
    </div>
  </body>
  <?phpunset($_SESSION['reg_med']);?>
</html>
