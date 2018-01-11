 <?php

 session_start();
 require_once('connect.php');


$sql = 'CREATE DATABASE bdunad301127_30';
if (mysqli_query($sql, $conn)) {
    //echo "La base de datos se creó correctamente\n";


        //Create DB "Hojas de vida"
        mysqli_select_db('bdunad301127_30',$conn );
        $tabla="CREATE TABLE IF NOT EXISTS `tabla301127_30` (
                  `sec_tercero` int NOT NULL auto_increment,
                  `tipo_doc` int(2) NOT NULL,
                  `id_doc` int (14) NOT NULL,
                  `nom_ter` varchar(50) NOT NULL,
                  `apell_ter` varchar(50) NOT NULL,
                  `direccion` varchar(50) NOT NULL,
                  `reg_med` varchar(20) NOT NULL,
                  `telefono` int(12) NOT NULL,
                  `email` varchar(50) NOT NULL,
                  `ciudad` varchar(50) NOT NULL,
                  `especialidad` varchar(50) NOT NULL,
                  `hospital` varchar(20) NOT NULL,
                  `fecha_modificacion` datetime NOT NULL ,
                  PRIMARY KEY  (`sec_tercero`)
)";
      //Create DB "Usuarios"
      mysqli_select_db('bdunad301127_30',$conn );
      $tabla2="CREATE TABLE IF NOT EXISTS `usuarios` (
                  `sec_usuario` int NOT NULL auto_increment,
                  `tipo_doc` int(2) NOT NULL,
                  `id_doc` int (14) NOT NULL,
                  `nombre_usuario` varchar(50) NOT NULL,
                  `contrasena_usuario` varchar(50) NOT NULL,
                  `estado_usuario` varchar(50) NOT NULL,
                  `email` varchar(50) NOT NULL,
                  `fecha_modificacion` datetime NOT NULL ,
                  PRIMARY KEY  (`sec_usuario`)




)";

            $crear_tabla=mysqli_query($tabla,$conn ) or die(mysql_error());
             if(!$crear_tabla){
                 //echo 'Error al crear la table en la base de datos';
                 }else{
                     //echo 'La tabla se creo correctamente';
                 }

            $crear_tabla2=mysqli_query($tabla2,$conn ) or die(mysql_error());
             if(!$crear_tabla){
                 //echo 'Error al crear la table en la base de datos';
                 }else{


                 }
               $sql2 = "INSERT INTO usuarios (tipo_doc,id_doc,nombre_usuario,contrasena_usuario,estado_usuario,email,fecha_modificacion)
                                VALUES ('1', '1', 'root', md5('12345678'),'noemail', '1', sysdate())";
                        $res2 = mysqli_query($sql2,$conn ) or die(mysqli_error());


                         if(!$res2){//Just this if crate the User root to acces to the api}

} else {



    }

}
?>
