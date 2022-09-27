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
                <h1>Gesti&oacute;n de usuario</h1>
                <hr>
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

</body>

</html>