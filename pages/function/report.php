<?php

date_default_timezone_set('America/Bogota');

//Se Crean las variables que van a recibir el metodo POST del formulario que se encuentra en la p�gina principal
$ID		= $_POST['ID'];
$NOM	= $_POST['NOM'];
$APE 	= $_POST['APE'];
$EMAIL 	= $_POST['EMAIL'];
$PASS 	= $_POST['PASS'];
$TEL 	= $_POST['TEL'];

$nombre_archivo = "$ID"	; 

$Path = "../REG/$nombre_archivo";

if(file_exists('../REG/'.$nombre_archivo.".txt"))
	{
		$mensaje = "Modificado en la fecha ";
	}

	else
	{
		$mensaje = "Creado en la fecha ";
	}

	if($archivo = fopen('../REG/'.$nombre_archivo.".txt", "a"))
	{
		if(fwrite($archivo, $ID .";".$NOM.";".$APE.";".$EMAIL.";".$PASS.";".$TEL." ".$mensaje.date("d m Y h:i:s")."\n"))
		{
			echo "Se ha ejecutado correctamente";
		}
		else
		{
			echo "Ha habido un problema al crear el archivo";
		}

		fclose($archivo);
	}


header('Location: ../reportes.html')
?>