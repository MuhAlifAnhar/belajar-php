<?php
$koneksi=mysqli_connect("localhost","root","","database_undipa");
$data=mysqli_query($koneksi,"select * from data_mhs");
$mhs=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr>
            <td>STB</td>
            <td>Nama</td>
            <td>Jurusan</td>
            <td>Alamat</td>
        </tr>
        <tr>
            <td><?php echo$mhs['stb'] ?></td>
            <td><?php echo$mhs['nama'] ?></td>
            <td><?php echo$mhs['jurusan'] ?></td>
            <td><?php echo$mhs['alamat'] ?></td>
        </tr>
    </table>
</body>
</html>