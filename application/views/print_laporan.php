<!DOCTYPE html>
<html>

<head>
    <title>Laporan Perusahaan</title>

</head>


<body>

    <div class="text-center">
        <h1>Laporan Perusahaan</h1>
        <table style="text-align: center" border="1">
            <thead>

                <tr class="card-header text-center">
                    <td><b>NO</b></td>
                    <td><b>Nama Order</b></td>
                    <td><b>Tanggal Order</b></td>
                    <td><b>Nama Konsumen</b></td>
                    <td><b>Nama Project</b></td>
                    <td><b>Pembayaran</b></td>
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
                    // $tanggal_lahir = $ord['tanggal_lahir'];
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $no_order; ?></td>
                        <td><?= $tgl_order; ?></td>
                        <td><?= $nama_konsumen; ?></td>
                        <td><?= $nama_project; ?></td>
                        <td><?= $nama_project; ?></td>

                    </tr>
            </tbody>
        <?php endforeach; ?>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>