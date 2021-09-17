<?php

// class
class manusia{

    // method 
    function __construct($nama, $kelas, $jk){
        echo "Nama Saya : ".$nama."<br>";
        echo "Kelas : ".$kelas."<br>";
        echo "Jenis Kelamin : ".$jk."<hr>";
    }
}

// object
$manusia = new manusia("Kesyza Andriana Hartuti", "XII Rpl2", "Perempuan");
$manusia = new manusia("Anna Scarlett Johannson", "XII Rpl1", "Perempuan");
$manusia = new manusia("Muhammad Fadhil Rafansyah", "XII Rpl3", "Laki-Laki");

?>