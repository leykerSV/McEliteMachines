<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Cliente
                            </th>
                            <th>
                                Fecha
                            </th>
                            <th>
                                Observaciones
                            </th>
							<th>
                                Fecha Entrega
                            </th>
                            <th>
                                <a class="btn btn-warning btn-sm text-white"
                                    href="<?php echo base_url()?>index.php/ControllerPedidos/create">
                                    <i class="fas fa-plus-square"></i>&nbsp;&nbsp;Crear Nuevo
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($pedidos)){
                            foreach($pedidos as $row)
                        {

                            echo '<tr">';
                            echo '<td>'. $row['idpedido'] .'</td>';
                            echo '<td>'. $row['razonsocial'] .'</td>';
                            $row['fecha']= date('d-m-Y', strtotime($row['fecha']));
                            echo '<td>'. $row['fecha'] .'</td>';
                            echo '<td>'. $row['observaciones'] .'</td>';
                            $row['fechaentrega']= date('d-m-Y', strtotime($row['fechaentrega']));                        
                            echo '<td>'. $row['fechaentrega'] .'</td>';
                            echo '<td>';
                            echo '
                            <a class="btn btn-success btn-sm" href="'.base_url().'index.php/ControllerPedidos/articulos?id='.$row['idpedido'].'">
                            <i class="nav-icon fas fa-pencil-alt"></i>&nbsp;&nbsp;Artículos
                            </a>';
                            echo '
                            <a class="btn btn-danger btn-sm" href="'.base_url().'index.php/ControllerPedidos/cancelarpedido?id='.$row['idpedido'].'">
                            <i class="nav-icon fas fa-trash"></i>&nbsp;&nbsp;Cancelar
                            </a>';
                            echo '
                            <a class="btn btn-info btn-sm" href="'.base_url().'index.php/ControllerPedidos/lanzarot?id='.$row['idpedido'].'">
                            <i class="nav-icon fas fa-industry"></i>&nbsp;&nbsp;Lanzar OT
                            </a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        }else{
                            echo '<tr><td colspan="12" class="dataTables_empty">No se poseen datos para esta tabla</td></tr>';
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
