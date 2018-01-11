<?php


session_start();
require_once('connect.php');


$doc = $_POST['doc'];

$sql = "SELECT reg_med, id_doc, nom_ter, apell_ter, direccion, ciudad, especialidad, hospital FROM tabla301127_30 WHERE id_doc = '$doc' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo $_SESSION['reg_med'] = $row["reg_med"];
        echo $_SESSION['id_doc'] = $row["id_doc"];
        echo $_SESSION['nom_ter'] = $row["nom_ter"];
        echo $_SESSION['apell_ter'] = $row["apell_ter"];
        echo $_SESSION['direccion'] = $row["direccion"];
        echo $_SESSION['ciudad'] = $row["ciudad"];
        echo $_SESSION['especialidad'] = $row["especialidad"];
        echo $_SESSION['hospital'] = $row["hospital"];

    }
} else {
    echo "0 resultados";
}
$conn->close();

header('Location: ../consulta.php');

?>