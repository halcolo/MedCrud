  <?php

 require_once('connect.php');
 session_start();

$tipid = $_POST['tipid'];
$Docid = $_POST['Docid'];
$name = $_POST['Nom22'];
$pass = $_POST['pass'];
$EMAIL = $_POST['EMAIL'];


//Verify if the doc id is not created yet
$existe_id = "SELECT id_doc FROM usuarios WHERE id_doc = '$Docid'";
$result_id = $conn->query($existe_id) ;

//Verify if the user is not created yet
$existe_usu = "SELECT nombre_usuario FROM usuarios WHERE nombre_usuario = '$name'";
$result_usu = $conn->query($existe_usu) ;



	if ($result_id->num_rows > 0){

		$_SESSION['resp']  = "El documento ".$Docid ." ya existe.";
		header('Location: ../usu.php');

		} elseif ($result_usu->num_rows > 0){

			$_SESSION['resp']  = "El usuario ".$name ." ya existe.";
			header('Location: ../usu.php');

			}elseif ($tipid > 0) {

					$sql = "INSERT INTO usuarios (tipo_doc,id_doc,nombre_usuario,contrasena_usuario,estado_usuario,email,fecha_modificacion)
					VALUES ('$tipid', '$Docid', '$name', md5($pass),'$EMAIL', '1', sysdate() )";


						if ($conn->query($sql) == TRUE) {

						    	$_SESSION['resp'] ="Se insertó correctamente al tercero";


							}else {

						   		 $_SESSION['resp']  = "Error: " . $sql . "<br>" . $conn->error;

								}

				}else {

					$_SESSION['resp']  = "Debe escoger un tipo de documento";
					header('Location: ../usu.php');


				 }

		$conn->close();
		header('Location:../usu.php');
?>
