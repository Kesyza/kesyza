<?php

// // membuat fungsi
// function perkenalan($umur){
//     echo "Umur saya ". $umur . " tahun <br/>";
//     if($umur >= 17 && $umur < 70){
//         echo "Sudah Mempunyai Identitas";
//     }
//     else if($umur < 17 && $umur > 1){
//         echo "Belum Mempunyai Identitas";
//     }
//     else{
//         echo "NGGA ADA DIBILANG";
//     }

//   }
  
//   // memanggil fungsi yang sudah dibuat
//   perkenalan(16);





// latihan operator perhitungan
function penjumlahan($a1,$a2){
    $tambah = $a1 + $a2;
    $kurang = $a1 - $a2;
    $kali = $a1 * $a2;
    $bagi = $a1 / $a2;

    echo "OPERATOR PERHITUNGAN KALKULATOR <br>";
    echo $a1 ." + ". $a2 ." = " .$tambah ."<br>"; 
    echo $a1 ." - ". $a2 ." = " .$kurang ."<br>"; 
    echo $a1 ." * ". $a2 ." = " .$kali ."<br>"; 
    echo $a1 ." : ". $a2 ." = " .$bagi ."<br>"; 
  }
  penjumlahan(10,2);

?>