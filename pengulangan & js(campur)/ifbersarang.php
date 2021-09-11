<?php
$kelas = "10";
$nilai = "65";

       if($kelas == "X" || $kelas == "x" || $kelas == "10"){
           if($nilai >= 75){
               echo "Selamat Anda LULUS";
           }
           else{
               echo "Selamat Anda TIDAK LULUS";
           }
       }

       else if($kelas == "XI" || $kelas == "xi" || $kelas == "11"){
           if($nilai >= 78){
               echo "Selamat Anda LULUS";
           }
           else{
               echo "Selamat Anda TIDAK LULUS";
           }
       }

       else if($kelas == "XII" || $kelas == "xii" || $kelas == "12"){
           if($nilai >= 80){
               echo "Selamat Anda LULUS";
           }
           else{
               echo "Selamat Anda TIDAK LULUS";
           }
       }

       else{
           echo "Tidak Ada Kelas";
       }

?>