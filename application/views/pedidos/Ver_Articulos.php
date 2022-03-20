  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <br>
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col">
                      <div class="card card-primary">
                          <div class="card-header">
                              <h3 class="card-title">
                                  
                              </h3>
                          </div>
                              <div class="card-body">
                                  <div class="form-group">
                                        <a>Fecha de Pedido:</a>

                                        <a>Cliente:</a>
                                        <label for="disabledTextInput"><?php echo $razonsocial ?></label>
                                        <a>Fecha de Entrega:</a>
                                        <label for="disabledTextInput"><?php echo $fechaentrega ?></label>
                                        <a>Observaciones</a>
                                        <textarea class="form-control" name="observaciones" rows="3"
                                                  placeholder="Observaciones"><?php echo $observaciones; ?></textarea>
                                  </div>
                                  <div class="form-group">                                 

                                  <table class="table" name="tabla">
                                      <thead>
                                          <tr>
                                              <th>
                                                  #
                                              </th>
                                              <th>
                                                  Articulo
                                              </th>
                                              <th>
                                                  Tapizado
                                              </th>
                                              <th>
                                                  Color
                                              </th>
                                              <th>
                                                  Ean
                                              </th>
                                              <th>
                                                  Código de Barra
                                              </th>
                                              <th>
                                                  Precio
                                              </th>
                                              <th>
                                                  Cantidad
                                              </th>
                                              <th>
                                                  Acción
                                              </th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                        if(isset($values['articulos'])){
                            foreach($values['articulos'] as $row)
                        {
                            echo '<tr clas="row">';
                            echo '<td>'.$row['idarticulo'].'</td>';
                            echo '<td>'. $row['descripcion'] .'</td>';
                            echo '<td>'. $row['tapizado'] .'</td>';
                            echo '<td>'. $row['color'] .'</td>';
                            echo '<td>'. $row['ean13'] .'</td>';
                            echo '<td>'. $row['codbar'] .'</td>';
                            echo '<td>$'. $row['precio1'] .'</td>';
                            echo '<td>$'. $row['cantidad'] .'</td>';
                            echo '</tr>';
                        }
                        }else{
                            echo '<tr><td colspan="12" class="dataTables_empty">No se poseen datos, para esta tabla</td></tr>';
                        }
                        
                        ?>
                                      </tbody>
                                  </table>
                              </div>
                              <!--<label for="disabledTextInput">Total: $</label><span id="precio_total">0</span>
                              <div class="card-footer">
                                  <button type="submit"
                                      class="btn btn-primary"><?php //if($values['accion']=='create'){ echo 'Crear ';}else{echo 'Editar ';}?>Pedido</button>
                              </div>-->
                          </div>
                  </div>
              </div>
              <!-- /.row -->
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
