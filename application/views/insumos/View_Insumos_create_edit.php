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
                              <h3 class="card-title"><?php if(isset($values)){ echo 'Editar ';}else{echo 'Crear ';}?>Insumo</h3>
                          </div>
                          <form action="<?php echo base_url() ?>index.php/ControllerInsumos/<?php if(isset($values)){ echo 'update?idinsumo='.$_GET['idinsumo'];}else{echo 'store';}?>" method="post">
                              <div class="card-body">
                                  <div class="form-group">
                                      <div class="input-group">
                                          <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['descripcion'] . '"';}?> name="descripcion" type="text" placeholder="Descripcion">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['unidadmedida'] . '"';}?> name="unidadmedida" type="text" placeholder="Unidad Medida">
                                  </div>
								  <div class="form-group">
								  <select class="form-control" name="familia">
								  	<?php										  
										if (isset($values['familia'])) {
											foreach ($familia as $row) {
												if ($values['familia']==$row['familia']){
													echo '<option value="' . $row['idfamilia'] . '" selected>' . $row['descripcion'] . '</option>';
												}else{
													echo '<option value="' . $row['idfamilia'] . '" >' . $row['descripcion'] . '</option>';	
												}
											}
										}else{
											foreach ($familia as $row) {
												echo '<option value="' . $row['idfamilia'] . '">' . $row['descripcion'] . '</option>';
											}
										}
												echo '</select>';
									?>
                                  </div>
								  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['stock'] . '"';}?> name="stock" type="text" placeholder="Stock">
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
