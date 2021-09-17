<?php

// // catatan : construct akan nampil sendiri tanpa harus di tampilkan lagi di luar class, dan tampilannya akan selalu di atas dimanapun kita meletakannya INGET!!!

// // // contoh constructor 
// // class
// class manusia{

//     // method 
//     function __construct(){
//         echo "=====INI ADALAH BIODATAKU=====";
//     }

//     function tampilkan_nama(){
//         return "Nama Saya Adalah Kesyza Andriana Hartuti";
//     }

//     function tampilkan_kelas(){
//         return "Saya Dari Kelas XII Rpl2";
//     }

//     function tampilkan_hobi(){
//         return "Hobi  Saya Adalah Membaca Dan Menulis";
//     }
// }

// // objectss
// $manusia = new manusia();

// // menampilkan di browser
// echo "<hr>";
// echo $manusia -> tampilkan_nama();
// echo "<br>";
// echo $manusia -> tampilkan_kelas();
// echo "<br>";
// echo $manusia -> tampilkan_hobi();





// // destruct kebalilkan dari construct INGET!!!

// // contoh destructor 
// class
class manusia{

    // method
    function __destruct(){
        echo "Ini Adalah Method DESTRUCT";
    }

    function nama(){
        echo "<br>Nama Saya Kesyza Andriana Hartuti<br>";
    }

    function __construct(){
        echo "Ini Adalah Method CONSTRUCT";
    }
}

// object
$manusia = new manusia();

// menampilkan di browser
echo $manusia -> nama();

?>