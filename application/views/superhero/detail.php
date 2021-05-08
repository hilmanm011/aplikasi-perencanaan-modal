<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <div class="container">

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                        <div class="row">
                            <div class="col-md-8">
                                <h3>Detail Superhero: <?= $superhero['nama']; ?></h3>
                            </div>
                            <!-- <div class="col-md-4  text-right">
                            <button hrep ="<?= base_url(); ?>superhero/ubah/<?= $superhero['id']; ?>" type="submit" name="ubah" class="btn btn-primary float-right" >Edit</button>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>ID</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>
                                            <input type="text" class="form-control" value=<?= $superhero['nama']; ?>/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                            <select class="form-control">
                                                <option value="Laki-laki" selected>Laki-laki</option>
                                                <option value="Perempuan" >Perempuan</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Tabel Superhero -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('superhero'); ?>" class="btn btn-primary">Kembali</a>
                    </div>
                    <div class="card-header">
                        <table class="card-body">
                            <form action="" method="post">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>Detail Superhero: <?= $superhero['nama']; ?></h3>
                                        </div>
                                        <div class="col-md-4  text-right">
                                        <button hrep ="<?= base_url(); ?>superhero/ubah/<?= $superhero['id']; ?>" type="submit" name="ubah" class="btn btn-primary float-right mb-3" >Edit</button>
                                        </div>
                                </div>
                                <input type="hidden" name="id" value="<?= $superhero['id']; ?>">
                                <div class="form-group">
                                    <label for="id">ID :</label>
                                    <input class="form-control" type="text" placeholder=<?= $superhero['id']; ?> aria-label="id" disabled>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama :</label>
                                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $superhero['nama']; ?>">
                                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                                    <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?= $superhero['jenis_kelamin']; ?>">
                                    <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                                </div>
                                
                            </form>
                        </table>
                        
                        
                    </div>

                    <table class="table table-bordered">
                            <thead>
                            <th>No</th>
                            <th>Skill</th>
                            <th>
                                <a href="<?= base_url(); ?>superhero/tambah" class="btn btn-primary">Tambah Skill</a>
                            </th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bisa Sembuh Dengan Cepat</td>
                                <td>
                                    <button class="btn btn-danger btn-small">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mempunyai Cakar Yang Lebih Kuat Dari Baja</td>
                                <td>
                                    <button class="btn btn-danger btn-small">Hapus</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>