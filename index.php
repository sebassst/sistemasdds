<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISTEMA DE DESERCION - SENA CEET</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=RUTA_URL?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=RUTA_URL?>public/css/half-slider.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">SISTEMA DE DESERCION</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <!-- Button trigger modal -->
            <li class="nav-item">

            <li class="nav-item">
              <a class="nav-link" href="#"  data-toggle="modal" data-target="#exampleModal">Iniciar</a>
            </li>           
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Acerca de</a>
         
            <li class="nav-item">
              <a class="nav-link" href="#">Contactanos</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('<?=RUTA_URL?>public/img/teclas.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?=RUTA_URL?>public/img/comput.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?=RUTA_URL?>public/img/tecla.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <h1>Bienvenido aca podras ver si estas en proceso de desercion</h1>
        <p>Bienvenido aprendiz en esta aplicacion podras saber si te encuentras en proceso <br>
               de desercion ten en cuenta que para estarlo tienes que tener 3 fallas consecutivas si las tienes alguno <br>
               de tus instructores te abra vinculado en este proceso si es asi puedes justificar tus inasistencias y salir de <br>
             este proceso</p>
          </p>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?=RUTA_URL?>public/vendor/jquery/jquery.min.js"></script>
    <script src="<?=RUTA_URL?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INICIA SESION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  class="form-group " id="form-sesion" action="<?=RUTA_URL?>/Paginas/login" method="POST">
                        
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                        <div class="input-group mb-2 mt-4 py-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text bg-blue-oscuro text-white ">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                    </div>
                          </div>
                          <input type="text" class="form-control rounded-0 py-3" name="num" id="inlineFormInputGroupUsername2" placeholder="N documento">
                        </div>
            
                    
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Password</label>
                    <div class="input-group mb-0 mt-2 py-3">
                      <div class="input-group-prepend">
                        <div class="input-group-text bg-blue-oscuro text-white"><i class="fa fa-unlock" aria-hidden="true"></i></div>
                      </div>
                      <input type="password" name="pass" class="form-control rounded-0 py-3" id="inlineFormInputGroupUsername2" placeholder="Password">
                    </div>
                    <div class="text-center">
                      <button class="btn btn-success  mt-1  rounded-0">Inicio de sesion</button>
                    </div>

                   
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>