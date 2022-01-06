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
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Apellido
                            </th>
                            <th>
                                Razon Social
                            </th>
                            <th>
                                Teléfono
                            </th>
                            <th>
                                Código Postal
                            </th>
                            <th>
                                <a class="btn btn-warning btn-sm text-white"
                                    href="<?php echo base_url()?>index.php/ControllerClientes/create">
                                    <i class="fas fa-plus-square"></i>&nbsp;&nbsp;Crear Nuevo
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($clientes)){
                            foreach($clientes as $row)
                        {
                            echo '<tr>';
                            echo '<td>'. $row['idcliente'] .'</td>';
                            echo '<td>'. $row['nombre'] .'</td>';
                            echo '<td>'. $row['apellidos'] .'</td>';
                            echo '<td>'. $row['razonsocial'] .'</td>';
                            echo '<td>'. $row['telefono'] .'</td>';
                            echo '<td>'. $row['codigo_postal'] .'</td>';
                            echo '<td>';
                            echo '
                            <a class="btn btn-success btn-sm" href="'.base_url().'index.php/ControllerClientes/edit?id='.$row['idcliente'].'">
                                <i class="nav-icon fas fa-pencil-alt"></i>&nbsp;&nbsp;Modificar
                            </a>';
                            echo '
                            <a class="btn btn-danger btn-sm" href="'.base_url().'index.php/ControllerClientes/destroy?id='.$row['idcliente'].'">
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
