<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <div class="container">

                <h1 class="h3 mb-2 text-gray-800"> Tambah Skill</h1>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('superhero'); ?>" class="btn btn-primary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="card-header text-center">
                            <h3>Form Tambah Tambah Skill Hero</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="nama">Nama Hero : </label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin : </label>
                                    <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                    <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                                </div>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>