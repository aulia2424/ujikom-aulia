<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (empty($_SESSION['username'])) {
    @header('location:../modul-auth/index.php');
} else {
    $nik = $_SESSION['nik'];
    $nama = $_SESSION['nama'];
    $username = $_SESSION['username'];
    $telp = $_SESSION['telp'];
}
?>
<!-- header -->
<?php include('../../assets/header.php') ?>
<?= $username ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

     
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include('../../assets/menu.php'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper input-Box">
            <!-- Main content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-primary alert-dismissable mt-5">Selamat Datang <strong><?= $_SESSION['username'] ?></strong> Anda Login Sebagai <strong><?= $_SESSION['level'] ?></strong> <a class="close" href="" data-dismiss="alert">x</a></div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h3><i class="fa fa-user-circle pr-3"></i><strong>PROFILE USER</strong></h3>
                            </div>
                            <div class="card-body text-center">
                                <div class="card col-md-auto">
                                    <div class="card-header"><h5>Nik : <?= $nik ?></h5></div>
                                    <div class="card-header"><h5>Nama : <?= $nama ?></h5></div>
                                    <div class="card-header"><h5>Username : <?= $username ?></h5></div>
                                    <div class="card-header"><h5>Tlp : <?= $telp ?></h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; <a href="https://adminlte.io">aulia</a>.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include('../../assets/footer.php') ?>

</body>

</html>