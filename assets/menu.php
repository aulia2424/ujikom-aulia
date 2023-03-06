<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link text-center pr-5">
        <span class="brand-text font-weight-light"><b>App Pengaduan Masyarakat</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex pl-4" >
            <div class="info">
                <a href="#" class="d-block">Selamat Datang <b><?= $_SESSION['username'] ?></b></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php if ($_SESSION['level'] == 'masyarakat') { ?>

                    <li class="nav-item">
                        <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/aulia-ukk/modul/modul-profile/" class="nav-link">
                            <i class="nav-icon fas fa-user-circle"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>

                <?php } ?>
                <li class="nav-item">
                    <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/aulia-ukk/modul/modul-pengaduan" class="nav-link">
                    <i class="fa fa-comments mr-2" aria-hidden="true"></i>
                        <p>
                            Pengaduan
                        </p>
                    </a>
                </li>
                <?php if ($_SESSION['level'] == 'admin') { ?>
                    <li class="nav-item">
                        <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/aulia-ukk/modul/modul-masyarakat" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Masyarakat
                            </p>
                        </a>
                    </li>

                <?php } ?>
                <li class="nav-item">
                    <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/aulia-ukk/modul/modul-tanggapan" class="nav-link">
                    <i class="fa fa-comment mr-2" aria-hidden="true"></i>
                        <p>
                            Tanggapan
                        </p>
                    </a>
                </li>
                <?php if ($_SESSION['level'] == 'admin') { ?>

                    <li class="nav-item">
                        <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/aulia-ukk/modul/modul-petugas" class="nav-link">
                        <i class="fa fa-user mr-2" aria-hidden="true"></i>

                            <p>
                                Petugas
                            </p>
                        </a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/aulia-ukk/modul/modul-auth/logout.php" class="nav-link">
                    <i class="fa fa-reply-all mr-2" aria-hidden="true"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>