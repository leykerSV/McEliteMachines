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
                              <h3 class="card-title"><?php if(isset($values)){ echo 'Editar ';}else{echo 'Crear ';}?>Pedido</h3>
                          </div>
                          <form action="<?php echo base_url() ?>index.php/ControllerPedidos/<?php if(isset($values)){ echo 'update?idpedido='.$_GET['idpedido'];}else{echo 'store';}?>" method="post">
                              <div class="card-body">
							  <div class="form-group">
									  	<select class="form-select" name="idcliente">
									  	<?php										  
											foreach ($clientes as $row) {
												echo '<option value="' . $row['idcliente'] . '">' . $row['razonsocial'] . '</option>';
											}
											echo '</select>';
										?>
                                  </div>
								  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['fecha'] . '"';}?> name="fecha" type="text" placeholder="Fecha">
                                  </div>
								  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['observaciones'] . '"';}?> name="observaciones" type="text" placeholder="Observaciones">
                                  </div>
								  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['fechaentrega'] . '"';}?> name="fechaentrega" type="text" placeholder="Fecha de Entrega">
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
