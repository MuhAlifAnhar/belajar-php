<?php
$biaya = 80000;
$warna = "Merah";
$ukuran = "XL";
$biaya_tambahan = 15000;

if ($warna == "Merah" || $ukuran == "XL"){
    echo "Total biaya : ". $biaya + $biaya_tambahan;
}else{
    echo "Tdk ada biaya tambahan";
}
echo "<br>";
echo ($warna == "Merah" && $ukuran == "XL") ? "Total biaya : ".$biaya+$biaya_tambahan : "Total biaya : ".$biaya;


?>