<?php
$nama = $_GET['nama'];
$alamat = $_GET['alamat']

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <form action="">
        <input type="text" name="nama">
        <input type="text" name="alamat">
        <input type="submit">
    <h1>Selamat Datang <?php echo $nama; echo $alamat;?></h1>
    <p>Selamat belajar pemrograman dasar PHP</p>
    </form>
</body>
</html>