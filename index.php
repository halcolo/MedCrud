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
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MedCrud</title>
  <meta charset="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script data-rocketsrc="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js" data-rocketoptimized="true" type="text/javascript" async=""></script>
  <script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/b7ef205d/cloudflare-static/rocket.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;subset=latin" media="all">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/main_index.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">


</head>

<body itemscope="itemscope" itemtype="http://schema.org/Person">
<p>

  <form class="form-horizontal" action="pages/function/login.php" role="form" method="POST">
  <fieldset>


        <section id="login-bg">
            <div id="login-bg-top">
                <div><img src="img/logo_Comp_fit2.png"  class="icon-heart animated bounceIn"></div>
                <div class="container">
                    <div class="row">

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>

            <div class="container">
                <div class="col-md-12">
                    <div class="animated fadeInUp retraso-1 bg-content">

  						<div class="input-group">


                          <input id="Nom22" name="Nom22" type="text" class="form-control" placeholder="Nombre Usuario" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group" style="margin-top: 10px">
                          <input id="pass" name="pass" type="password" class="form-control" placeholder="Contraseña" aria-describedby="basic-addon1">
                        </div>


                        <div  class="input-group" style="margin-top: 50px;" >
                          <button id="send" name="send" class="btn btn-primary btn-lg">Log-in</button>
                          <p>
                          <nav>
                            <a class="icon-link"><a href="#" class="espacio-derecha">Web Page</a>
                            <a class="icon-mail"><a href="#" class="espacio-derecha">Contacto</a>
                            <a class="icon-github"><a href="https://github.com/halcolo" target="_blank" class="espacio-derecha">GitHub</a>
                            </ul>
                          </nav>
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
