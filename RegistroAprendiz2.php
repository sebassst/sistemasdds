<?php
 require_once(RUTA_APP."/view/inc/header.php");
 require_once(RUTA_APP."/view/inc/navbarAprendiz.php");

?>
<div class="col-lg-9 px-5">
    <div class="card mt-3">
     
         <form action="<?php echo RUTA_URL ?>Coordinador/RegistroJ" method="post" class="px-5" enctype="multipart/form-data">
        <div class="card-body">
                <h5 class="mt-3">Registro de la justificación</h5>
                <hr class="bg-info">
                <div class="row">
                     <div class="col-lg-6">    
                        <label for="" class="mt-3">Archivo: </label>
                        <input type="file" name="justificacion" required class="form-control">
                    </div>
                   
                    
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <label for="" class="mt-3">Número de proceso: </label>
                                    <input type="number" name="proceso" required class="form-control" placeholder="#">
                                </div>
                            </div>
                        </div>
                
                  
                    
               
        </div>
        <div class="card-footer text-center mt-2">
              <div class="col-lg-12 ">
                        <button class="btn btn-info">Registrar</button>
                    </div>
        </div>
    </form>
    </div>
   
    </div>
    </div>

<?php
    require_once(RUTA_APP."/view/inc/footer.php");
?>
