<?php
 require_once(RUTA_APP."/view/inc/header.php");
 require_once(RUTA_APP."/view/inc/navbarEnfe.php");

?>
<div class="col-lg-9 px-5">
        <h5 class="mt-3">Registro aprendiz</h5>
        <hr class="bg-danger">
        <form action="<?php echo RUTA_URL ?>vendedor/RegistroUsuario" method="post" class="form-group">
        <div class="row">
            <div class="col-lg-6 mt-3">
                <label for="">Nombre: </label>
                <input type="text" name="nombre" required class="form-control" placeholder="nombre">
            </div>
            <div class="col-lg-6 mt-3">
                <label for="" >Apellido: </label>
                <input type="text" name="apellido" required class="form-control" placeholder="apellido">
            </div>
            <div class="col-lg-6 mt-3">
                <label for="">correo:</label>
                <input type="text" name="correo" required class="form-control" placeholder="correo">  
            </div>
            <div class="col-lg-6 mt-3">
                <label for="">telefono:</label>
                <input type="email" name="telefono" required class="form-control" placeholder="telefono Electronico">
            </div> 
            <div class="col-lg-6 mt-3">
                <label for="">documento:</label>
                <input type="text" name="documento" required class="form-control" placeholder="documento">
            </div>      <div class="col-lg-6 mt-3">
                <label for="">contraseña:</label>
                <input type="text" name="contraseña" required class="form-control" placeholder="contraseña">
            </div> 
            <div class="col-lg-6 mt-3">
                <label for="" >Tipo de identificacion:</label>
                <select name="tipo_documento_id" required class="form-control" >
                <option value="1">Cédula</option>
                <option value="2">Tarjeta de identidad</option>
              
                </select>
            </div> 
          
        </div>
        </form>

</div>
<?php
     require_once(RUTA_APP."/view/inc/footer.php");

?>