<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard/index') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="far fa-save"></i>
        </div>
        <div class="sidebar-brand-text mx-3">P P M </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link " href="<?= base_url('dashboard/index') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('akun/index') ?>">
            <i class="far fa-user-circle"></i>
            <span>Kelola Akun</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('modal/index') ?>">
            <i class="fas fa-money-check-alt"></i>
            <span>Kelola Data Modal</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('order/index') ?>">

            <i class="fas fa-cash-register"></i>
            <span>Kelola Data Order</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('estimasi/index') ?>">
            <i class="fas fa-donate"></i>
            <span>Kelola Estimasi</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('pembayaran/index') ?>">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Kelola Pembayaran</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">




    <!-- Heading -->
    <div class="sidebar-heading">
        Logout
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> -->

</ul>
<!-- End of Sidebar -->

<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('ul li ').click(function(){
            $('li').removeClass("active");
            $(this).addClass("active");
        });
    });
</script> -->

<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Data Pembayaran
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="no_order">Nomor Order</label>
                            <input type="number" name="no_order" class="form-control" id="no_order">
                            <small class="form-text text-danger"><?= form_error('no_order'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_order">Tanggal Order</label>
                            <input type="date" name="tgl_order" class="form-control" id="tgl_order">
                            <small class="form-text text-danger"><?= form_error('tgl_order'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nominal_pembayaran">Nominal Pembayaran</label>
                            <input type="text" name="nominal_pembayaran" class="form-control" id="nominal_pembayaran">
                            <small class="form-text text-danger"><?= form_error('nominal_pembayaran'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis_pembayaran">Jenis Pembayaran</label>
                            <input type="text" name="jenis_pembayaran" class="form-control" id="jenis_pembayaran">
                            <small class="form-text text-danger"><?= form_error('jenis_pembayaran'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>