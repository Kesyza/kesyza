<?php

// class
class penggajian{

    // property
    var $nama;
    var $jabatan;

    // method
    function gaji_karyawan(){
        $gaji = 5000000;
        $lembur = 4 * 100000; 
        $potongan 
        $total = $gaji + $lembur;
        return $total;
    }
}

// object
$bayar = new penggajian();

// menampilkan property
$bayar -> nama = "Ujuy";
$bayar -> jabatan = "karyawan";

// menampilkan di browser
echo "Nama Anda : ".$bayar -> nama;
echo "<br>";
echo "Gaji Bulan Ini : ".$bayar -> gaji_karyawan();

?>