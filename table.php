<?php
$siswa = [
    ["nama" => "alif", "kelas" => "a", "umur" => 19],
    ["nama" => "akmal", "kelas" => "b", "umur" => 21],
    ["nama" => "aya", "kelas" => "c", "umur" => 17],
    ["nama" => "nadin", "kelas" => "d", "umur" => 16]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
    <TH>Nama</TH>
    <th>Kelas</th>
    <th>Umur</th>
    </tr>
    <?php
    foreach($siswa as $nilai => $value): ?>
    <tr>
        <td><?php echo $value["nama"]; ?></td>
        <td><?php echo $value["kelas"]; ?></td>
        <td><?php echo $value["umur"]; ?></td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>
<?php
$kalimat = "Saya sangan menyukai aya";
echo str_word_count($kalimat);
echo str_replace("sangan","sangat", $kalimat);
?>