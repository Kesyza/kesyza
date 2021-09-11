<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan For</title>
</head>
<body>
<h2>Form Biodata Diri</h2>
    <form method = "POST" action = "">
    <table>
    <tr>
    <td>Masukan Inputan </td>
    <td>:</td>
    <td><input type = 'text' name = 'angka'></td>
    </tr>

    <tr>
    <td></td>
    <td></td>
    <td><input type = 'submit' name = 'simpan' value = 'KIRIM'></td>
    </tr>
    </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $angka = $_POST['angka'];

for($i=1; $i <= $angka; $i++){
    for($a=1; $a <= $i; $a++){
        echo "Perulangan $a<br>";
    }
    echo "<br>";
}
}
?>