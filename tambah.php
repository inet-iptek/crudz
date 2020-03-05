<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Tambah</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
       <table>
           <tr>
               <th>Nama</th>
               <td>
                   <input type="text" name="nama" placeholder="Nama">
               </td>
           </tr>
           <tr>
               <th>Kelas</th>
               <td>
                   <input type="text" name="kelas" placeholder="Kelas">
               </td>
           </tr>
           <tr>
               <th>Alamat</th>
               <td>
                   <textarea name="alamat" placeholder="Alamat"></textarea>
               </td>
           </tr>
           <tr>
               <td colspan="2" align="center">
                   <input type="submit" value="Tambah" name="btn">
               </td>
           </tr>
       </table>
    </form>

    <?php
        include "config.php";
        if(isset($_POST['btn'])) {
            $nama = val($_POST['nama']);
            $kelas = val($_POST['kelas']);
            $alamat = val($_POST['alamat']);

            if(empty($nama) || empty($kelas) || empty($alamat)) {
                alert('Field tidak boleh kosong!');
            } else {
                $sql = "INSERT into data(nama,kelas,alamat) VALUES('$nama','$kelas','$alamat')";
                $add = $conn->query($sql);

                if($add) {
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