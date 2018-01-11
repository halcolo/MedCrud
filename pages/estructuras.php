<?php  
//Start the connections and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if($_SESSION['user'] == "") { header("Location: ../index.php"); }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Operaciones</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php

$a = $_POST['a'];
$b = $_POST['b'];

?>

<div class="container">
  <h1>Estructuras de Programación PHP</h1>
  <p>Observe aquí los Resultados</p> 

<a href="menu.php"> <p align=center> <img src="../img/home.png" width="50" height="50" name="Inicio"> </p> </a>

<?php

echo "<b>"."Aplicando el Ciclo If-else se valida que:"."</b>"."<br>";

if ($a==$b) {
	echo "El primer número ".$a." es igual que el segundo número ingresado ".$b." <br> <br>";
}

if ($a>$b) {
	echo "El primer número ".$a." es mayor que el segundo número ingresado ".$b." <br> <br>";
}

if ($a<$b) {
	echo "El primer número ".$a." es menor que el segundo número ingresado ".$b." <br> <br>";
}

echo "<b>"."Aplicando el Ciclo For se valida que:"."</b>"."<br>";

for($x=1;$x<=30;$x++) { 
    echo "Los Números desde 1 hasta mi grupo de trabajo 301127_30 son: $x <br>";
} 

?>
  
</div>

</body>

</html>







