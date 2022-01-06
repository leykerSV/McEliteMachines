<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-primary">
            <div class="card-header">
			<h3 class="card-title">Almacenes - Insumos</h3>
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
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Descripción
                            </th>
                            <th>
                                Unidad de Medida
                            </th>
                            <th>
                                Familia
                            </th>
							<th>
                                Stock
                            </th>
                            <th>
                                <a class="btn btn-warning btn-sm text-white"
                                    href="<?php echo base_url()?>index.php/ControllerInsumos/create">
                                    <i class="fas fa-plus-square"></i>&nbsp;&nbsp;Crear Nuevo
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($insumos)){
                            foreach($insumos as $row)
                        {
                            echo '<tr>';
                            echo '<td>'. $row['idinsumo'] .'</td>';
                            echo '<td>'. $row['descripcion'] .'</td>';
                            echo '<td>'. $row['unidadmedida'] .'</td>';
                            echo '<td>'. $row['familia'] .'</td>';
                            echo '<td>'. $row['stock'] .'</td>';
                            echo '<td>';
                            echo '
                            <a class="btn btn-success btn-sm" href="'.base_url().'index.php/ControllerInsumos/edit?id='.$row['idinsumo'].'">
                                <i class="nav-icon fas fa-pencil-alt"></i>&nbsp;&nbsp;Modificar
                            </a>';
                            echo '
                            <a class="btn btn-danger btn-sm" href="'.base_url().'index.php/Controllerinsumos/destroy?id='.$row['idinsumo'].'">
                                <i class="nav-icon fas fa-trash"></i>&nbsp;&nbsp;Eliminar
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
