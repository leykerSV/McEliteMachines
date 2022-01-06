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
                              <h3 class="card-title"><?php if(isset($values)){ echo 'Editar ';}else{echo 'Crear ';}?>Proveedor</h3>
                          </div>
                          <form action="<?php echo base_url() ?>index.php/Controller_Proveedores/<?php if(isset($values)){ echo 'update?id='.$_GET['id'];}else{echo 'store';}?>" method="post">
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
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['telefono'] . '"';}?> name="telefono" type="number" placeholder="Telefono">
                                  </div>
                                  <div class="form-group">
                                      <input class="form-control" <?php if (isset($values)) {echo 'value="' . $values['codigo_postal'] . '"';}?> name="codigo_postal" type="number" placeholder="Codigo Postal">
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