<!DOCTYPE html>
<html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="Info +58Mining">
  <meta name="author" content="Miguel Fraga ,Diego Di Salvatore and Gabriel Taccone">

  <title>+58 Mining</title>

  <link rel="icon" href="images/favicon.png">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/estilos3.css">
  <link rel="stylesheet" href="CSS/animate.css">
</head>
<body>

	<section class="container-fluid infotable">
    <section class="row">
      <div class="col-md-2"></div>
  		<div class="col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Contraseña</th>
              <th scope="col">N° de entradas</th>
            </tr>
          </thead>  
          <tbody>
            <?php foreach ($result as $key => $value):
              $resultTemp = $value; ?>
              <tr>
                <th scope="row"><?php echo $resultTemp['id'];?></th>
                <td><?php echo $resultTemp['password'];?></td>
                <td><?php echo $resultTemp['n_entries'];?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
      <div class="col-md-2"></div>
    </section>

    <div class="prueba">
      <p class="text-center "><a  class="weltex" href=" <?php echo BASE_URL;?>">Volver</a></p>
    </div>
    
	</section>
</body>
</html>