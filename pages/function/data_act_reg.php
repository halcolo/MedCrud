  <?php

  session_start();
  require_once('connect.php');

$tipid = $_POST['tipid'];
$Docid = $_POST['Docid'];
$name = $_POST['Nom22'];
$lname = $_POST['Prénom'];
$addr = $_POST['addr'];
$regmed = $_POST['regmed'];
$TEL = $_POST['TEL'];
$EMAIL = $_POST['EMAIL'];
$ciudad = $_POST['ciudad'];
$esp = $_POST['esp'];
$hosp = $_POST['hosp'];




$sql = "UPDATE tabla301127_30 SET tipo_doc = $tipid, id_doc = $Docid, nom_ter = '$name', apell_ter = '$lname',
        direccion = '$addr', reg_med = '$regmed', telefono = $TEL, email = '$EMAIL', ciudad = '$ciudad', 
        especialidad = '$esp', hospital = '$hosp', fecha_modificacion = sysdate() WHERE id_doc = $Docid";


if ($conn->query($sql) === TRUE) {
    echo $_SESSION['resp'] ="Se actualizó correctamente al tercero";
} else {
    echo $_SESSION['resp']  = "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();

header('Location: ../actualizacion.php');
?>

