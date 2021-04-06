<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('/')?>" class="brand-link">
        <img
            src="<?php echo base_url('themes/dist/img/AdminLTELogo.png')?>"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img
                    src="<?php echo base_url('themes/dist/img/user2-160x160.jpg')?>"
                    class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul
                class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any
                other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url('category'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Manajement Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('siswacontroller'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-cart-plus"></i>
                        <p>Siswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('absencontroller'); ?>" class="nav-link">
                        <i class="nav-icon fab fa-algolia"></i>
                        <p>Absen</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('transaction'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>Manajement Transaction</p>
                    </a>
                </li>
                <li class="nav-header">ACCOUNT</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Logout</p>
                    </a>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>