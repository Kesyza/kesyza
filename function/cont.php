<?php

// sapaPengunjung("Kesyza Andriana Hartuti");

// function sapaPengunjung ($nama) {
//     echo "<h3>Halo {$nama}, selamat datang!</h3>";
//     echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";
    
//   }





// // 1
// sapaPengunjung("Kesyza Andriana Hartuti");

// function sapaPengunjung (string $nama, int $jumlahKunjungan = 11) {
//   echo "<h3>Halo {$nama}, selamat datang!</h3>";
//   echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";

//   if ($jumlahKunjungan > 10) {
//     echo "<p>Kami memiliki hadiah ebook gratis untuk anda karena anda telah mengunjungi situs kami sebanyak {$jumlahKunjungan} kali.</p>";
//   }
// }





// // 2
// function luas_segitiga(){
//   $alas = 10;
//   $tinggi = 5;
//   $luas = ($alas * $tinggi) / 2;
//   return $luas;
// }

// echo "Luas Segitiga : " .luas_segitiga();





// // 3
// function luas_segitiga($alas, $tinggi){
//   $luas = ($alas * $tinggi) / 2;
//   return $luas;
// }

// echo "Luas Segitiga : " .luas_segitiga(4, 3);





// //optional parameter atau default parameter
// function pertambahan($bil1 = 1, $bill2 = 2){
//   return $bil1 + $bill2;
// }

// echo pertambahan(10, 10) . "<br>"; //20
// echo pertambahan(10) . "<br>"; //12
// echo pertambahan(8) . "<br>"; //10
// echo pertambahan();





//fungsi di dalam fungsi
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;

}

function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    // memanggil fungsi lain

    echo "Saya berusia " . hitungUmur(2003, 2021) . "tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi perkenalan 
echo perkenalan("Dinda");

?>