<?php

session_start();
require_once('connect.php');

//Se genera el reporte por medio de MYSQLDUMP
$mysqldump='"C:\AppServ\MySQL\bin\mysqldump.exe"';
$backup_file = '"C:\AppServ\www\Medimax\BCK7112017\"'.$dbname. "-" .date("Y-m-d-H-i-s"). ".sql";
system("$mysqldump --no-defaults -u $username -p$password $dbname > $backup_file");
echo $_SESSION['resp'] ="Backup generado de forma exitosa";
$conn->close();
header('Location: ../admin.php');
unset($_SESSION['reg_med']);
?>


