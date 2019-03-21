
			
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Sdds sistema de desercion</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
        
            <li class="nav-item">
             	<a href="<?php echo RUTA_URL?>Paginas/CerrarSesion" class="btn btn-info">Cerrar sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->


        <div class="col-lg-3 ">
          <h5 class="my-4">Enfermera</h5>
          <br><br>
          <div class="list-group">
		        <a href="<?php echo RUTA_URL?>Enfermera"><i class="fas fa-address-book"></i> Home</a>
            <br>
				<a href="<?php echo RUTA_URL?>Enfermera/TablaAprendiz"><i class="fas fa-address-card"></i> Consultar justificación</a>
        <br>
				<a href="<?php echo RUTA_URL?>Enfermera/RegistroAprendiz"><i class="fab fa-amilia"></i> Insertar Aprendiz</a>
        <br>
        <a href="<?php echo RUTA_URL?>Enfermera/proceso"> <i class="fas fa-book"></i> Inicio proceso</a>
        <br>
        <a href="<?php echo RUTA_URL?>Enfermera/actualizar"><i class="fab fa-amilia"></i>Actualizar datos</a>
        <br>
            <a href="#" class="list-group-item"><i class="fas fa-align-justify"></i> mas</a>
          </div>
        </div>

      <!--   
  -->

