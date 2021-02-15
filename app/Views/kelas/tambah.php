<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/Kelas/simpan" method="POST">
        <table>
            <tr>
                <td>Nama Jurusan</td>
                <td>
                    <select name="IDJurusan" class=" form-control">
                        <?php foreach ($jurusan as $row) : ?>
                            <option value="<?= $row['IDJurusan'] ?>"><?php echo $row['NamaJurusan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Kelas</td>
                <td><input type="text" name="NamaKelas"></td>
            </tr>
            <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</body>

</html>