<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PENGULANGAN</title>
</head>
<body>
        
    <h2><center>FORM PENGULANGAN</center></h2>

    <form method = "POST" action = ""><center>
    <table>
    
    <tr>
    <td>1. Deret Bilangan Ganjil.</td>
    </tr>

    <tr>
    <td>2. Segitiga Sama Kaki Terbalik.</td>
    </tr>

    <tr>
    <td>3. Deret Bilangan Kelipatan Tiga.</td>
    </tr>

    <tr>
    <td>Pilih Inputan</td>
    <td>:</td>
    <td><input type = 'text' name = 'pilih' required></td>
    </tr>

    <tr>
    <td>Masukan Angka</td>
    <td>:</td>
    <td><input type = 'text' name = 'angka' required></td>
    </tr>

    <tr>
    <td></td>
    <td></td>
    <td><input type = "submit" name ="simpan" value = "KIRIM"></td>
    </tr>

    </table>

<table>
<td>
<?php

    if(isset($_POST['simpan'])){

    $pilih = $_POST['pilih'];
    $angka = $_POST['angka'];

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
</td>
</form>
</center>
</table>

</body>
</html>


















