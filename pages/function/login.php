<?php

    session_start();
    require_once('connect.php');

$name = $_POST['Nom22'];
$pass = $_POST['pass'];

//Verify whit a sql script
$login = "SELECT * FROM usuarios WHERE nombre_usuario = '$name' AND contrasena_usuario = md5($pass)";
$result = $conn->query($login) ;



//Create the conection if the num of rows is > 0
if ($result->num_rows > 0) {
		$estado = "SELECT * FROM usuarios WHERE nombre_usuario = '$name'  AND estado_usuario = '1'" ;
		$resul_est = $conn->query($estado);


	if ($resul_est->num_rows > 0){

		//Validate if user is active or locked.
			$_SESSION['user'] = $name;
			$_SESSION['pass5'] = md5($pass);
			//echo $_SESSION['pass5'];
			header('Location: ../menu.php');

		} else {
					$_SESSION['resp'] = "Usuario no se encuentra activo";
					header('Location: ../../index.php');
				}


	}else {
			$_SESSION['resp'] = "Verifique el nombre de usuario o contraseña";
			echo 'hola';
			header('Location: ../../index.php');
		}


$conn->close();

?>
