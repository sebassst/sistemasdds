<?php
    require_once(RUTA_APP."/view/inc/header.php");
    require_once(RUTA_APP."/view/inc/navbarCoordinador.php");
?>
<div class="col-lg-9 px-5">
        <h5 class="mt-3">Usuarios </h5>
      <table class="table">
            <tr class="text-center">
                <td>Número de la justificación</td>
                <td>Fecha de envio</td>
                <td>Número de la deserción</td>
            </tr>
    
<?php
    foreach($datos as $usuario){
?>
             <tr>
                <td><?php echo $usuario->idjustificaciones ?></td>
                <td><?php echo $usuario->fecha_enviado ?></td>
                <td><?php echo $usuario->desercion_id ?></td>
                <td>
                    <a class="btn btn-info" href="<?php echo RUTA_URL ?>Administrador/ModificarEmpleado/<?php echo $usuario->Id_empleado ?>"><i class="fas fa-pencil-alt"></i></a>
                 
                </td>
            </tr>

<?php
    }
?>
    </table>
    </div>
<?php
    require_once(RUTA_APP."/view/inc/footer.php");

?>