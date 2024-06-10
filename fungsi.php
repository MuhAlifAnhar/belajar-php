<?php
function sayang($nama = null){
    if(empty($nama)){
        echo "Selamat Datang!";
    }else{

    echo "Selamat Datang $nama!";
    }
}
sayang("alif");

?>