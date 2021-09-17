<?php

// class
class manusia{

    // method 
    function __construct($nama, $kelas, $jk){
        echo "=====INI ADALAH BIODATAKU=====<hr>";
        echo "Nama Saya : ".$nama."<br>";
        echo "Kelas : ".$kelas."<br>";
        echo "Jenis Kelamin : ".$jk."<hr>";
    }
}

// object
$manusia = new manusia("Kesyza", "XII Rpl2", "Perempuan");

?>