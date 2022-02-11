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
                                  <?php if($values['accion']=='create'){ echo 'Crear ';}else{echo 'Editar ';}?>Pedido
                              </h3>
                          </div>
                          <form action="" method="post">
                              <div class="card-body">
                                  <div class="form-group">
                                      <select class="form-control" id="exampleFormControlSelect1">
                                          <option>Seleccionar Cliente</option>
                                          <?php
                                          foreach($values['clientes'] as $row)
                                          {
                                            echo '<option value="'.$row['idcliente'].'">' . $row['nombre'] . ' ' . $row['apellidos'] . '</option>';
                                          }
                                          ?>
                                      </select>
                                  </div>
                                  <div class="form-group">                                 

                                  <table class="table">
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
                            echo '<td>'. $row['idarticulos'] .'</td>';
                            echo '<td>'. $row['descripcion'] .'</td>';
                            echo '<td>'. $row['tapizado'] .'</td>';
                            echo '<td>'. $row['color'] .'</td>';
                            echo '<td>'. $row['ean13'] .'</td>';
                            echo '<td>'. $row['codbar'] .'</td>';
                            echo '<td>$'. $row['precio1'] .'</td>';
                            echo '<td class="col-3"><div class="btn-group">
                            <button type="button" class="btn btn-default contador" value="+">+</button>
                            <input type="number" min="0" class="form-control w-25 cantidad" value="1">
                            <button type="button" class="btn btn-default contador" value="-">-</button>
                            </div></td>';
                            echo '<td><input type="checkbox" class="checkbox"></td>';
                            echo '</tr>';
                        }
                        }else{
                            echo '<tr><td colspan="12" class="dataTables_empty">No se poseen datos, para esta tabla</td></tr>';
                        }
                        
                        ?>
                                      </tbody>
                                  </table>
                              </div>
                              <label for="disabledTextInput">Total: $</label><span id="precio_total">0</span>
                              <div class="card-footer">
                                  <button type="submit"
                                      class="btn btn-primary"><?php if($values['accion']=='create'){ echo 'Crear ';}else{echo 'Editar ';}?>Pedido</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
              <!-- /.row -->
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
