<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('konsumen/index') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-business-time"></i>
        </div>
        <div class="sidebar-brand-text mx-3">P P M </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Konsumen
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('konsumen/index') ?>">

            <i class="fas fa-cash-register"></i>
            <span>Kelola Data Order</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('k_estimasi/index') ?>">
            <i class="fas fa-donate"></i>
            <span>Kelola Estimasi</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('k_pembayaran/index') ?>">
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

<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>


    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- <div>
                    <h3>Dashboard Admin</h3>
                </div> -->

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                            <img class="img-profile rounded-circle" src="<?= base_url('assets/'); ?>img/profile/default.jpg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800"> Kelola Data Order</h1>

                <!-- Data Tabel Order -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url(); ?>konsumen/tambah" class="btn btn-primary">Tambah Order</a></h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nomor Order</th>
                                        <th>Tanggal Order</th>
                                        <th>Alamat</th>
                                        <th>Nama Konsumen</th>
                                        <th>Nama Project</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php if (empty($order)) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            data tidak ditemukan.
                                        </div>
                                    <?php endif; ?>
                                    <?php
                                    $no = 1;
                                    foreach ($order as $ord) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no;
                                                                    $no++; ?></td>
                                            <td class="text-center"><?= $ord['no_order']; ?></td>
                                            <td><?= $ord['tgl_order']; ?></td>
                                            <td><?= $ord['alamat']; ?></td>
                                            <td><?= $ord['nama_konsumen']; ?></td>
                                            <td><?= $ord['nama_project']; ?></td>
                                            <td class="text-center"><a href="<?= base_url(); ?>konsumen/detail/<?= $ord['id']; ?>" class="badge badge-primary float-center">Detail</a>
                                                <a href="<?= base_url(); ?>konsumen/ubah/<?= $ord['id']; ?>" class="badge badge-success float-center">Edit</a>
                                                <a href="<?= base_url(); ?>konsumen/hapus/<?= $ord['id']; ?>" class="tombol-hapus badge badge-danger float-center">Hapus</a>
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