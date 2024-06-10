<?php
$siswa = [
    ["nama" => "alif", "kelas" => "a", "umur" => 19],
    ["nama" => "akmal", "kelas" => "b", "umur" => 21],
    ["nama" => "aya", "kelas" => "c", "umur" => 17],
    ["nama" => "nadin", "kelas" => "d", "umur" => 16]
];
foreach($siswa as $key => $value){
    if ($value["nama"] == "akmal")
        continue;
    echo "nama siswa : ". $value["nama"]. "<br>";
    echo "kelas : ". $value["kelas"]. "<br>";
    echo "umur : ". $value["umur"]. "<br>";
    //break;
}

?>