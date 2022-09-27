<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo site_url('dashboard'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item dropdown <?php if(isset($showAdmin)){echo $showAdmin;} ?>">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-cogs"></i>
      <span>Administraci&oacute;n</span>
    </a>
    <div class="dropdown-menu <?php if(isset($showAdmin)){echo $showAdmin;} ?>" aria-labelledby="pagesDropdown">
      <a class="dropdown-item <?php if(isset($activeUsuario)){echo $activeUsuario;} ?>" href="<?php echo site_url('usuario'); ?>">Usuarios</a>
      <a class="dropdown-item <?php if(isset($activeCategoria)){echo $activeCategoria;} ?>" href="<?php echo site_url('categoria'); ?>">Categor&iacute;as</a>
      <a class="dropdown-item <?php if(isset($activeProducto)){echo $activeProducto;} ?>" href="<?php echo site_url('producto'); ?>">Productos</a>
      <a class="dropdown-item <?php if(isset($activeCliente)){echo $activeCliente;} ?>" href="<?php echo site_url('cliente'); ?>">Clientes</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-shopping-cart"></i>
      <span>Ventas</span></a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-file"></i>
      <span>Reportes</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <a class="dropdown-item" href="login.html">Ventas diarias</a>
      <a class="dropdown-item" href="register.html">Ventas semanales</a>
      <a class="dropdown-item" href="forgot-password.html">Productos</a>
    </div>
  </li>
</ul>