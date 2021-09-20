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
  background-image: url("download (1).jpg");
  color: #DA70D6;
  background-size: 20%;
}

</style>
    <title>CLASS TURUNAN</title>
  </head>
  <body>
  <form action = "latihanclassturunanOOP2.php" method="post">

    <!--Form Input-->
<form>
    <div class = "container">
    <br>
    <h2><center>PENGGAJIHAN GURU / KARYAWAN YAYASAN ASSALAAM</center></h2>
    <br>
    <center><img src="logo.png"></center>
  <div class="form-group">
    <label for="exampleInputEmail1">No : </label>
    <input type="text" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama :</label>
    <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Unit :</label>
    <select class="form-control" name="unit" id="exampleFormControlSelect1">
      <option>TK</option>
      <option>SD</option>
      <option>SMP</option>
      <option>MTs</option>
      <option>SMA</option>
      <option>SMK</option>
    </select>
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Tanggal :</label>
    <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
  </div>
  <h3><center>Gaji</center></h3>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jabatan :</label>
    <select class="form-control" name="jabatan" id="exampleFormControlSelect1">
      <option>Kepala Sekolah</option>
      <option>Guru</option>
      <option>Karyawan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Lama Kerja :</label>
    <input type="text" name="kerja" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Status Kerja :</label>
    <select class="form-control" name="status" id="exampleFormControlSelect1">
      <option>Pegawai Tetap</option>
      <option>Pegawai Kontrak</option>
    </select>
  </div>
  <h3><center>Potongan</center></h3>
  <div class="form-group">
    <label for="exampleInputEmail1">BPJS : </label>
    <input type="text" class="form-control" name="bpjs" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pinjaman : </label>
    <input type="text" class="form-control" name="pinjaman" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tabungan : </label>
    <input type="text" class="form-control" name="tabungan" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Lainnya : </label>
    <input type="text" class="form-control" name="lainnya" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <button type="submit" name="proses" class="btn btn-primary">Proses</button>
  </div>
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