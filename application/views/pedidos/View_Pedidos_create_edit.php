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
                          <form action="<?php echo base_url() ?>index.php/ControllerPedidos/store/" method="post">
                              <div class="card-body">
                                  <div class="form-group">
                                      <a>Fecha de Pedido:</a>
                                      <input type="text" class="form-control" name="fecha"
                                        data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy"
                                        data-mask placeholder="Fecha de Entrega">
                                       <a>Cliente:</a>
                                      <select class="form-control" id="exampleFormControlSelect1">
                                          <option>Seleccionar Cliente</option>
                                          <?php
                                          foreach($values['clientes'] as $row)
                                          {
                                            echo '<option value="'.$row['idcliente'].'">' . $row['nombre'] . ' ' . $row['apellidos'] . '</option>';
                                          }
                                          ?>
                                      </select>
                                      <a>Fecha de Entrega:</a>
                                      <input type="text" class="form-control" name="fechaentrega"
                                        data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy"
                                        data-mask placeholder="Fecha de Entrega">
                                      
                                      <a>Observaciones</a>
                                      <textarea class="form-control" name="observaciones" rows="3"
                                          placeholder="Observaciones"></textarea>
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
                            echo '<td class="col-3"><div class="btn-group">
                            <button type="button" class="btn btn-default contador" value="+">+</button>
                            <input type="number" min="0" class="form-control w-25 cantidad" value="1" name="cant">
                            <button type="button" class="btn btn-default contador" value="-">-</button>
                            </div></td>';
                            echo '<td><input type="checkbox" class="checkbox" values="" name="chkbox['.$row['idarticulo'].']"></td>';
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
                                  <a href="#" class="btn btn-primary" id="crear_pedido"><?php if($values ['accion']=='create'){ echo 'Crear ';}else{echo 'Editar ';}?>Pedido</a>
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
