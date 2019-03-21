<?php
 require_once(RUTA_APP."/view/inc/header.php");
 require_once(RUTA_APP."/view/inc/navbarEnfe.php");

?>
<div class="col-lg-9 mt-0 py-0 px-5">
    <form action="<?php echo RUTA_URL ?>Enfermera/Inicioproceso" method="post" class="px-5">
    <h5 class="mt-3">Inicio de proceso</h5>
    
    <div class="row">
         <div class="col-lg-6">    
            <label for="" class="mt-3">motivo: </label>
            <input type="text" name="motivo" required class="form-control" placeholder="motivo">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">fecha1: </label>
            <input type="text" name="fecha1" required class="form-control" placeholder="fecha1">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">fecha2:</label>
            <input type="email" name="fecha2" required class="form-control" placeholder="fecha2">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">fecha3:</label>
            <input type="text" name="fecha3" required class="form-control" placeholder="fecha3">
        </div>

         <div class="col-lg-6">
            <label for="" class="mt-3">ficha:</label>
            <input type="text" name="ficha" required class="form-control" placeholder="ficha">
        </div>
       
       <div class="col-lg-6">
            <label for="" class="mt-3">programa:</label>
            <input type="text" name="programa" required class="form-control" placeholder="programa">
        </div>

        <div class="col-lg-6">
            <label for="" class="mt-3">fecha generada:</label>
            <input type="text" name="fecha generada" required class="form-control" placeholder="fecha generada">
        </div>
       
        
        <div class="col-lg-12 tamano">
            <button type="submit" class="btn btn-primary  bg-info">Registrar</button>
        </div>
        
    </form>
    </div>
    </div>

<?php
    require_once(RUTA_APP."/view/inc/footer.php");
?>
