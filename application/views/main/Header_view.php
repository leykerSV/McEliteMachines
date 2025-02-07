<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Sistema | MC ELITE MACHINES</title>

	<?php 
		if (isset($css_files)){
			foreach($css_files as $file): ?>
				<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />	
			<?php endforeach; } 
		?>
	?>	
		
	
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet" crossorigin="anonymous">    
   
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <a class="nav-link" data-toggle="dropdown" href="#">
            Acciones: 
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <a class="nav-link" data-toggle="dropdown" href="#">
            No Conformidades: 
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    Bienvenido -
                    <i class="fas fa-user-circle"></i>&nbsp;<?php echo $_SESSION['nombre'];?>
                    <a href="<?php echo base_url()?>index.php/Login/destroy">Cerrar Session</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->



        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?php echo base_url()?>assets/img_dash/logo-mc.png" class="brand-image elevation-3">
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <?php
                        ?>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Ventas</p><i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url()?>index.php/ControllerClientes" class="nav-link">
                                        <?php
                                        if(uri_string()=="Dash_controller_actions"){
                                            echo '<i class="fas fa-circle nav-icon"></i>';
                                        }else{
                                            echo '<i class="far fa-circle nav-icon"></i>';
                                        }
                                        ?>
                                        <p>Clientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url()?>index.php/Controller_clientes" class="nav-link">
                                        <?php
                                        if(uri_string()=="Dash_controller_actions"){
                                            echo '<i class="fas fa-circle nav-icon"></i>';
                                        }else{
                                            echo '<i class="far fa-circle nav-icon"></i>';
                                        }
                                        ?>
                                        <p>Lista de Precios</p>
                                    </a>
                                </li>
								<li class="nav-item">
                                    <a href="<?php echo base_url()?>index.php/ControllerPedidos/" class="nav-link">
                                        <?php
                                        if(uri_string()=="Dash_controller_actions"){
                                            echo '<i class="fas fa-circle nav-icon"></i>';
                                        }else{
                                            echo '<i class="far fa-circle nav-icon"></i>';
                                        }
                                        ?>
                                        <p>Pedidos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-archive"></i>
                                <p>Producción</p><i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
								<li class="nav-item">
                                    <a href="<?php echo base_url()?>index.php/ControllerArticulos"
                                        class="nav-link">
                                        <?php
                                        if(uri_string()=="ControllerArticulos/"){
                                            echo '<i class="fas fa-circle nav-icon"></i>';
                                        }else{
                                            echo '<i class="far fa-circle nav-icon"></i>';
                                        }
                                        ?>
                                    <p>Artículos</p>
                                    </a>
                                </li>
								<li class="nav-item">
                                    <a href="<?php echo base_url()?>index.php/Dash_controller_nonconformities/showxCurrentUser"
                                        class="nav-link">
                                        <?php
                                        if(uri_string()=="Dash_controller_nonconformities/showxCurrentUser"){
                                            echo '<i class="fas fa-circle nav-icon"></i>';
                                        }else{
                                            echo '<i class="far fa-circle nav-icon"></i>';
                                        }
                                        ?>
                                        <p>Ordenes de Trabajo</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url()?>index.php/Dash_controller_nonconformities/showxCurrentUser"
                                        class="nav-link">
                                        <?php
                                        if(uri_string()=="Dash_controller_nonconformities/showxCurrentUser"){
                                            echo '<i class="fas fa-circle nav-icon"></i>';
                                        }else{
                                            echo '<i class="far fa-circle nav-icon"></i>';
                                        }
                                        ?>
                                        <p>Ordenes de Producción</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url()?>index.php/Dash_controller_nonconformities/create"
                                        class="nav-link">
                                        <?php
                                        if(uri_string()=="Dash_controller_nonconformities/create" || uri_string()=="Dash_controller_nonconformities/create"){
                                            echo '<i class="fas fa-circle nav-icon"></i>';
                                        }else{
                                            echo '<i class="far fa-circle nav-icon"></i>';
                                        }
                                        ?>
                                        <p>Declaracion de Producción</p>
                                    </a>
                                </li>
								<li class="nav-item">
                                    <a href="<?php echo base_url()?>index.php/Dash_controller_nonconformities/showxCurrentUser"
                                        class="nav-link">
                                        <?php
                                        if(uri_string()=="Dash_controller_nonconformities/showxCurrentUser"){
                                            echo '<i class="fas fa-circle nav-icon"></i>';
                                        }else{
                                            echo '<i class="far fa-circle nav-icon"></i>';
                                        }
                                        ?>
                                        <p>Plan de Producción</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
						<li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>Compras</p><i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url()?>index.php/ControllerProveedores"
                                        class="nav-link">
                                        <?php
                                        if(uri_string()=="Dash_controller_nonconformities/create" || uri_string()=="Dash_controller_nonconformities/create"){
                                            echo '<i class="fas fa-circle nav-icon"></i>';
                                        }else{
                                            echo '<i class="far fa-circle nav-icon"></i>';
                                        }
                                        ?>
                                        <p>Proveedores</p>
                                    </a>
                                </li>
								<li class="nav-item">
                                    <a href="<?php echo base_url()?>index.php/ControllerInsumos/"
                                        class="nav-link">
                                        <?php
                                        if(uri_string()=="Dash_controller_nonconformities/showxCurrentUser"){
                                            echo '<i class="fas fa-circle nav-icon"></i>';
                                        }else{
                                            echo '<i class="far fa-circle nav-icon"></i>';
                                        }
                                        ?>
                                        <p>Insumos</p>
                                    </a>
								</li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>Reportes</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tools"></i>
                                <p>Configuraciones</p><i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url()?>index.php/Dash_controller_origins" class="nav-link">
                                        <?php
                                        if(uri_string()=="Dash_controller_origins"){
                                            echo '<i class="fas fa-circle nav-icon"></i>';
                                        }else{
                                            echo '<i class="far fa-circle nav-icon"></i>';
                                        }
                                        ?>
                                        <p>Localidades</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url()?>index.php/Dash_controller_users" class="nav-link">
                                        <?php
                                        if(uri_string()=="Dash_controller_users"){
                                            echo '<i class="fas fa-circle nav-icon"></i>';
                                        }else{
                                            echo '<i class="far fa-circle nav-icon"></i>';
                                        }
                                        ?>
                                        <p>Usuarios</p>
                                    </a>
                                </li>
								<li class="nav-item">
                                    <a href="<?php echo base_url()?>index.php/ControllerTransportes" class="nav-link">
                                        <?php
                                        if(uri_string()=="Dash_controller_users"){
                                            echo '<i class="fas fa-circle nav-icon"></i>';
                                        }else{
                                            echo '<i class="far fa-circle nav-icon"></i>';
                                        }
                                        ?>
                                        <p>Transportes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
