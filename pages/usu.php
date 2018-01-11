<?php
//Start the connections and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
require_once("function/secured.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
         <meta http-equiv="content-type" content="text/html", charset="utf-8"/>
        <title>Sistema médico</title>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/modern-business.css" >
        <link href='http://fonts.googleapis.com/css?family=Averia+Serif+Libre:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,300italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



</head>
<body>

<a href="menu.php"> <p align=center> <img src="../img/home.png" width="50" height="50" name="Inicio"> </p> </a>

<br>

<div class = "container">



<br>


<form class="form-horizontal" action="function/user_creation.php" role="form" method="POST">
<fieldset>

<!-- Form Name -->


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tipid">Tipo de documento</label>
  <div class="col-md-4">
    <select id="tipid" name="tipid" class="form-control">
      <option value="0">Tipo de identificación</option>
      <option value="1" <?php if($_SESSION["tip_doc"] == 1) { echo 'selected'; } ?>>Cedula de ciudadanía</option>
      <option value="2" <?php if($_SESSION["tip_doc"] == 2) { echo 'selected'; } ?>>Tarjeta de identidad</option>
      <option value="3" <?php if($_SESSION["tip_doc"] == 3) { echo 'selected'; } ?>>Pasaporte</option>
      <option value="4" <?php if($_SESSION["tip_doc"] == 4) { echo 'selected'; } ?>>Cedula de Extranjería</option>
      <option value="5" <?php if($_SESSION["tip_doc"] == 5) { echo 'selected'; } ?>>Registro Civil</option>
    </select>

      <?php unset($_SESSION["tip_doc"]); ?>

  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Docid">Documento de identidad</label>
  <div class="col-md-4">
  <input id="Docid" name="Docid" placeholder="Documento de identidad" class="form-control input-md" type="number" min ='1' max="100000000000" value=  <?php
          echo ($_SESSION["id_doc"]);
          unset($_SESSION["id_doc"]);
        ?> >

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nom22">Nombre Usuario</label>
  <div class="col-md-4">
  <input id="Nom22" name="Nom22" placeholder="Nombre" class="form-control input-md"  type="text" value=<?php
          echo ($_SESSION["nombre_usuario"]);
          unset($_SESSION["nombre_usuario"]);
        ?>>

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Prénom">Contraseña</label>
  <div class="col-md-4">
  <input id="pass" name="pass" placeholder="Contraseña" class="form-control input-md"  type="password" value =<?php
          echo ($_SESSION["contraseña_usuario"]);
          unset($_SESSION["contraseña_usuario"]);
        ?>>

  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Email</label>
  <div class="col-md-4">
  <input id="EMAIL" name="EMAIL" placeholder="Email" class="form-control input-md" type="email" maxlength="50" value = <?php
          echo ($_SESSION["email"]);
          unset($_SESSION["email"]);
        ?>>

  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="send"></label>
  <div class="col-md-4">
    <button id="send" name="send" class="btn btn-primary">Enviar</button>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="dis"></label>
  <div class="col-md-4">

        <?php
          echo ($_SESSION["resp"]);
          unset($_SESSION["resp"]);
        ?>

  </div>
</div>



</fieldset>
</form>

</html>
</body>
