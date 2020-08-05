<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard/index') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-business-time"></i>
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

    <li class="nav-item active">
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

    <li class="nav-item">
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
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
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
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <div class="container">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?php if ($this->session->flashdata('flash')) : ?>
                <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
            <?php endif; ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800"> Kelola Data Modal</h1>

                <!-- Data Tabel Modal -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url(); ?>modal/tambah" class="btn btn-primary">Tambah
                                Modal</a></h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Biaya Material</th>
                                        <th>Biaya Pegawai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php if (empty($modal)) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            data tidak ditemukan.
                                        </div>
                                    <?php endif; ?>
                                    <?php
                                    $no = 1;
                                    foreach ($modal as $mdl) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no;
                                                                    $no++; ?></td>
                                            <td><?= $mdl['biaya_material']; ?></td>
                                            <td><?= $mdl['biaya_pegawai']; ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url(); ?>modal/detail/<?= $mdl['id']; ?>" class="badge badge-primary float-center">Detail</a>
                                                <a href="<?= base_url(); ?>modal/ubah/<?= $mdl['id']; ?>" class="badge badge-success float-center">Edit</a>
                                                <a href="<?= base_url(); ?>modal/hapus/<?= $mdl['id']; ?>" class="tombol-hapus badge badge-danger float-center">Hapus</a>
                                            </td>
                                        </tr> <?php endforeach; ?> </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Perencanaan Modal <?= date('Y'); ?></span>
            </div>
        </div>
    </footer>
</div>