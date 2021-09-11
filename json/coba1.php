<?php

//file json akan di baca
$file = "coba.json";

//mendapatkan file json
$json = file_get_contents($file);

//mengkode anggota.json

//membaca atau menampilkan data array menggunakan foreach
$data = json_decode($json);

//menampilkan data
echo "Nama : {$data->nama} <br>";
echo "Domisili : {$data->domisili} <br>";
echo "Hobi : <br><ul><li>" . implode("<li> ", $data->hobi) ."</li>";
echo "</ul>";

?>