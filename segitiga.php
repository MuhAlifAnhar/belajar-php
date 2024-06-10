<?php
$alas = 5;
$tinggi = 7;

function luassegitiga($alas, $tinggi){
    $luas = $alas * $tinggi / 2;
    return $luas;
}
function luasjajar($alas, $tinggi){
    $luas = ($alas + $tinggi) * 2;
    return $luas;
}
echo luassegitiga($alas, $tinggi);
echo "<br>";
echo luasjajar($alas, $tinggi);
?>