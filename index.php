<?php
$nama = ucwords("alif anhar");
$saya = strtoupper("alif anhar");
$alif = "alif anhar";
$angka = 10;
$angka--;
$angka--;
echo $angka;
echo "<br>";
echo $saya;
echo "<br>";
echo $nama;
echo "<br>";
function aya()
{
    echo "Selamat Datang Siswa";
}
aya();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo ucwords($alif) ?></h1>
</body>
</html>
<?php
$a = ["alif","ayam","kambing"];
$a[] = ("akmal");
$a[80] = ("saya");
echo $a[80] ?? '';
echo "<br>";
print_r($a);
echo "<br>";


$undipa["nama"] = ucwords("alif");
$undipa["umur"] = ucwords(19);
$undipa["alamat"] = ucwords("makassar");
echo "Nama : ". $undipa["nama"]. "<br>";
echo "Umur : ". $undipa["umur"]. "<br>";
echo "Kota : ". $undipa["alamat"]. "<br>";

$siswa = [
    "nim" => ucwords(212164),
    "nama" => ucwords("alif"),
    "jurusan" => ucwords("ti")
];
echo "Nim : ". $siswa["nim"]. "<br>";
echo "Nama : ". $siswa["nama"]. "<br>";
echo "Jurusan : ". $siswa["jurusan"]. "<br>";

$binatang = [
    "herbivora" => ["kambing","sapi","kerbau"],
    "karnivora" => ["harimau","singa","serigala"],
    "omnivora" => ["ayam","monyet","babi"]
];
echo "Herbivora : ". $binatang["herbivora"][2]. "<br>";
echo "Karnivora : ". $binatang["karnivora"][1]. "<br>";
echo "Omnivora : ". $binatang["omnivora"][0]. "<br>";
echo "<br>";

$ustadz = array(
    array ("Marimar",20,"Wanita"),
    array ("Soledad",25,"Wanita"),
    array ("Alfonso",30,"Pria")
);
for ($baris=0;$baris<3;$baris++){
    echo "<p><b>Baris No: $baris</b></p>";
    echo "<ul>";
    for ($kolom=0;$kolom<3;$kolom++){
        echo "<li>".$ustadz[$baris][$kolom]."</li>";
    }
    echo "</ul>";
}
echo "<br>";



?>