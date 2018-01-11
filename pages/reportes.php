<?php  
//Start the connections and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if($_SESSION['user'] == "") { header("Location: ../index.php"); }
?>

<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
        <title>Operaciones</title>
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


<div class = "container">

<div class="row">

    <form class="form-horizontal" action="function/report.php" role="form" method="POST">
<fieldset>

<!-- Form Name -->
<legend><center>Reportes especiales</center></legend>


<!-- Text input-->
<div class="form-group">

  <label class="col-md-4 control-label" for="requestid">Número de ID</label>  
  <div class="col-md-4">
  <input id="ID" name="ID" placeholder="ID" class="form-control input-md" required="" type="number" min ='1' max="100000000000000"/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Nombre</label>  
  <div class="col-md-4">
  <input id="NOM" name="NOM" placeholder="Nombre" class="form-control input-md" type="Text" maxlength="35">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Apellido</label>  
  <div class="col-md-4">
  <input id="APE" name="APE" placeholder="Apellido" class="form-control input-md" type="Text" maxlength="35">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Email</label>  
  <div class="col-md-4">
  <input id="EMAIL" name="EMAIL" placeholder="Email" class="form-control input-md" type="email" maxlength="50">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Contraseña</label>  
  <div class="col-md-4">
  <input id="PASS" name="PASS" placeholder="Contraseña" class="form-control input-md" type="password" maxlength="15">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="requestid">Telefono</label>  
  <div class="col-md-4">
  <input id="TEL" name="TEL" placeholder="Telefono" class="form-control input-md" required="" type="number" min ='1' max="100000000000"/>
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="send"></label>
  <div class="col-md-4">
    <button id="send" name="send" class="btn btn-primary">Enviar</button>


  </div>
</div>

</fieldset>

</div>
</div>

</body>
</html>