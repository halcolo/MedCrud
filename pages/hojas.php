<?php  
//Start the connections and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if($_SESSION['user'] == "") { header("Location: ../index.php"); }
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


<div class = "container">

<form class="form-horizontal" action="function/create_new_ter.php" role="form" method="POST">
<fieldset>

<!-- Form Name -->
<legend><center>Añadir Hoja De Vida</center></legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nom22">Nombre</label>  
  <div class="col-md-4">
  <input id="Nom22" name="Nom22" placeholder="Nombre" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Prénom">Apellido</label>  
  <div class="col-md-4">
  <input id="Prénom" name="Prénom" placeholder="Apellido" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="regmed">Registro medico</label>  
  <div class="col-md-4">
  <input id="regmed" name="regmed" placeholder="Registro medico" class="form-control input-md" required="" type="text">
    
  </div>
</div>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tipid">Tipo de documento</label>
  <div class="col-md-4">
    <select id="tipid" name="tipid" class="form-control">
      <option value="0">Escoger valor</option>
      <option value="1">Cedula de ciudadanía</option>
      <option value="2">Tarjeta de identidad</option>
      <option value="3">Pasaporte</option>
      <option value="4">Cedula de Extranjería</option>
      <option value="5">Registro Civil</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Docid">Documento de identidad</label>  
  <div class="col-md-4">
  <input id="Docid" name="Docid" placeholder="Documento de identidad" class="form-control input-md" required="" type="number" min ='1' max="100000000000">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="requestid">Telefono</label>  
  <div class="col-md-4">
  <input id="TEL" name="TEL" placeholder="Telefono" class="form-control input-md" required="" type="number" min ='1' max="100000000000"/>
    
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
  <label class="col-md-4 control-label" for="addr">Dirección</label>  
  <div class="col-md-4">
  <input id="addr" name="addr" placeholder="Dirección" class="form-control input-md" required="" type="text">
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="ciudad">Ciudad</label>  
  <div class="col-md-4">
  <input id="ciudad" name="ciudad" placeholder="Ciudad" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CP">Especialidad</label>  
  <div class="col-md-2">
  <input id="esp" name="esp" placeholder="Especialidad" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CP">Hospital donde trabaja</label>  
  <div class="col-md-2">
  <input id="hosp" name="hosp" placeholder="Hospital" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="send"></label>
  <div class="col-md-4">
    <button id="send" name="send" class="btn btn-primary">Envíar</button>

  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Respuesta</label>
  <div class="col-md-4">                     
  
        <?php 
          //Se imprime el resultado redondeandolo en caso de ser un decimal.
          echo ($_SESSION["resp"]); 
          unset($_SESSION["resp"]);
        ?>
    
  </div>
</div>
  
</fieldset>
</form>
</div>	




</html>
</body>