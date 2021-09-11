<?php

// //penulisan array 2 menggunakan array multidimensi
// $belajar = [ ["petanikode" => "Belajar PHP & MySQL untuk Pemula"], 
//              ["dunia ilkom" => "Tutorial PHP dari Nol hingga Mahir"],
//              ["jago koding" => "Membuat Aplikasi Web dengan PHP"],
//              ["programmer" => "Tutorial Belajar PHP"],
//              ["dunia cyber" => "Tutorial Belajar Mikrotik"] ];

// echo "ARTIKEL BELAJAR NGODING";
// echo "<br>";
// echo "Judul : ".$belajar[2]['jago koding'] .", Dari Penulis :" ." jago koding";
// echo "<br>";
// echo "Judul : ".$belajar[3]['programmer'] .", Dari Penulis :" ." programmer";





//penulisan array 2 key nya ada dua
$belajar = [ ["penulis" => "petanikode", "judul" => "Belajar PHP & Mysql untuk Pemula"],
             ["penulis" => "dunia ilkom", "judul" => "Tutorial PHP dari Nol hingga Mahir"],
             ["penulis" => "jago koding", "judul" => "Membuat Aplikasi Web dengan PHP"],
             ["penulis" => "programmer", "judul" => "Tutorial Belajar PHP"],
             ["penulis" => "dunia cyber", "judul" => "Tutorial Belajar Mikrokotik"]
];

echo "ARTIKEL BELAJAR NGODING DASAR";
echo "<br>";
echo "Judul Artikel: ".$belajar[2]['judul'] .", Penulis Artikel : " .$belajar[2]['penulis'];
echo "<br>";
echo "Judul Artikel: ".$belajar[3]['judul'] .", Penulis Artikel : " .$belajar[3]['penulis'];

?>