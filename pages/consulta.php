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

    <form class="form-horizontal" action="function/admin_select.php" role="form" method="POST">
<fieldset>

<!-- Form Name -->
<legend><center>Consulta Hojas de Vida</center></legend>


<!-- Text input-->
<div class="form-group">

  <label class="col-md-4 control-label" for="requestid">No documento</label>  
  <div class="col-md-4">  
  <input id="doc" name="doc" placeholder="Documento" class="form-control input-md" required="" type="number" min ='1' max="100000000000"/>
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="send"></label>
  <div class="col-md-4">
    <button id="send" name="send" class="btn btn-primary">Buscar</button>


  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Registro medico: </label>
  <div class="col-md-4">                     
  
        <?php 
          //Se imprime el resultado redondeandolo en caso de ser un decimal.
          echo ($_SESSION['reg_med']); 
          unset($_SESSION['reg_med']);
        ?>
    
  </div>
</div><!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Número documento: </label>
  <div class="col-md-4">                     
  
        <?php 
          //Se imprime el resultado redondeandolo en caso de ser un decimal.
          echo ($_SESSION['id_doc']); 
          unset($_SESSION['id_doc']);
        ?>
    
  </div>
</div><!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Nombre: </label>
  <div class="col-md-4">                     
  
        <?php 
          //Se imprime el resultado redondeandolo en caso de ser un decimal.
          echo ($_SESSION["nom_ter"]); 
          unset($_SESSION["nom_ter"]);
        ?>
    
  </div>
</div><!-- Textarea -->

<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Apellido: </label>
  <div class="col-md-4">                     
  
        <?php 
          //Se imprime el resultado redondeandolo en caso de ser un decimal.
          echo ($_SESSION["apell_ter"]); 
          unset($_SESSION["apell_ter"]);
        ?>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Dirección: </label>
  <div class="col-md-4">                     
  
        <?php 
          //Se imprime el resultado redondeandolo en caso de ser un decimal.
          echo ($_SESSION["direccion"]); 
          unset($_SESSION["direccion"]);
        ?>
    
  </div>
</div>




<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Ciudad: </label>
  <div class="col-md-4">                     
  
        <?php 
          //Se imprime el resultado redondeandolo en caso de ser un decimal.
          echo ($_SESSION["ciudad"]); 
          unset($_SESSION["ciudad"]);
        ?>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Especialidad: </label>
  <div class="col-md-4">                     
  
        <?php 
          //Se imprime el resultado redondeandolo en caso de ser un decimal.
          echo ($_SESSION["especialidad"]); 
          unset($_SESSION["especialidad"]);
        ?>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Hospita: </label>
  <div class="col-md-4">                     
  
        <?php 
          //Se imprime el resultado redondeandolo en caso de ser un decimal.
          echo ($_SESSION["hospital"]); 
          unset($_SESSION["hospital"]);
        ?>
    
  </div>
</div>




</fieldset>



</div>
</div>



</body>
</html>