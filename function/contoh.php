<?php

// // function tanpa parameter atau variable
// // membuat fungsi
// function perkenalan(){
//   echo "Assalamulaikmu, ";
//   echo "Perkenalkan, nama saya Ardianta<br/>";
//   echo "Senang berkenalan dengan anda <br/>";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalan();





// // // function pakai parameter
// // membuat fungsi
// function perkenalan($nama, $umur){
//   echo "Assalamulaikmu, ";
//   echo "Perkenalkan, nama saya ". $nama . "<br/>";
//   echo "Umur saya ". $umur . " tahun <br/>";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalan("Kesyza Andriana Hartuti", 16);





// // contoh function perhitungan
// function penjumlahan($a1,$a2){
//   $tambah = $a1 + $a2;
//   echo $a1 ." + ". $a2 ." = " .$tambah; 
// }
// penjumlahan(20,10);





// // parameter default
// function data($umur, $nama = "Kesyza"){
//   echo "Nama Saya ".$nama ."<br>";
//   echo "Umur Saya ".$umur;
// } 
// data(16);





// // function memanggil function lain
// function umur($tahun_lahir, $tahun_sekarang){
//   $usia = $tahun_sekarang - $tahun_lahir;
//   return $usia;
// }
// // echo "Umur Saya ".umur(2005, 2021);

// function data($nama, $jk){
//   echo "Nama Saya ".$nama ."<br>";
//   echo "Jenis Kelamin Saya ".$jk ."<br>";
//   echo "Umur Saya ".umur(2005, 2021);
// }
// data("Kesyza Andriana Hartuti", "Peremouan");





// melakukan perhitungan dengan memanggil function lain
function uts(){
  $nilai_uts = 90;
  return $nilai_uts;
}
function uas(){
  $nilai_uas = 100;
  return $nilai_uas;
}
// echo "Nilai anda ".uts();
// echo "<br>"; 
// echo "Nilai anda ".uas();
function rapot(){
  $jumlah = uts() + uas();
  return $jumlah;
  
}
echo "Nilai Rapot Anda Adalah " .rapot();


?>