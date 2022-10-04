<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    $this->load->view('layout/head');
    ?>

</head>

<body id="page-top">

    <!-- Navbar -->
    <?php
    $this->load->view('layout/header');
    ?>

    <div id="wrapper">

        <!-- Sidebar -->
        <!-- Cargar Sidebar (Sidebar) -->
        <?php
        $this->load->view('layout/sidebar');
        ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo site_url('dashboard'); ?>">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Usuario</li>
                </ol>

                <!-- Page Content -->
				<div class="row">
					<div class="col-lg-8">
						<h1>Gesti&oacute;n de usuario</h1>
					</div>
					<div class="col-lg-4">
						<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target=".bd-example-modal-lg" id="cargarForm">Agregar</button>
					</div>
				</div>
                <hr>
				<!-- DataTables Example -->
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-table"></i>
						Data Table Example
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
								<tr>
									<th>C&oacute;digo</th>
									<th>Nombre</th>
									<th>Rol</th>
									<th>Estado</th>
									<th>Acciones</th>
								</tr>
								</thead>
								<tfoot>
								<tr>
									<th>Codigo</th>
									<th>Nombre</th>
									<th>Rol</th>
									<th>Estado</th>
									<th>Acciones</th>
								</tr>
								</tfoot>
								<tbody id="construirTabla">

								</tbody>
							</table>
						</div>
					</div>
				</div>
                <p>This is a great starting point for new custom pages.</p>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © ITCA FEPADE</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php
    	$this->load->view('layout/footer');
    ?>
	<script src="<?php echo base_url('resources/js/usuariojs/scripts.js') ?>"></script>
</body>

</html>
