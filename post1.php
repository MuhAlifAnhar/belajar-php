<?php
if(!empty($_POST['alif']))
{
    print_r($_POST);
}

?>
<form action="" method="post">
    Nama: <input type="text" name="nama">
    <br><br>
    <textarea name="alamat" rows="2" col="5"></textarea>
    <br><br>
    Program Studi:
    <select name="program_studi">
        <option value="SI">Sistem Informasi</option>
        <option value="TI">Teknik Informatika</option>
        <option value="MI">Manajemen Informatika</option>
    </select>
    <br><br>
    <input type="submit" name="alif" value="submit">
</form>