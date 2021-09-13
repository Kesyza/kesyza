<?php

// class
class bangun_datar{
    
    // property

    // method
    function persegi(){
        $sisi = 4;
        echo "Menghitung Luas Persegi";
        echo "<br>";
        echo "Sisinya = ".$sisi;
        echo "<br>";
        $luas = $sisi * $sisi;
        return $luas;
    }

    function segitiga(){
        $alas = 3;
        $tinggi = 4;
        echo "Menghitung Luas Segitiga";
        echo "<br>";
        echo "Alasnya = ".$alas;
        echo "<br>";
        echo "Tingginya = ".$tinggi;
        echo "<br>";
        $luas = 1/2 * $alas * $tinggi;
        return $luas;
    }

    function lingkaran(){
        $jari = 6;
        $phi = 3.14;
        echo "Menghitung Luas Lingkaran";
        echo "<br>";
        echo "Phinya = ".$phi;
        echo "<br>";
        echo "Jari-Jarinya = ".$jari;
        echo "<br>";
        $luas = $phi * $jari * $jari;
        return $luas;
    }
}

// object
$perhitungan = new bangun_datar();

// menampilkan di browser
echo "Luasnya Adalah = ".$perhitungan -> persegi();
echo "<hr>";

echo "Luasnya Adalah = ".$perhitungan -> segitiga();
echo "<hr>";

echo "Luasnya Adalah = ".$perhitungan -> lingkaran();
echo "<hr>";

?>