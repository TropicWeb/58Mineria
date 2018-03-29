<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="Proyecto interno, +58 investors.">
  <meta name="author" content="TropicWDM">
  <title>+58 Mining</title>
  <link rel="icon" href="images/favicon.png">
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>

<p>
  <?php echo "Usuario: $_SESSION[id]";?>
  <br>
  <?php echo "Password: $_SESSION[password]";?>  
  <br>
  <?php echo "N-entries: $_SESSION[n_entries]";?>  
</p>

 <!--Seccion 1--> 

<section class="container-fluid sectionunoA">
  <div class="row">
      <div class="col-md-2 col-lg-2"></div>
      <div class="col-md-8 col-xs-12 col-sm-12 col-lg-8">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Diapositivas del Carousel -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/1.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/2.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/3.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/4.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/5.jpg" alt="" class="img-responsive">
          </div>

          <div class="item">
            <img src="images/6.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/7.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/8.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/9.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/10.jpg" alt="" class="img-responsive">
          </div>

          <div class="item">
            <img src="images/11.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/12.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/13.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/14.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/15.jpg" alt="" class="img-responsive">
          </div>
        </div>  
      
        <!-- Controles -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
    <div class="col-md-2 col-lg-2"></div>
  </div>
</section>


<section class="container-fluid sectionunoB">
  <div class="row">
      <div class="col-md-2 col-lg-2"></div>
      <div class="col-md-8 col-xs-12 col-sm-12 col-lg-8">
        <div id="carousel-example-generica" class="carousel slide" data-ride="carousel">
        <!-- Diapositivas del Carousel -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/1a.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/2a.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/3a.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/4a.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/5a.jpg" alt="" class="img-responsive">
          </div>

          <div class="item">
            <img src="images/6a.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/7a.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/8a.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/9a.jpg" alt="" class="img-responsive">
          </div>
      
          <div class="item">
            <img src="images/10a.jpg" alt="" class="img-responsive">
          </div>
        </div>  
      
        <!-- Controles -->
          <a class="left carousel-control" href="#carousel-example-generica" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generica" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
    <div class="col-md-2 col-lg-2"></div>
  </div>
</section>

<section class="container-fluid sectionunoC">
  <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
      <div class="center">
        <video src="media/video.mp4" controls>
          Tu navegador no implementa el elemento <code>video</code>.
        </video>
      </div>
      <p class="text-center mar"><a href="logout" class="out">Salir</a></p>
      <p class="text-center mar"><a href="info" class="out">Reporte de entradas</a></p>
    </div>
  </div>
</section>

  <script src="JS/jquery.js"></script>
  <script src="JS/bootstrap.min.js"></script>
  <script src="JS/jquery.easing.min.js"></script>
  <script src="JS/carousel.js"></script>
</body>
</html>