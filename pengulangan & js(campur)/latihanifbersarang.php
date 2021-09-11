<?php

$jenis = "Minuman";
$menu = "Air Putih";
$jumlah = 6;
$harga = 10000;
$total = $jumlah * $harga;
$diskon = $total * 0.2;
$bayar = $total - $diskon; 


if($jenis == "Makanan" || $jenis == "makanan"){
    if($menu == "Nasi Goreng"){
        echo "SELAMAT DATANG DI CAFE BANGTWICE</br>";
        echo "+----------------------------------------------------+</br>";
        echo "Jenis Makanan : $jenis <br>";
        echo "Nama Makanan : $menu <br>";
        echo "Jumlah Makanan : $jumlah <br>";
        echo "Total Bayar : $total <br>";

        if($total >= 50000){
            echo "Diskon 20% : $diskon <br>";
        }
        echo "Bayar : $bayar <br>";
    }

    else if($menu == "Mie Goreng"){
        echo "SELAMAT DATANG DI CAFE BANGTWICE</br>";
        echo "+----------------------------------------------------+</br>";
        echo "Jenis Makanan : $jenis <br>";
        echo "Nama Makanan : $menu <br>";
        echo "Jumlah Makanan : $jumlah <br>";
        echo "Total Bayar : $total <br>";

        if($total >= 50000){
            echo "Diskon 20% : $diskon <br>";
        }
        echo "Bayar : $bayar <br>";
    }

    else if($menu == "Ayam Goreng"){
        echo "SELAMAT DATANG DI CAFE BANGTWICE</br>";
        echo "+----------------------------------------------------+</br>";
        echo "Jenis Makanan : $jenis <br>";
        echo "Nama Makanan : $menu <br>";
        echo "Jumlah Makanan : $jumlah <br>";
        echo "Total Bayar : $total <br>";

        if($total >= 50000){
            echo "Diskon 20% : $diskon <br>";
        }
        echo "Bayar : $bayar <br>";
    }

    else{
        echo "Menu Tidak Ada";
    }
}

else if($jenis == "Minuman" || $jenis == "minuman"){
    if($menu == "Air Putih"){
        echo "SELAMAT DATANG DI CAFE BANGTWICE</br>";
        echo "+----------------------------------------------------+</br>";
        echo "Jenis Makanan : $jenis <br>";
        echo "Nama Makanan : $menu <br>";
        echo "Jumlah Makanan : $jumlah <br>";
        echo "Total Bayar : $total <br>";

        if($total >= 50000){
            echo "Diskon 20% : $diskon <br>";
        }
        echo "Bayar : $bayar <br>";
    }

    else if($menu == "Jus"){
        echo "SELAMAT DATANG DI CAFE BANGTWICE</br>";
        echo "+----------------------------------------------------+</br>";
        echo "Jenis Makanan : $jenis <br>";
        echo "Nama Makanan : $menu <br>";
        echo "Jumlah Makanan : $jumlah <br>";
        echo "Total Bayar : $total <br>";

        if($total >= 50000){
            echo "Diskon 20% : $diskon <br>";
        }
        echo "Bayar : $bayar <br>";
    }

    else if($menu == "Kopi"){
        echo "SELAMAT DATANG DI CAFE BANGTWICE</br>";
        echo "+----------------------------------------------------+</br>";
        echo "Jenis Makanan : $jenis <br>";
        echo "Nama Makanan : $menu <br>";
        echo "Jumlah Makanan : $jumlah <br>";
        echo "Total Bayar : $total <br>";

        if($total >= 50000){
            echo "Diskon 20% : $diskon <br>";
        }
        echo "Bayar : $bayar <br>";
    }

    else{
        echo "Menu Tidak Ada";
    }
}

else{
    echo "Maaf Pesanan Tidak Ada";
}

?>