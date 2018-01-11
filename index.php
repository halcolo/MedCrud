<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
echo $_SESSION['user'];
if($_SESSION['user'] != "") { header("Location: pages/menu.php"); }

//next code is to create db automatically.
/*require_once ('pages/function/create_db.php');*/
?>


<!DOCTYPE html>
<html>
<head>
         <meta http-equiv="content-type" content="text/html", charset="utf-8"/>
        <title>Sistema médico</title>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/modern-business.css" >
        <link href='http://fonts.googleapis.com/css?family=Averia+Serif+Libre:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,300italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



</head>
<body>


<form class="form-horizontal" action="pages/function/login.php" role="form" method="POST">
<fieldset>


      <section id="login-bg">
          <div id="login-bg-top">
              <div class="logo-circle"></div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <h3>Bienvenidos a Medimax, por favor ingrese</h3>
                      </div><!-- /.col-md-12 -->
                  </div><!-- /.row -->
              </div><!-- /.container -->
          </div>

          <div class="container">
              <div class="col-md-12">
                  <div class="bg-content">

						<div class="input-group">


                        <input id="Nom22" name="Nom22" type="text" class="form-control" placeholder="Nombre Usuario" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group" style="margin-top: 10px">
                        <input id="pass" name="pass" type="password" class="form-control" placeholder="Contraseña" aria-describedby="basic-addon1">
                      </div>


                      <div  class="input-group" style="margin-top: 50px;" >
                        <button id="send" name="send" class="btn btn-success btn-lg">Log-in</button>
                      </div>
							               <?php
                                echo $_SESSION['resp'];
                                unset($_SESSION['resp']);
                             ?>
                  </div>
              </div>
          </div>
      </section>


</fieldset>
</form>

</body>
</html>
