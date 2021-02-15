<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/Siswa/simpan" method="POST">
        <table>
            <tr>
                <td>Nama Kelas</td>
                <td>
                    <select name="IDJurusan" class=" form-control">
                        <?php foreach ($jurusan as $row) : ?>
                            <option value="<?= $row['IDJurusan'] . "#0#" . $row['IDJurusan'] ?>"><?php echo $row['NamaJurusan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td>
                    <select name="IDKelas" class=" form-control">
                        <?php foreach ($kelas as $row) : ?>
                            <option value="<?= $row['IDKelas'] . "#0#" . $row['IDJurusan'] ?>"><?php echo $row['NamaKelas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="NamaSiswa"></td>
            </tr>
            <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>