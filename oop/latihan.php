<?php

// // menggunakan $this tanpa property

// // class
// class pendapatan{

//     // property

//     // method
//     public function gaji($jabatan, $pendidikan){
//         echo "<table>";
//         echo "<tr>";
//         echo "<td></td>";
//         echo "<td><h4> Pendapatan Gaji </h4></td>";
//         echo "</tr>";
//         echo "<tr>";
//         echo "<td></td>";
//         echo "<td>Jabatan </td>";
//         echo "<td>:</td>";
//         echo "<td>$jabatan </td>";
//         echo "</tr>";
        
//         // kondisi jabatan dan gaji
//         if($jabatan == "Direktur"){
//             $gaji = 10000000;
//         }
//         else if($jabatan == "Manager"){
//             $gaji = 5000000;
//         }
//         else if($jabatan == "Karyaan"){
//             $gaji = 3000000;
//         }
//         else{
//             $gaji = 0;
//         }
//         echo "<tr>";
//         echo "<td></td>";
//         echo "<td>Gaji Pokok </td>";
//         echo "<td>:</td>";
//         echo "<td> Rp. $gaji </td>";
//         echo "</tr>";

//         // kondisi pendidikan dan tunjangan
//         if($pendidikan == "SMP"){
//             $tunjangan = 500000;
//         }
//         else if($pendidikan == "SMA"){
//             $tunjangan = 1000000;
//         }
//         else if($pendidikan == "S1"){
//             $tunjangan = 2000000;
//         }
//         else{
//             $tunjangan = 0;
//         }
//         echo "<tr>";
//         echo "<td></td>";
//         echo "<td> Pendidikan </td>";
//         echo "<td>:</td>";
//         echo "<td> $pendidikan </td>";
//         echo "</tr>";
//         echo "<tr>";
//         echo "<td></td>";
//         echo "<td>Tunjangan </td>";
//         echo "<td>:</td>";
//         echo "<td> Rp. $tunjangan </td>";
//         echo "</tr>";

//         // menghitung total gaji
//         $total1 = $gaji + $tunjangan;
//             echo "<tr>";
//             echo "<td></td>";
//             echo "<td> Total Gaji </td>";
//             echo "<td>:</td>";
//             echo "<td> Rp. ";
//             return $this -> total1 = $total1;
//             echo "</td>";
//             echo "</tr>";
//         // return $this -> total1 = $total1;
//     }

//     public function keluar($listrik, $kontrak, $kendaraan){
//         echo "<tr>";
//         echo "<td></td>";
//         echo "<td><hr><h4> Pengeluaran </h4></td>";
//         echo "</tr>";
//         echo "<tr>";
//         echo "<td></td>";
//         echo "<td> Bayar Listrik </td>";
//         echo "<td>:</td>";
//         echo "<td> Rp. $listrik </td>";
//         echo "</tr>";
//         echo "<tr>";
//         echo "<td></td>";
//         echo "<td> Bayar Kontrakan </td>";
//         echo "<td>:</td>";
//         echo "<td> Rp. $kontrak </td>";
//         echo "</tr>";
//         echo "<tr>";
//         echo "<td></td>";
//         echo "<td> Cicilan Kendaraan </td>";
//         echo "<td>:</td>";
//         echo "<td> Rp. $kendaraan </td>";
//         echo "</tr>";

//         // menghitung total pengeluaran
//         $total2 = $listrik + $kontrak + $kendaraan;
//         echo "<tr>";
//         echo "<td></td>";
//         echo "<td> Total Pengeluaran </td>";
//         echo "<td>:</td>";
//         echo "<td> Rp. ";
//         return $this -> total2 = $total2; 
//         echo "</td>";
//         echo "</tr>";
//     }

