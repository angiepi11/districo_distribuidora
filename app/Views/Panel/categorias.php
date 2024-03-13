<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Districo</title>

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css') ?> " rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
<<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="<?= base_url('cssp/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url('vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('panel') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Districo<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php
       require_once('comun/menu.php');
        ?>
        <!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php
       require_once('comun/nav.php');
        ?>

<?php
       require_once('comun/modal.php');
        ?>
                <!-- Begin Page Content -->
                <div class="container">
                <div class="row">
		<div class="col-lg-12">
			<div class="card card-default rounded-0 shadow">
				<div class="card-header">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
							<h3 class="card-title">Listado de Categorías</h3>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-end">
							<button type="button" name="add" id="categoryAdd" data-bs-toggle="modal" data-bs-target="#categoryModal" class="btn btn-primary btn-sm bg-gradient rounded-0"><i class="far fa-plus-square"></i> Agregar Categoría</button>
						</div>
					</div>
					<div style="clear:both"></div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12 table-responsive">
							<table id="categoryList" class="table table-bordered table-striped">
								<thead>
									<tr>
                                    <th>id</th>
                                        <th>nombre categoria</th>
                                        <th>accion</th>
									</tr>
								</thead>
                                           
                                <tbody>
                                            <?php foreach ($categoria as $categorias) : ?>
                                           <tr>
                                            <td><?= $categorias['id'] ?></td>
                                            <td><?= $categorias['nombre'] ?></td>
                                            <td>
                                                <!-- Botones de acción para cada producto -->
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editarProducto<?= $categorias['id'] ?>"><i class="fa fa-edit"></i></button>
                                                <form action="<?= site_url('eliminar_producto/' . $categorias['id']) ?>" method="post" style="display:inline;">
                                            <!-- Agrega otros campos del formulario según sea necesario -->
                                            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                         </tbody>    



							</table>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
	<div id="categoryModal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"><i class="fa fa-plus"></i> Agregar Categoría</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body">
				<form method="post" action="<?= base_url('aggcategoria')?>" id="categoryForm">
						<input type="hidden" name="categoryId" id="categoryId" />
						<input type="hidden" name="btn_action" id="btn_action" />
						<label>Nombre Categoría</label>
						<input type="text" name="nombre" id="nombre" class="form-control rounded-0" required />
					</form>
				</div>
				<div class="modal-footer">
				<button type="submit" name="action" id="action" class="btn btn-primary btn-sm rounded-0" form="categoryForm">Agregar</button>
					<button type="button" class="btn btn-default btn-sm rounded-0 border" data-bs-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>