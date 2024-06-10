<?php
$anggota = ["Fardan","Mirza","Ari","Allu","Uno","Uus","Illang","Nanang","Ippong"];
//$jml_warna = 0;

//$i=0;
//while ($i<9){
  //  if($warna[$i]=="Merah"){
    //    $jml_warna++;
   // }
   // $i++;
//}
//for ($i=0;$i<8;$i++){
 //   if ($warna[$i] == "Merah"){
   //     $jml_warna++;
   // }
//}
//echo "Jumlah Merah ada : $jml_warna";
//echo "<br>";

foreach ($anggota as $nomor => $nilai){
    if ($nilai == "Uno"){
        echo "Halo $nilai". "<br>";
        echo "Nama yang kamu cari ada di index $nomor";
        break;
    }
    //else {
      //  echo "Nama tidak di temukan";
        //break;
    //}
}




?>