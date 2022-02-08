<div class="content-wrapper">
      <br>
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <!-- left column -->
                  <div class="col-md-12">
                      <div class="card card-primary">
                          	<div class="card-header">
                              	<h3 class="card-title"></h3>
								  	
										
										<h3><?php echo $cliente['razonsocial']; ?></h3>
										<h4>Fecha de Entrega: <?php echo $pedido['fechaentrega']; ?></h3>
										<h4>Observaciones: <?php echo $pedido['observaciones']; ?></h3>

											
							</div>
                          <form action="<?php echo base_url() ?>index.php/ControllerPedidos/articulosstore/<?php echo $_GET['id'];?>" method="post">
                              <div class="card-body">
							  <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
								
							  	<thead>
									<tr>
										<th>ID</th>
										<th>Artículo</th>
										<th>Tapizado</th>
										<th>Color</th>
										<th>Selección</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($articulos as $row){ ?>

									
									<tr class="odd gradeX">
										<td><?php echo $row['idarticulo']; ?></td>
										<td><?php echo $row['descripcion']; ?></td>
										<td><?php echo $row['tapizado']; ?></td>
										<td><?php echo $row['color']; ?></td>
										<td><input type="checkbox" name="articulosSel[<?php echo $row['idarticulo']; ?>]" /></td>
									</tr>

									<?php } ?>
									

								</tbody>
							</table>
						<div>
						<div class="card-footer">
									<div class="form-group">
                                      <input class="form-control" name="descuento" type="text" placeholder="Descuento %">
                                  </div>
								  <div class="form-group">
                                      <input class="form-control" name="observaciones" type="text" placeholder="Observaciones" value="<?php echo $pedido['observaciones']; ?>">
                                  </div>		
                                  <button type="submit" class="btn btn-primary">Guardar!!</button>
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
