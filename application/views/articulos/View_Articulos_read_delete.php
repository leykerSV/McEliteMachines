<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-primary">
            <div class="card-header">
			<h3 class="card-title">Listado de Artículos</h3>
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
                                Descripcion
                            </th>
                            <th>
                                EAN 13
                            </th>
                            <th>
                                Cod. Barra
                            </th>
                            <th>
                                Tapizado
                            </th>
                            <th>
                                Color
                            </th>
                            <th>
                                <a class="btn btn-warning btn-sm text-white"
                                    href="<?php echo base_url()?>index.php/ControllerArticulos/create">
                                    <i class="fas fa-plus-square"></i>&nbsp;&nbsp;Crear Nuevo
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($articulos)){
                            foreach($articulos as $row)
                        {
                            echo '<tr>';
                            echo '<td>'. $row['idarticulo'] .'</td>';
                            echo '<td>'. $row['descripcion'] .'</td>';
                            echo '<td>'. $row['ean13'] .'</td>';
                            echo '<td>'. $row['codbar'] .'</td>';
                            echo '<td>'. $row['tapizado'] .'</td>';
                            echo '<td>'. $row['color'] .'</td>';
                            echo '<td>';
                            echo '
                            <a class="btn btn-success btn-sm" href="'.base_url().'index.php/ControllerArticulos/edit?id='.$row['idarticulo'].'">
                                <i class="nav-icon fas fa-pencil-alt"></i>&nbsp;&nbsp;Modificar
                            </a>';
                            echo '
							<a class="btn btn-info btn-sm" href="'.base_url().'index.php/ControllerArticulos/manufactura?id='.$row['idarticulo'].'">
                                <i class="nav-icon fas fa-industry"></i>&nbsp;&nbsp;Manufactura
                            </a>
                            <a class="btn btn-danger btn-sm" href="'.base_url().'index.php/ControllerArticulos/destroy?id='.$row['idarticulo'].'">
                                <i class="nav-icon fas fa-trash"></i>&nbsp;&nbsp;Eliminar
                            </a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        }else{
                            echo '<tr><td colspan="12" class="dataTables_empty">No se poseen datos, para esta tabla</td></tr>';
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
