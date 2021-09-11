<?php

//file json akan di baca
$file = "latihan.json";

//mendapatkan file json
$bio = file_get_contents($file);

//mengkode anggota.json
$data = json_decode($bio, true);

//membaca atau menampilkan data array menggunakan foreach
foreach ($data as $key => $d) {
    echo "Nama : " .$d['nama'] ."<br>";
    echo "Domisili : " .$d['domisili'] ."<br>";
    echo "Hobi : ";
    echo "<ul>";
    foreach ($d['hobi'] as $d1){
        echo "<li>" .$d1 ."</li>";
    }
    echo "</ul>";
}

?>