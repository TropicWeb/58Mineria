<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
  
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="Login +58Mining">
  <meta name="author" content="Miguel Fraga ,Diego Di Salvatore and Gabriel Taccone">


  <title>+58 Mining</title>
  <link rel="icon" href="images/favicon.png">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/estilos1.css">
  <link rel="stylesheet" href="CSS/animate.css">
</head>

<body>

<section class="container-fluid">
	<article class="row logi">
		<article class="col-md-4 col-xs-2 col-sm-2"></article>
		<article class="col-md-4 col-xs-8 col-sm-8">
			<img class="img-responsive" src="images/logo5.png">
		</article>
		<article class="col-md-4 col-xs-2 col-sm-2"></article>
	</article>

	<article class="row contra">
		<article class="col-md-4 col-xs-2 col-sm-2"></article>
		<article class="col-md-4 col-xs-8 col-sm-8 forem">
			<form method="post">
				<input type="password" name="password" class="contraseña center-block text-center"> 
				<input type="submit" value="Entrar" class="boton center-block">				
			</form>
			<div class="mensajes">
				<p class="text-center true">Contraseña correcta    <i class="fa fa-check" aria-hidden="true"></i></p>
				<p class="text-center <?php if(!$error) echo 'false';?>">Contraseña incorrecta    <i class="fa fa-times" aria-hidden="true"></i></p>
			</div>			
		</article>	
		<article class="col-md-4 col-xs-2 col-sm-2"></article>	
	</article>
</section>

  <script src="JS/jquery.js"></script>
  <script src="JS/bootstrap.min.js"></script>
  <script src="JS/jquery.easing.min.js"></script>
</body>
</html>