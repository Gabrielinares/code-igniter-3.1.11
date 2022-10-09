<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Cargar head -->
  <?php
  $this->load->view('layout/head');
  ?>
</head>


<body id="page-top">

  <!-- Cargar Navbar (Header) -->
  <?php
  $this->load->view('layout/header');
  ?>

  <div id="wrapper">

    <!-- Cargar Sidebar (Sidebar) -->
    <?php
    $this->load->view('layout/sidebar');
    ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-user-lock"></i>
                </div>
                <div class="mr-5">Usuarios</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('usuario'); ?>">
                <span class="float-left">Gestionar</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Categor&iacute;as</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('categoria'); ?>">
                <span class="float-left">Gestionar</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">Productos</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('producto'); ?>">
                <span class="float-left">Gestionar</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-users"></i>
                </div>
                <div class="mr-5">Clientes</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('cliente'); ?>">
                <span class="float-left">Gestionar</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

		<h1>Entregado por</h1>
		  <table class="table table-bordered" width="100%" cellspacing="0">
			  <thead>
				  <th>Alumno</th>
				  <th>Carnet</th>
			  </thead>
			  <tbody>
			  	<tr>
					<td>Nelson Gabriel Guevara Linares</td>
					<td>195121</td>
				</tr>
			  <tr>
				  <td>Manuel de Jes&uacute;s M&eacute;ndez Moreira</td>
				  <td>202321</td>
			  </tr>
				<tr>
					<td>Ra&uacute;l Alberto P&eacute;rez Hern&aacute;ndez</td>
					<td>197321</td>
				</tr>
				<tr>
					<td>Bryan Steven Ard&oacute;n Anaya</td>
					<td>207121</td>
				</tr>
				<tr>
					<td>C&eacute;sar Isaac Consuegra Amaya</td>
					<td>207221</td>
				</tr>
			  </tbody>
		  </table>

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

</body>

</html>
