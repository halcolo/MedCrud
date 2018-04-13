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




$sql = "INSERT INTO tabla301127_30 (tipo_doc,id_doc,nom_ter,apell_ter,direccion,reg_med,telefono,email,ciudad,especialidad,hospital,fecha_modificacion)
VALUES ('$tipid', '$Docid', '$name', '$lname', '$addr', '$regmed', '$TEL' ,'$EMAIL' , '$ciudad', '$esp', '$hosp', sysdate() )";

if ($conn->query($sql) === TRUE) {
    echo $_SESSION['resp'] ="Se insertó correctamente al tercero";
} else {
    echo $_SESSION['resp']  = "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();

header('Location: ../hojas.php');
?>
