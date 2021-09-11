<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <h2>Switch Case</h2>
    <form method = "POST" action = "">
    <table>
    <tr>
    <td>Masukan Angka</td>
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

    switch ($angka){
        case 1:
            echo "<br>Isi variable angka adalah SATU";
            break;
        case 2:
            echo "<br>Isi variable angka adalah DUA";
            break;
        case 3:
            echo "<br>Isi variable angka adalah TIGA";
            break;
        case 4:
            echo "<br>Isi variable angka adalah EMPAT";
            break;
        case 5:
            echo "Isi variable angka adalah LIMA";
            break;
        case 6:
            echo "Isi variable angka adalah ENAM";
            break;

    default:
    echo "Isi TIDAK ADA";
    break;
        }
}
?>