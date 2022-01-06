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
                              <h3 class="card-title"><?php if(isset($values)){ echo 'Editar ';}else{echo 'Crear ';}?>Artículo</h3>
                          </div>
                          <form action="<?php echo base_url() ?>index.php/ControllerArticulos/<?php if(isset($values)){ echo 'update?idarticulo='.$_GET['idarticulo'];}else{echo 'store';}?>" method="post">
                              <div class="card-body">
                                  <div class="form-group">
                                      <div class="input-group">
                                          <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['descripcion'] . '"';}?> name="descripcion" type="text" placeholder="Descripcion">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['ean13'] . '"';}?> name="ean13" type="text" placeholder="EAN 13">
                                  </div>
								  <div class="form-group">
                                      <div class="input-group">
                                          <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['codbar'] . '"';}?> name="codbar" type="text" placeholder="Codigo de Barras">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['tapizado'] . '"';}?> name="tapizado" type="text" placeholder="Tapizado">
                                  </div>
								  
                                  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['color'] . '"';}?> name="color" type="text" placeholder="Color">
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
