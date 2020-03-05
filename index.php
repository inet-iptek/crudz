<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
    <h1>Crud</h1>
    <a href="tambah.php">Tambah</a>
    <table border="1px" width="800px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php
            include "config.php";
            $sql = "SELECT * FROM data";
            $data = $conn->query($sql);
            $no = 1;
            while($dt = $data->fetch_array()) :
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $dt['nama']; ?></td>
            <td><?= $dt['kelas']; ?></td>
            <td><?= $dt['alamat']; ?></td>
            <td align="center">
                <a onclick="return confirm('Yakin?')" href="hapus.php?id=<?= $dt['id']; ?>">Hapus</a>
                |
                <a href="edit.php?id=<?= $dt['id']; ?>">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>