//     public function sisa(){
//         echo "<tr>";
//         echo "<td></td>";
//         echo "<td><hr><h4> Sisa Pendapatan </h4></td>";
//         echo "</tr>";   
//         echo "<tr>";
//         echo "<td></td>";
//         echo "<td> Sisa </td>";
//         echo "<td>:</td>";
//         echo "<td>"."Rp. ".$total3 = ($this->total1 - $this->total2)."</td>";
//         echo "</tr>";
//     }
// }

// // object
// $pendapatan = new pendapatan();

// // menampilkan property

// // menampilkan di browser
// echo $pendapatan -> gaji("Direktur", "S1");
// echo $pendapatan -> keluar(200000, 1000000, 1000000);
// echo $pendapatan -> sisa();





// menggunakan property (propertynya pake public atau protected)

// class
class pendapatan{

    // property
    public $total1;
    public $total2;

    // method
    public function gaji($jabatan, $pendidikan){
        echo "<table>";
        echo "<h4> Pendapatan Gaji </h4>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Jabatan </td>";
        echo "<td>:</td>";
        echo "<td>$jabatan </td>";
        echo "</tr>";
        
        // kondisi jabatan dan gaji
        if($jabatan == "Direktur"){
            $gaji = 10000000;
        }
        else if($jabatan == "Manager"){
            $gaji = 5000000;
        }
        else if($jabatan == "Karyaan"){
            $gaji = 3000000;
        }
        else{
            $gaji = 0;
        }
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Gaji Pokok </td>";
        echo "<td>:</td>";
        echo "<td> Rp. $gaji </td>";
        echo "</tr>";

        // kondisi pendidikan dan tunjangan
        if($pendidikan == "SMP"){
            $tunjangan = 500000;
        }
        else if($pendidikan == "SMA"){
            $tunjangan = 1000000;
        }
        else if($pendidikan == "S1"){
            $tunjangan = 2000000;
        }
        else{
            $tunjangan = 0;
        }
        echo "<tr>";
        echo "<td></td>";
        echo "<td> Pendidikan </td>";
        echo "<td>:</td>";
        echo "<td> $pendidikan </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Tunjangan </td>";
        echo "<td>:</td>";
        echo "<td> Rp. $tunjangan </td>";
        echo "</tr>";

        // menghitung total gaji
        $this->total1 = $gaji + $tunjangan;
            echo "<tr>";
            echo "<td></td>";
            echo "<td> Total Gaji </td>";
            echo "<td>:</td>";
            echo "<td> Rp. ".$this -> total1;
            echo "</td>";
            echo "</tr>";
        // return $this -> total1 = $total1;
    }

    public function keluar($listrik, $kontrak, $kendaraan){
        echo "<table>";
        echo "<hr><h4> Pengeluaran </h4>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td> Bayar Listrik </td>";
        echo "<td>:</td>";
        echo "<td> Rp. $listrik </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td> Bayar Kontrakan </td>";
        echo "<td>:</td>";
        echo "<td> Rp. $kontrak </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td> Cicilan Kendaraan </td>";
        echo "<td>:</td>";
        echo "<td> Rp. $kendaraan </td>";
        echo "</tr>";

        // menghitung total pengeluaran
        $this->total2 = $listrik + $kontrak + $kendaraan;
        echo "<tr>";
        echo "<td></td>";
        echo "<td> Total Pengeluaran </td>";
        echo "<td>:</td>";
        echo "<td> Rp. ".$this -> total2; 
        echo "</td>";
        echo "</tr>";
    }

    public function sisa(){
        echo "<table>";
        echo "<hr><h4> Sisa Pendapatan </h4>"; 
        echo "<tr>";
        echo "<td></td>";
        echo "<td> Sisa </td>";
        echo "<td>:</td>";
        echo "<td>"."Rp. ".$total3 = $this->total1 - $this->total2."</td>";
        echo "</tr>";
    }
}

// object
$pendapatan = new pendapatan();

// menampilkan property

// menampilkan di browser
echo $pendapatan -> gaji("Manager", "S1");
echo $pendapatan -> keluar(100000, 1000000, 500000);
echo $pendapatan -> sisa();

?>