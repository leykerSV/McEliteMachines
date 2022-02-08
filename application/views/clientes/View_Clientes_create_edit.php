  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <br>
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <!-- left column -->
                  <div class="col-md-6">
                      <div class="card card-primary">
                          <div class="card-header">
                              <h3 class="card-title"><?php if(isset($values)){ echo 'Editar ';}else{echo 'Crear ';}?>Cliente</h3>
                          </div>
                          <form action="<?php echo base_url() ?>index.php/ControllerClientes/<?php if(isset($values)){ echo 'update?id='.$_GET['id'];}else{echo 'store';}?>" method="post">
                              <div class="card-body">
                                  <div class="form-group">
                                      <div class="input-group">
                                          <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['nombre'] . '"';}?> name="nombre" type="text" placeholder="Nombre">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="input-group">
                                          <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['apellidos'] . '"';}?> name="apellidos" type="text" placeholder="Apellidos">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['razonsocial'] . '"';}?> name="razonsocial" type="text" placeholder="Razon Social">
                                  </div>
								  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['cuit'] . '"';}?> name="cuit" type="text" placeholder="CUIT">
                                  </div>
								  <div class="input-group mb-3">
								  	<label class="input-group-text" for="inputGroupSelect01">Condición IVA</label>
								  	<select class="form-control" name="condicioniva">
								  	<?php										  
										if (isset($values['condicioniva'])) {
											foreach ($condicioniva as $row) {
												if ($values['condicioniva']==$row['idcondicioniva']){
													echo '<option value="' . $row['idcondicioniva'] . '" selected>' . $row['descripcion'] . '</option>';
												}else{
													echo '<option value="' . $row['idcondicioniva'] . '" >' . $row['descripcion'] . '</option>';	
												}
											}
										}else{
											foreach ($condicioniva as $row) {
												echo '<option value="' . $row['idcondicioniva'] . '">' . $row['descripcion'] . '</option>';
											}
										}
												echo '</select>';
									?>
                                  </div>
                                  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['telefono'] . '"';}?> name="telefono" type="text" placeholder="Telefono">
                                  </div>
								  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['email'] . '"';}?> name="email" type="text" placeholder="Email">
                                  </div>
								  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['direccion'] . '"';}?> name="direccion" type="text" placeholder="Dirección">
                                  </div>
								  <div class="input-group mb-3">
								  		<label class="input-group-text" for="inputGroupSelect01">Provincia</label>
									  	<select class="form-control" name="provincia">
									  	<?php										  
										if (isset($values['provincia'])) {
											foreach ($provincias as $row) {
												if ($values['provincia']==$row['id']){
													echo '<option value="' . $row['id'] . '" selected>' . $row['nombre'] . '</option>';
												}else{
													echo '<option value="' . $row['id'] . '" >' . $row['nombre'] . '</option>';	
												}
											}
										}else{
											foreach ($provincias as $row) {
												echo '<option value="' . $row['id'] . '">' . $row['nombre'] . '</option>';
											}
										}
												echo '</select>';
										?>
                                  </div>
                                  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['codigo_postal'] . '"';}?> name="codigo_postal" type="text" placeholder="Codigo Postal">
                                  </div>
                                    <?php
                                    if (isset($messagetrue)) {
                                      echo '<p class="text-success">' . $messagetrue . '</p>';
                                    }
                                    if (isset($messagefalse)) {
                                        echo '<p class="text-danger">' . $messagefalse . '</p>';
                                    }
                                    ?>
                              </div>
                              <div class="card-footer">
                                  <button type="submit" class="btn btn-primary">Guardar</button>
                              </div>
                          </form>
                      </div>
                  </div>

                  <!-- right colum -->
                  <div class="col-md-6">
                  </div>
              </div>
              <!-- /.row -->
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
