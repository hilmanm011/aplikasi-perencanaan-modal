<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laporan Perusahaan </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>img/ppm.png" />
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">

</head>


<body>

    <div class=" mx-auto text-center">
        <h1 class="mb-5">Laporan Perusahaan</h1>
        <h4 class="text-center mb-3">Data Order</h4>
        <h5>Jumlah: <?= $j_order; ?></h5>
        <table style="text-align: center" border="1" class="mx-auto text-center">
            <thead>

                <tr class="card-header text-center">
                    <td><b>NO</b></td>
                    <td><b>Nama Order</b></td>
                    <td><b>Tanggal Order</b></td>
                    <td><b>Nama Konsumen</b></td>
                    <td><b>Nama Project</b></td>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($order as $ord) :
                    $no = $no++;
                    $no_order = $ord['no_order'];
                    $tgl_order = $ord['tgl_order'];
                    $nama_konsumen = $ord['nama_konsumen'];
                    $nama_project = $ord['nama_project'];
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $no_order; ?></td>
                        <td><?= $tgl_order; ?></td>
                        <td><?= $nama_konsumen; ?></td>
                        <td><?= $nama_project; ?></td>
                    </tr>
            </tbody>
        <?php endforeach; ?>
        </table>
    </div>
    <h4 class="text-center mb-3 mt-5">Data Pembayaran</h4>
    <h5 class="text-center">Jumlah: <?= $j_pembayaran; ?></h5>
    <table style="text-align: center" border="1" class="mx-auto text-center">
        <thead>
            <tr class="card-header text-center">
                <td><b>NO</b></td>
                <td><b>Nama Order</b></td>
                <td><b>Tanggal Order</b></td>
                <td><b>Nominal Pembayaran</b></td>
                <td><b>Jenis Pembayaran</b></td>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($pembayaran as $pmbr) : ?>
                <tr>
                    <td class="text-center"><?= $no;
                                            $no++; ?></td>
                    <td class="text-center"><?= $pmbr['no_order']; ?></td>
                    <td><?= $pmbr['tgl_order']; ?></td>
                    <td><?= "Rp. " . $pmbr['nominal_pembayaran']; ?></td>
                    <td><?= $pmbr['jenis_pembayaran']; ?></td>
                </tr> <?php endforeach; ?>
        </tbody>
    </table>

    <div class="mt-5">
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Perencanaan Modal <?= date('Y'); ?></span>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>