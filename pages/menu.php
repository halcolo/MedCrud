<?php
//Start the connections and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if($_SESSION['user'] == "") { header("Location: index.php"); }
?>
<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">

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
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/main_index.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/style.css">

</head>

<body itemscope="itemscope" itemtype="http://schema.org/Person">
	<div class="container-fluid">
		<div class="row main clearfix">
			<nav class="navbar navbar-default" role="navigation">

			</nav>
			<nav class="navbar navbar-inverse bg-primary navbar-fixed-top">
				<a class="navbar-brand" href="../index.php"><img src="../img/logo_fit3_fondo.png" style="max-width:120px; margin: -7px;" name="Inicio"></a>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="admin.php">Administración de Usuarios</a>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="hojas.php">Ingreso de Hojas de vida</a></li>
						<div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="consulta.php">Consulta de H.V</a></li>
							<div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="actualizacion.php">Actualización de H.V</a></li>
								<div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="reportes.php">Reportes Especiales</a></li>
									<div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="estructuras.html">Ciclos</a></li>
										<div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="form.html">Operaciones Matemáticas</a></li>
											<div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="usu.php">Crear usuario</a></li>
												<?php
					if($_SESSION['user'] != "") {
					?>
													<div class="collapse navbar-collapse" id="navbarTogglerDemo01 "><a class="navbar-brand col-md-offset-1" href="function/logout.php">Cerrar sesion</a></li>
														<?php
					}
					?>

			</nav>
			<section class="col-md-9 card-wrapper col-md-offset-2">
				<div class="card background-card" style="min-height: 100px;">
					<h4 class="text-uppercase">Wellcome</h4>
					<!--....-->
					<hr>
					<div class="background-details">
						<div id="about" class="detail">
							<div class="info">
								<div itemprop="description" class="content"><img src="../img/Banner_2_fit.jpg" alt="..." class="img-rounded"></div>
							</div>
						</div>
						<!--....-->
						<hr>
						<div class="background-details">
							<div id="about" class="detail">
								<div class="icon"><i class="fs-lg icon-heart"></i><span class="mobile-title">About</span></div>
								<div class="info">
									<h4 class="title text-uppercase">About</h4>
									<div itemprop="description" class="content">Lorem ipsum dolor sit amet, aperiam dolorum eligendi no vel, nec etiam oportere an. Id qui nihil audire contentiones, nam te dictas audire complectitur. Graecis phaedrum assentior id eam. Elit eleifend pri at. Cu epicuri elaboraret quo. Ei populo suscipit sit, an reprimique consequuntur est. Stet offendit mel te. An malis ceteros pro, at sed velit consetetur. An qui labore antiopam repudiare.<p>Qui ea saepe efficiantur, ne aperiam eligendi senserit ius. Eum summo dicit munere te, ne pri fabellas voluptatibus vituperatoribus. Nec ne sensibus suavitate deseruisse. Harum affert definitionem eum ut, erant verterem dissentias ex mei, debet laudem in per.<p>Cu quem indoctum signiferumque vel, duo ea paulo cetero adipiscing, velit ponderum usu cu. Pri ut partem salutandi, dicam invidunt contentiones ex nam. Sed mazim quidam id, mea ex nonumes incorrupte, no cum ponderum appellantur adversarium. Ad quidam salutandi pertinacia mea, duo an harum vocibus inciderint. ne nonumy persequeris, putant complectitur et nec. Mei et nonumes graecis constituto, pro audiam theophrastus et. Ne qui dolores quaestio, congue soleat volutpat an sea. No vivendo accusamus scripserit sea, pri ea impetus pertinacia. Vix ea quis putent liberavisse.Vix ea nulla recteque, quas definitionem sit id, te utroque forensibus qui. Ex duo unum fuisset. Lorem minimum ut eum, vitae dolorum laoreet quo an. Ne primolestie luptatum, ea mel alii inani mnesarchum.Id inermis repudiare similique eam. Eros adhuc civibus no duo, dolore accusata referrentur duo ei, te everti option officiis eam. <p>In dicunt epicuri pri, ne duo appareat abhorreant. Hinc wisi altera est ad.um et fuisset epicurei iudicabit, iisque philosophia ea quo. Et mei fabulas minimum, omnium tibique an quo, an brute inani efficiendi vix. Prima fastidii sit no, usu cu congue intellegat deseruisse. Facer etiam intellegat no sed. Eam erat munere aperiri no. Tota verear salutandi vim ea.Ipsum scripserit dissentiet ea eam. Eam facer timeam id, ius id brute inermis laboramus. Ea eam iisque facilis, id diam civibus per. Sed mundi choro voluptua et.Altera civibus ei sed, mea prompta tractatos aliquando et, cu possim intellegebat sed. Sea essent everti consequuntur cu, tota expetenda vituperatoribus ei duo, cetero dolorem ea vim. At blandit placerat partiendo qui. Justo utamur regione cum ei, ludus cotidieque sit ad. Civibus argumentum conclusionemque eam ei, mel veritus suavitate ea, duo ut elit vidisse fastidii.</div>
								</div>
							</div>
							<!--....-->
							<div id="interests" class="detail">
								<div class="icon"><i class="fs-lg icon-book"></i><span class="mobile-title">Interests</span></div>
								<div class="info">
									<h4 class="title text-uppercase">Hashtags</h4>
									<div class="content">
										<ul class="list-unstyled">
											<li class="card card-nested">
												<p><strong>Sports</strong></p>
												<div class="space-top labels"><span class="label label-keyword">#MedMax</span><span class="label label-keyword">#Hospital</span><span class="label label-keyword">#Health</span><span class="label label-keyword">#Medical</span></div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!--....-->
							<hr>
							<div class="social-links text-center">
								<div>
									<a href="" rel="tooltip" title="juandyego0408" class="fs-2x social-link icon-mail"></a>
									<a href="https://github.com/halcolo" target="_blank" rel="tooltip" title="Me on Github" class="fs-2x social-link link-github icon-github"></a>
									<a href="https://www.linkedin.com/in/jdalfons" target="_blank" rel="tooltip" title="Me on Linkedin" class="fs-2x social-link link-linkedin icon-linkedin"></a>
									<a href="skype:juandyego48?call" rel="tooltip" title="juandyego0408" class="fs-2x social-link icon-skype"></a>
								</div>
							</div>
						</div>
					</div>
			</section>
			</div>
			</div>
</body>
  <?phpunset($_SESSION['reg_med']);?>
</html>
