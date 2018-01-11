<?php  
//Start the connections and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if($_SESSION['user'] == "") { header("Location: ../index.php"); }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/general.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 <body >
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" >HOSPITAL MEDIMAX</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="/Medimax/index2.html">INDEX</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="page-header">
        <div class="text-center">
          <br>
          <br>
      <h1>Solución de la Operación</h1>    
       <p>Observe aquí el resultado</p>   
       <img aling=center src="../img/moon.jpeg"><style type="width:105px; height:150px;"></style>
      </div>

<?php

  $a = $_POST['a'];
  $b = $_POST['b'];
?>

<a href="../pages/form.html"> <p align=center> <img src="../img/home.png" width="50" height="50" name="form"> </p> </a>

<?php
   if(isset($_POST['enviar'])){ // si damos clic al botón calcular entonces ...
                         
        if($_POST['op'] === "1"){ // si se selcciona algun radio button realizará la operación deseada
           $resul = $_POST['a'] + $_POST['b'];
        }
        elseif($_POST['op'] === "2"){ 
          $resul = $_POST['a'] - $_POST['b'];
        }
        elseif($_POST['op'] === "3"){
            $resul = $_POST['a'] * $_POST['b'];
        }
        else{
            $resul = $_POST['a'] / $_POST['b'];
        }
         
    }
?>
</body>

<br><pre><p align="left"><label>Resultado:</label></p>
<p align="center"><input type="text" name="res" value="<?php if(isset($_POST['enviar'])){ echo $resul;} ?>" readonly></p></pre>

</html>







