<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Menampilkan Data Multi Join Tabel</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>

<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Menampilkan Data Kelas </h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <a href="Jurusan/tambah">Tambah</a>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Jurusan</th>
                </tr>
                <?php foreach ($jurusan as $row) : ?>
                    <tr>
                        <td><?= $row['IDJurusan']; ?></td>
                        <td><?= $row['NamaJurusan']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>