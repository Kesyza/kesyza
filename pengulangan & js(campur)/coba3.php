<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>PENGULANGAN</title>
  </head>
  <body>
  
  <!-- membuat form -->
  <form method="POST" action=""><br>
  <h3><center>FORM PENGULANGAN</center></h3>
  <center>
  1. Deret Bilangan Ganjil.<br>
  2. Segitiga Sama Kaki Terbalik.<br>
  3. Deret Bilangan Kelipatan Tiga.<br></center>
  <div class="container">
  <div class="form-group">
    <label for="pilih">Pilih Inputan</label>
    <input type="text" class="form-control" id="anda" aria-describedby="emailHelp" name="pilih">
  </div>
  <div class="form-group">
    <label for="angka">Masukan Angka</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="angka">
  </div>
  </div>
  <center><button type="submit" class="btn btn-primary" name="simpan">Submit</button></center>
  </div>

  <?php

if(isset($_POST['simpan'])){

$pilih = $_POST['pilih'];
$angka = $_POST['angka'];
echo "<center>";
  echo "<table>";

if($pilih == "1"){
    echo "<br>Deret Bilangan Ganjil<br>";
    for($i = 1; $i <= $angka; $i++){
        $i % 1 == 1;
        echo "$i ";
        $i++;
        }
}
else if($pilih == "2"){
    echo "<br>Segitiga Sama Kaki Terbalik<br><br>";

    for($a = $angka; $a >= 1; $a--){
        for($i = $angka; $i >= $a; $i--){
            echo "&nbsp";
        }
        for($a1 = 1; $a1 <= $i; $a1++){
        echo "*";
    }
        echo "<br>";
    }
}
else if($pilih == "3"){
    echo "<br>Deret Bilangan Kelipatan Tiga<br>";
    for($i = 3; $i <= $angka; $i+=3){
        
        echo "$i ";
    }
}
else{
    echo "<br>Tidak Ada";
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

