<?php

// // // contoh 1
// // class
// class laptop{

//     // property
//     var $pemilik;
//     var $merek;
//     var $ukuran_layar;

//     // method atau function
//     function hidupkan_laptop() {
//         return "Hidupkan Laptop";
//         }
      
//         function matikan_laptop() {
//         return "Matikan Laptop";
//         }
// }

// // object
// $laptop_andi = new laptop();

// echo $laptop_andi->hidupkan_laptop();
// echo "<br>";
// echo $laptop_andi->matikan_laptop();




 
// // // contoh 2
// // class
// class alat_elektronik{

//     // property
//     var $pemilik;
//     var $jenis;
//     var $merek;

//     // method
//     function hp(){
//         return "YEY HP BARU";
//     }
//     function tv(){
//         return "ASIK DAPET TV";
//     }
//     function radio(){
//         return "BUTUT AH RADIO-NYA";
//     }
// }

// // object 
// $alat_ujuy = new alat_elektronik();
// $alat_jio = new alat_elektronik();
// $alat_mawar = new alat_elektronik();

// // menampilkan di browser
// echo "<b>".$alat_ujuy -> hp()."</b>";
// echo "<br>";
// echo "<b>".$alat_jio -> tv()."</b>";
// echo "<br>";
// echo "<b>".$alat_mawar -> radio()."</b>";





// // // contoh 3
// // class 
// class alat_elektronik{

//     // property
//     var $pemilik;
//     var $jenis;
//     var $merek;

//     // method
//     function hp(){
//         return "YEY HP BARU";
//     }
//     function tv(){
//         return "ASIK DAPET TV";
//     }
//     function radio(){
//         return "BUTUT AH RADIO-NYA";
//     }
// }

// // object
// $alat_ujuy = new alat_elektronik();
// $alat_jio = new alat_elektronik();
// $alat_mawar = new alat_elektronik();

// // menampilkan property
// $alat_ujuy -> pemilik = "Ujuy";
// $alat_ujuy -> jenis = "Hand Phone";
// $alat_ujuy -> merek = "Samsung";

// $alat_jio -> pemilik = "Jio";
// $alat_jio -> jenis = "Televisi";
// $alat_jio -> merek = "Polytron";

// $alat_mawar -> pemilik = "Mawar";
// $alat_mawar -> jenis = "Radio";
// $alat_mawar -> merek = "Jadul";

// // menampilkan di browser
// echo "Nama Pemilik : ".$alat_ujuy -> pemilik;
// echo "<br>";
// echo "Jenis Barang : ".$alat_ujuy -> jenis;
// echo "<br>";
// echo "Merek Barang : ".$alat_ujuy -> merek;
// echo "<br>";
// echo "<b>".$alat_ujuy -> hp()."</b>";

// echo "<br><br>";

// echo "Nama Pemilik : ".$alat_jio -> pemilik;
// echo "<br>";
// echo "Jenis Barang : ".$alat_jio -> jenis;
// echo "<br>";
// echo "Merek Barang : ".$alat_jio -> merek;
// echo "<br>";
// echo "<b>".$alat_jio -> tv()."</b>";


// echo "<br><br>";

// echo "Nama Pemilik : ".$alat_mawar -> pemilik;
// echo "<br>";
// echo "Jenis Barang : ".$alat_mawar -> jenis;
// echo "<br>";
// echo "Merek Barang : ".$alat_mawar -> merek;
// echo "<br>";
// echo "<b>".$alat_mawar -> radio()."</b>";





// // contoh 4
// class
class alat_elektronik{

    // property
    var $pemilik;
    var $jenis;
    var $merek;

    // method
    function hp($ket){
        return $ket;
    }
    function tv($ket){
        return $ket;
    }
    function radio($ket){
        return $ket;
    }
}

// object 
$alat_ujuy = new alat_elektronik();
$alat_jio = new alat_elektronik();
$alat_mawar = new alat_elektronik();

// menampilkan di browser
echo "<b>".$alat_ujuy -> hp("YEY HP BARU")."</b>";
echo "<br>";
echo "<b>".$alat_jio -> tv("ASIK DAPET TV")."</b>";
echo "<br>";
echo "<b>".$alat_mawar -> radio("BUTUT AH RADIO-NYA")."</b>";

?>