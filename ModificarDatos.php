<?php
 require_once(RUTA_APP."/view/inc/header.php");
 require_once(RUTA_APP."/view/inc/navbarAprendiz.php");

?>
<div class="col-lg-9 mt-0 py-0 px-5">
    <form action="<?php echo RUTA_URL ?>Aprendiz/ModificarDatos" method="post" class="px-5">
    <h5 class="mt-3">Actualizar datos</h5>
    
    <div class="row">
         <div class="col-lg-6">    
            <label for="" class="mt-3">Nombre: </label>
            <input type="text" name="nombre" required class="form-control" placeholder="Nombres">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Apellido: </label>
            <input type="text" name="apellido" required class="form-control" placeholder="Apellidos">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Correo:</label>
            <input type="email" name="correo" required class="form-control" placeholder="Correo Electronico">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Telefono:</label>
            <input type="text" name="telefono" required class="form-control" placeholder="Telefono">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Tipo de identificacion:</label>
            <select type="text" name="tipo_documento_id" required class="form-control" placeholder="Tipo de Identificacion">
                <option value="">Seleccione ...</option>
                <option value="1">Cedula de Ciudadania</option>
                <option value="2">Tarjeta de identidad</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Numero de identificacion:</label>
            <input type="text" name="documento" required class="form-control" placeholder="Numero de Identificacion">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Contraseña</label>
            <input type="Password" name="contrasena" require class="form-control" placeholder="Contraseña">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Confirmar contraseña</label>
            <input type="Password" name="Password2" require class="form-control" placeholder="Confirmacion de Contraseña">
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
