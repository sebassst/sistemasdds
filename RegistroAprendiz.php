<?php
 require_once(RUTA_APP."/view/inc/header.php");
 require_once(RUTA_APP."/view/inc/navbarEnfe.php");

?>
<div class="col-lg-9 mt-0 py-0 px-5">
    <form action="<?php echo RUTA_URL ?>Administrador/RegistroEmpleado" method="post" class="px-5">
    <h5 class="mt-3">Registrar aprendices</h5>
  
    <div class="row">
         <div class="col-lg-6">    
            <label for="" class="mt-3">Nombre: </label>
            <input type="text" name="Nombre" required class="form-control" placeholder="Nombres">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Apellido: </label>
            <input type="text" name="Apellido" required class="form-control" placeholder="Apellidos">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Direccion:</label>
            <input type="text" name="Direccion" required class="form-control" placeholder="Direccion">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Correo:</label>
            <input type="email" name="Correo" required class="form-control" placeholder="Correo Electronico">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Telefono:</label>
            <input type="text" name="Telefono" required class="form-control" placeholder="Telefono">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Tipo de identificacion:</label>
            <select type="text" name="T_identificacion" required class="form-control" placeholder="Tipo de Identificacion">
                    <option value="">Seleccione ...</option>
                    <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
                    <option value="Tarjeta de identidad">Tarjeta de identidad</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Numero de identificacion:</label>
            <input type="text" name="N_identificacion" required class="form-control" placeholder="Numero de Identificacion">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Contraseña</label>
            <input type="Password" name="Password" require class="form-control" placeholder="Contraseña">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Confirmar contraseña</label>
            <input type="Password" name="Password2" require class="form-control" placeholder="Confirmacion de Contraseña">
        </div>
        <div class="col-lg-12 tamano">
            <button class="btn btn-primary bg-info">Registrar</button>
        </div>
        
    </form>
    </div>
    </div>

<?php
    require_once(RUTA_APP."/view/inc/footer.php");
?>
