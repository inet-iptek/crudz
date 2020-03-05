<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Edit</title>
</head>
<body>
    <?php
        include "config.php";

        $id = val($_GET['id']);
        
        $sql = "SELECT * FROM data WHERE id = '$id'";

        $data = $conn->query($sql);
        $dt = $data->fetch_array();
    ?>
    <h1>Edit Data</h1>
    <form action="" method="post">
       <table>
           <tr>
               <th>Nama</th>
               <td>
                   <input type="text" name="nama" placeholder="Nama" value="<?= $dt['nama']; ?>">
               </td>
           </tr>
           <tr>
               <th>Kelas</th>
               <td>
                   <input type="text" name="kelas" placeholder="Kelas" value="<?= $dt['kelas']; ?>">
               </td>
           </tr>
           <tr>
               <th>Alamat</th>
               <td>
                   <textarea name="alamat" placeholder="Alamat"><?= $dt['alamat']; ?></textarea>
               </td>
           </tr>
           <tr>
               <td colspan="2" align="center">
                   <input type="submit" value="Edit" name="btn">
               </td>
           </tr>
       </table>
    </form>

    <?php
        if(isset($_POST['btn'])) {
            $nama = val($_POST['nama']);
            $kelas = val($_POST['alamat']);
            $alamat = val($_POST['alamat']);

            if(empty($nama) || empty($kelas) || empty($alamat)) {
                alert('Field tidak boleh kosong!');
            } else {
                $sql = "UPDATE data SET nama = '$nama', kelas = '$kelas', alamat = '$alamat' WHERE id = '$id'";
                $edit = $conn->query($sql);

                if($edit) {
                    alert('Berhasil!');
                    redir('../crudz');
                } else {
                    alert('Gagal!');
                }
            }
        }
    ?>
</body>
</html>