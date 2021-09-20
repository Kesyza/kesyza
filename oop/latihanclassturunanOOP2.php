<!doctype html>
<html lang="en">
  <head>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
body {
  background-image: url("g.jpg");
  background-size: 20%;
  color: #FFD700;
}

</style>
    <title>CLASS TURUNAN</title>
  </head>

<?php

if(isset($_POST['proses'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $kerja = $_POST['kerja'];
    $status = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lain = $_POST['lainnya'];

class penggajihan {
    public $total_gaji;
    public $total_pengeluaran;
function penggajihan1($no, $nama, $unit, $tanggal) {
  echo "<table>";
  echo "<h5><center>Struk Gaji Guru/Karyawan Yayasan Assalaam<br>--------------------------------------------------------</center></h5>";
echo "<tr><td>No</td><td>:</td><td>{$no}</td></tr>";
echo "<br>";
echo "<tr><td>Nama</td><td>:</td><td>{$nama}</td></tr>";
echo "<br>";
echo "<tr><td>Unit</td><td>:</td><td>{$unit}</td></tr>";
echo "<br>";
echo "<tr><td>Tanggal Gaji</td><td>:</td><td>{$tanggal}</td></tr>";
echo "<br>";
echo "</table>";
}
}

class gaji extends penggajihan {
function gaji1($jabatan, $lama, $status) {
  echo "<table align=center>";
echo "<tr><td><td><td><h5><i>Gaji</i></h5></td></td></td><tr>";
echo "<tr><td>Jabatan</td><td>:</td><td>{$jabatan}</td></tr>";
if ($jabatan == "Kepala Sekolah"){
    $gajih = 5000000;
} elseif ($jabatan == "Guru"){
    $gajih = 3000000;
} elseif ($jabatan == "Karyawan"){
    $gajih = 1500000;
} else {
    $gajih = 0;
}
echo "<tr><td>Gaji</td><td>:</td><td>Rp. {$gajih}</td></tr>";
echo "<tr><td>Lama Kerja</td><td>:</td><td>{$lama} Tahun</td></tr>";
if ($lama > 0 || $lama<= 5){
    $bonus = 250000;
} elseif ($lama > 5 || $lama <= 10){
    $bonus = 500000;
} else {
    $bonus = 1000000;
}
echo "<tr><td>Bonus Lama Kerja</td><td>:</td><td>Rp. {$bonus}</td></tr>";
echo "<tr><td>Status Kerja</td><td>:</td><td>{$status}</td></tr>";
if ($status == "Pegawai Tetap"){
    $tnjngn = 500000;
} else if ($status == "Pegawai Kontrak"){
    $tnjngn = 0;
}
echo "<tr><td>Tunjangan Status Kerja</td><td>:</td><td>Rp. {$tnjngn}</td></tr>";
$this->total_gaji = $gajih + $bonus + $tnjngn;
echo "<tr><td><b>Total Gaji</td><td>:</td><td>Rp. " . $this->total_gaji . "</b>";
}
}

class potongan extends gaji {
function potongan1($bpjs, $pinjaman, $tabungan, $lain) {
    echo "<tr>
  <td><td>
  <td><h5><i>Potongan</i></h5></td>
  </td></td>
  <tr>";
    echo "<tr>
    <td>BPJS</td>
    <td>:</td>
    <td>{$bpjs}</td>
    </tr>";
    echo "<tr>
    <td>Pinjaman</td>
    <td>:</td>
    <td>{$pinjaman}</td>
    </tr>";
    echo "<tr>
    <td>Tabungan</td>
    <td>:</td>
    <td>{$tabungan}</td>
    </tr>";
    echo "<tr>
    <td>Lainnya</td>
    <td>:</td>
    <td>{$lain}</td>
    </tr>";
    $this->total_pengeluaran = $bpjs + $pinjaman + $tabungan + $lain;
    echo "<tr>
    <td><b>Total Potongan</td>
    <td>:</td>
    <td>Rp. " . $this->total_pengeluaran . "</b>";
    $sisa = $this->total_gaji - $this->total_pengeluaran;
    echo "<tr>
    <td><b><i>Jumlah Yang Diterima <td>:</td><td> Rp. $sisa </b></i></td></td></tr>";
}
}

}

$data = new potongan();
$data->penggajihan1($no, $nama, $unit, $tanggal);
$data->gaji1($jabatan, $kerja, $status);
$data->potongan1($bpjs, $pinjaman, $tabungan, $lain);

?> 
    
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>