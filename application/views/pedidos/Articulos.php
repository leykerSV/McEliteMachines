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
                              	<h3 class="card-title">Agregar Artículos al pedido </h3>
								  	<details>
										<summary>  Número <?php echo $pedido['idpedido']; ?> -  Cliente: <?php echo $cliente['razonsocial']; ?> </summary>
										<h2><?php echo $cliente['razonsocial']; ?></h2>
										<h4>Fecha de Entrega: <?php echo $pedido['fechaentrega']; ?></h3>
										<h4>Observaciones: <?php echo $pedido['observaciones']; ?></h3>

									</details>			
							</div>
                          <form action="<?php echo base_url() ?>index.php/ControllerPedidos/<?php if(isset($values)){ echo 'articulosstore?idpedido='.$_GET['idpedido'];}else{echo 'store';}?>" method="post">
                              <div class="card-body">
							  <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
								<thead>
									<tr>
										<th>IO</th>
										<th>Signals</th>
										<th><input name="select_all" value="1" type="checkbox"></th>
									</tr>
								</thead>
								<tbody>
									<tr class="odd gradeX">
										<td>1</td>
										<td>Ambient Temperature</td>
										<td><input type="checkbox" name="name1" /></td>
									</tr>
									

								</tbody>
							</table>
						<div>
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
