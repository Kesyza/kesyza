<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>NAVBAR</title>
  </head>
  <body>
  
  <!-- membuat form -->
  <form method="POST" action=""><br>
  <h3><center>PENGGAJIHAN PT KELINCI AKUR</center></h3>
  <div class="container">
  <div class="form-group">
    <label for="bendahara">Nama Bendahara</label>
    <input type="text" class="form-control" id="bendahara" aria-describedby="emailHelp" name="bendahara">
  </div>
  <div class="form-group">
    <label for="pekerja">Nama Pekerja</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pekerja">
  </div>
  <div class="form-group">
    <label for="pekerja">Jenis Kelamin</label><br>
    <input type = 'radio' name = 'jenis' value = 'Perempuan' required>Perempuan
    <input type = 'radio' name = 'jenis' value = 'Laki-Laki' required>Laki-Laki
  </div>
  <div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input type="date" class="form-control" id="tanggal" name="tanggal">
  </div>
  <div class="form-group">
    <label for="jabatan">Jabatan</label>
  </div>
  <select class="custom-select custom-select-lg mb-3" name="jabatan">
  <option>==Jabatan==</option>
  <option value="Direktur">Direktur</option>
  <option value="Maneger">Maneger</option>
  <option value="Karyawan">Karyawan</option>
  <option value="OB">OB</option>
  </select> 
  <div class="form-group">
    <label for="pendidikan">Pendidikan Terakhir</label>
  </div>
  <select class="custom-select custom-select-lg mb-3" name="pendidikan">
  <option>==Pendidikan Terakhir==</option>
  <option value="SD">SD</option>
  <option value="SMP">SMP</option>
  <option value="SMK">SMK</option>
  <option value="S1">S1</option>  
  </select>
  <div class="form-group">
    <label for="lembur">Lembur</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="lembur">
  </div>
  <div class="form-group">
    <label for="potongan">Potongan</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="potongan">
  </div>
  <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
  </div>

<?php

if(isset($_POST['simpan'])){

    $bendahara = $_POST['bendahara'];
    $pekerja = $_POST['pekerja'];
    $jenis = $_POST['jenis'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $lembur = $_POST['lembur'];
    $potongan = $_POST['potongan'];
    echo "<center>";
    echo "<table>";

    echo "<h2><center>Struk Gaji Karyawan</center></h2>";
    echo "--------------------------------------------------------------------------------------------<br>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td>Tanggal</td>";
    echo "<td><i><b>$tanggal</b></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td><h4><i>Gaji Pokok</i></h4> </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td>Nama Karyawan </td>";
    echo "<td>:</td>";
    echo "<td>$pekerja </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td>Jenis Kelamin </td>";
    echo "<td>:</td>";
    echo "<td>$jenis </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td>Pendidikan Terakhir </td>";
    echo "<td>:</td>";
    echo "<td>$pendidikan </td>";
    echo "</tr>";
    if($jabatan == "Direktur"){
        $gaji = 10000000;
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Jabatan </td>";
        echo "<td>:</td>";
        echo "<td>$jabatan </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Gaji </td>";
        echo "<td>:</td>";
        echo "<td>$gaji </td>";
        echo "</tr>";
    }
    else if($jabatan == "Maneger"){
        $gaji = 7500000;
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Jabatan </td>";
        echo "<td>:</td>";
        echo "<td>$jabatan </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Gaji </td>";
        echo "<td>:</td>";
        echo "<td>$gaji </td>";
        echo "</tr>";
    }
    else if($jabatan == "Karyawan"){
        $gaji = 5000000;
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Jabatan </td>";
        echo "<td>:</td>";
        echo "<td>$jabatan </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Gaji </td>";
        echo "<td>:</td>";
        echo "<td>$gaji </td>";
        echo "</tr>";
    }
    else if($jabatan == "OB"){
        $gaji = 2500000;
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Jabatan </td>";
        echo "<td>:</td>";
        echo "<td>$jabatan </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Gaji </td>";
        echo "<td>:</td>";
        echo "<td>$gaji </td>";
        echo "</tr>";
    }
    else{
        echo "Jabatan Tidak Ada";
    }

    echo "<tr>";
    echo "<td></td>";
    echo "<td><h4><i>Tunjangan</i></h4> </td>";
    echo "</tr>";
    echo "<tr>";
    if($pendidikan == "SD"){
        $tunjangan = 250000;
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Tunjangan </td>";
        echo "<td>:</td>";
        echo "<td>$tunjangan </td>";
        echo "</tr>";
        echo "<tr>";
    }
    else if($pendidikan == "SMP"){
        $tunjangan = 500000;
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Tunjangan </td>";
        echo "<td>:</td>";
        echo "<td>$tunjangan </td>";
        echo "</tr>";
        echo "<tr>";
    }
    else if($pendidikan == "SMK"){
        $tunjangan = 1000000;
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Tunjangan </td>";
        echo "<td>:</td>";
        echo "<td>$tunjangan </td>";
        echo "</tr>";
        echo "<tr>";
    }
    else if($pendidikan == "S1"){
        $tunjangan = 1500000;
        echo "<tr>";
        echo "<td></td>";
        echo "<td>Tunjangan </td>";
        echo "<td>:</td>";
        echo "<td>$tunjangan </td>";
        echo "</tr>";
        echo "<tr>";
    }
    else{
        echo "Tunjangan Tidak Ada";
    }
    $lemburr = $lembur * 20000;
    echo "<tr>";
        echo "<td></td>";
        echo "<td>Vakasi Lembur </td>";
        echo "<td>:</td>";
        echo "<td>$lemburr </td>";
        echo "</tr>";
        echo "<tr>";

        echo "<tr>";
        echo "<td></td>";
        echo "<td><h4><i>Potongan</i></h4> </td>";
        echo "</tr>";
        echo "<tr>";
    echo "<tr>";
        echo "<td></td>";
        echo "<td>Potongan </td>";
        echo "<td>:</td>";
        echo "<td>$potongan </td>";
        echo "</tr>";
        echo "<tr>";
    $total = $gaji + $tunjangan + $lemburr - $potongan;
    echo "<tr>";
        echo "<td></td>";
        echo "<td><h4><i>Total Gaji : $total</i></h4> </td>";
        echo "</tr>";
        echo "<tr>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<br><td>Bendahara : $bendahara</td>";
    echo "</tr>";
    echo "</table>";
    echo "</center>";

}
?>
</form>

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

