<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">

        <div class="container">

                <div class="card shadow mb-4">
                    <div class="card-body">
                    
                        <div class="table-responsive">
                        <h3>Daftar Superhero</h3>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php if (empty($superhero)) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            data tidak ditemukan.
                                        </div>
                                    <?php endif; ?>
                                    <?php
                                    $no = 1;
                                    foreach ($superhero as $hero) : ?>
                                        <tr>
                                            <td><?= $no;
                                                                    $no++; ?></td>
                                            <td><?= $hero['nama']; ?></td>
                                            <td><?= $hero['jenis_kelamin']; ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>superhero/ubah/<?= $hero['id']; ?>" class="btn btn-primary float-center">View Detail</a>
                                                <a href="<?= base_url(); ?>superhero/hapus/<?= $hero['id']; ?>" class="tombol-hapus btn btn-danger float-center">Hapus</a>
                                            </td>
                                        </tr> <?php endforeach; ?> </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>