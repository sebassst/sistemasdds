<?php
    require_once(RUTA_APP."/view/inc/header.php");
    require_once(RUTA_APP."/view/inc/navbarEnfe.php");
?>
<div class="col-lg-9 px-5">
        <h5 class="mt-3">Usuarios </h5>
      <table class="table">
            <tr class="text-center">
                <td>Número de la justificación</td>
                <td>Fecha de envio</td>
                <td>Número de la deserción</td>
                <td>Config</td>
            </tr>
    
<?php
    foreach($datos as $usuario){
?>
             <tr>
                <td><?php echo $usuario->idjustificaciones ?></td>
                <td><?php echo $usuario->fecha_enviado ?></td>
                <td><?php echo $usuario->desercion_id ?></td>
                <td><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#justificacion"> <a class="btn btn-info" href="<?php //echo RUTA_URL ?>Administrador/ModificarEmpleado/<?php echo $usuario->Id_empleado ?>"><i class="fas fa-pencil-alt"></i></a> Validar justificacion
</button></td>
                <td>
                    
                 
                </td>
            </tr>

<?php
    }
?>
    </table>
    </div>

    <!-- Modal -->
<div class="modal fade" id="justificacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Validar Justificacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
    <label for="exampleFormControlSelect1">Validar Justificacion</label>
    <select class="form-control" id="exampleFormControlSelect1">
        <option selected disabled>Justificacion</option>
      <option>Rechazar</option>
      <option>Aceptar</option>
      
    </select>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>



<?php
    require_once(RUTA_APP."/view/inc/footer.php");

?>