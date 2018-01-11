  <?php

  session_start();
  require_once('connect.php');

$regmed = $_SESSION["reg_med"];



$sql = "DELETE FROM tabla301127_30 WHERE reg_med = '$regmed'";


if ($conn->query($sql) === TRUE) {
    echo $_SESSION['resp'] ="Registro eliminado de forma exitosa";
    unset($_SESSION["reg_med"]);
} else {
    echo $_SESSION['resp']  = "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();

header('Location: ../admin.php');
?>
