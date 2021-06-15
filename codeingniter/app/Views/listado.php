      <h1>Agregar Registro</h1>
     <div class="row">
       <div class="col-sm-12">
         <form action=" ">
           <label for="nombre">Nombre:</label>
           <input type="text" id="nombre" name="nombre" class="form-control" required>
           <label for="apaterno">Apellido Paterno:</label>
           <input type="text" id="apaterno" name="apaterno" class="form-control" required>
           <label for="amaterno">Apellido Materno:</label>
           <input type="text" id="amaterno" name="amaterno" class="form-control" required>
           <button class="btn btn-primary form-control">Guardar</button>
         </form>
       </div>
      </div>
       <div class="row">
         <div class="col-sm-12">
            <div class="table table=resonsive">
              <table class="table table-hover table-bordered">
                <tr>
                  <th>Nombre</th>
                  <th>Apellido paterno</th>
                  <th>Apellido materno</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                <?php foreach($datos as $dato): ?>
                <tr> 
                  <th><?php echo $dato->nombre ?></th>
                  <th><?php echo $dato->apellido_paterno ?></th>
                  <th><?php echo $dato->apellido_materno ?></th>
                  <th> <a href="<?php base_url('/index.php/editar') ?>" class="btn btn-sm btn-warning">Editar</a> </th>
                  <th> <a href="<?php base_url('/index.php/eliminar') ?>" class="btn btn-sm btn-danger">Eliminar</a> </th>
                </tr>
                <?php endforeach ?>
              </table>
           </div>
         </div>
      </div>
                  
    </div>
