<?php
function kalilipat(&$angka){
    $angka = $angka * 2;
}
$x = 5;
echo "<br>". $x ;
kalilipat($x);
echo "<br>". $x ;
?>