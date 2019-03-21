<?php
 require_once(RUTA_APP."/view/inc/header.php");
 require_once(RUTA_APP."/view/inc/navbarInstructor.php");

?>
<div class="col-lg-9 mt-0 py-5 px-5">
    <table>
        <thead>
          <tr>
              <th>Motivo</th>
              <th>Fecha creación</th>
              <th>#</th>
              <th>Justificación</th>
              <th>Config</th>
          </tr>
        </thead>

        <tbody>
        <?php foreach ($datos as $data):?>
          <tr>
            <td><?=$data->motivo;?></td>
            <td><?=$data->fecha_creacion;?></td>
            <td><?=$data->usuario_idusuario;?></td>
            <td><img src="<?=RUTA_URL?>public/files/<?=$data->id;?>.jpg" class="img-fluid" alt="" srcset="" width="150"></td>
            <td><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  aceptar justificacion
</button></td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">VALIDAR JUSTIFICACIONES</h5>
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
        <button type="button" class="btn btn-primary">guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<?php
    require_once(RUTA_APP."/view/inc/footer.php");
?>
