<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>VAKSIN</title>
  </head>
  <body>
  
  <!-- membuat form -->
  <form method="POST" action=""><br>
  <h3><center>SYARAT MASUK MIKO MALL</center></h3>
  <div class="container">
  <div class="form-group">
    <label for="anda">Nama  Anda</label>
    <input type="text" class="form-control" id="anda" aria-describedby="emailHelp" name="anda">
  </div>
  <div class="form-group">
    <label for="umur">Umur Anda</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="umur">
  </div>
  <div class="form-group">
    <label for="status">Status Vaksin</label>
  </div>
  <select class="custom-select custom-select-lg mb-3" name="status">
  <option>==Status==</option>
  <option value="Sudah Vaksin">Sudah Vaksin</option>
  <option value="Belum Vaksin">Belum Vaksin</option>
  </select> 
  </div>
  <center><button type="submit" class="btn btn-primary" name="simpan">Submit</button></center>
  </div>

<?php

if (isset($_POST['simpan'])) {
    $anda = $_POST['anda'] ;
    $umur = $_POST['umur'] ;
    $status = $_POST['status'] ;
    $sudah = "Sudah Vaksin";
    $belum = "Belum Vaksin";
    echo "<center>";
    echo "<table>";

    {
      echo "<tr>";
      echo "<td></td>";
      echo "<td>Nama Anda </td>";
      echo "<td>:</td>";
      echo "<td>$anda </td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td></td>";
      echo "<td>Umur Anda </td>";
      echo "<td>:</td>";
      echo "<td>$umur </td>";
      echo "</tr>";
    }

    if ($umur < 12) {
      echo "<tr>";
      echo "<td></td>";
      echo "<td><br><b><i>TIDAK BISA MASUK!<i><b></td>";
      echo "</tr>";
    }elseif ($umur > 50) {
      echo "<tr>";
      echo "<td></td>";
      echo "<td><br><b><i>TIDAK BISA MASUK!<i><b></td>";
      echo "</tr>";
    }elseif ($status == "Sudah Vaksin") {
      echo "<tr>";
      echo "<td></td>";
      echo "<td>Status Anda </td>";
      echo "<td>:</td>";
      echo "<td>$status </td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td></td>";
      echo "<td><br><b><i>SILAHKAN MEMASUKI MALL!!<i><b></td>";
      echo "</tr>";
    }else if ($status == "Belum Vaksin") {
      echo "<tr>";
      echo "<td></td>";
      echo "<td>Status Anda </td>";
      echo "<td>:</td>";
      echo "<td>$status </td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td></td>";
      echo "<td><br><b><i>ANDA DILARANG MEMASUKI MALL!!<i><b></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td></td>";
      echo "<td><i>Lakukan Vaksinasi Terlebih Dahulu<i></td>";
      echo "</tr>";
      echo "</tr>";
      echo "<tr>";
      echo "<td></td>";
      echo "<td><a href = https://pedulilindungi.id/>pedulilindungi.id</a></td>";
      echo "</tr>";
    }else {
      echo "<tr>";
      echo "<td></td>";
      echo "<td><br><b><i>ISI DATA!<i><b></td>";
      echo "</tr>";
    }
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

