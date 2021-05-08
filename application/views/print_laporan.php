<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Export</title>
    <!-- Favicon-->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">

</head>


<body>

    <div class=" mx-auto text-center">
        <h1 class="mb-5">Report</h1>
        <h4 class="text-center mb-3">Data</h4>

        <table style="text-align: center" border="1" class="mx-auto text-center">
            <thead>

                <tr class="card-header text-center">
                    <td><b>NO</b></td>
                    <td><b>Nama</b></td>
                    <td><b>Jenis Kelamin</b></td>
                    <td><b>Skills</b></td>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data as $dt) :
                    $no = $no++;
                    $nama = $dt['nama'];
                    $jenis_kelamin = $dt['jenis_kelamin'];
                    $skill = $dt['skill'];
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $nama; ?></td>
                        <td><?= $jenis_kelamin; ?></td>
                        <td><?= $skill; ?></td>
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