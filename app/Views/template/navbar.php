<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4"style = "background-color : #FED03D">
<!-- Brand Logo -->
    <a href="<?= base_url('adminLTE/index3.html') ?>" class="brand-link">
        <!-- <img src="<?= base_url('adminLTE/dist/img/AdminLTELogo.png') ?>" 
        alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="Brand">Arsy Beads</span>
    </a>
<!-- Sidebar -->
    <div class="sidebar">
<!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?= base_url('adminLTE/dist/img/profile.png') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block" style="color : #000000 ">Pengguna</a>
        </div>
    </div>
<!-- Sidebar Menu -->
    <link rel="stylesheet" href="<?= base_url('adminLTE/dist/css/adminlte.min.css') ?>">
    <nav class="mt-2">
    <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Produk
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= base_url('produk/form') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                            <p>Input Produk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('produk') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Produk</p>
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

<style>
    p {
        color: black;
    }

    .brand{
        color: black;
    }
</style>

