<?php

//file json akan di baca
$file = "anggota.json";

//mendapatkan file json
$anggota = file_get_contents($file);

//mengkode anggota.json
$data = json_decode($anggota, true);

//membaca atau menampilkan data array menggunakan foreach
foreach ($data as $key => $d) {
    echo "No : " .$d['no'] ."<br>";
    echo "Nama : " .$d['nama'] ."<br>";
    echo "Jurusan : " .$d['jurusan'] ."<br><br>";
}

?>