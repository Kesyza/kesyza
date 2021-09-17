<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APK KALKULATOR</title>
</head>
<body>
    <table>
        <form action = "" method = "post">

            <tr>
                <td></td>
                <td></td>
                <td><input type = "text" name = "bil1"></td>
            
                <td>
                <select name = "tanda">
                <option value = '+'>+</option>
                <option value = '-'>-</option>
                <option value = '*'>*</option>
                <option value = '/'>/</option>
                </select>
                </td>
            
                <td></td>
                <td></td>
                <td><input type = "text" name = "bil2"></td>
            
                <td>=</td>
                <td></td>
                <td><input type = "submit" name = "hitung" value = "Hitung"></td>
            </tr>

        </form>
    </table>
</body>
</html>

<?php

if(isset($_POST['hitung'])){
    $bil1 = $_POST['bil1'];
    $tanda = $_POST['tanda'];
    $bil2 = $_POST['bil2'];


// class
class input{

    // property
    public $x;
    public $y;
    public $z;

    // method tambah
    public function data($x,$y, $z){
    if($y == "+"){
            $rumus = $x + $z;
            echo $x;
            echo " + ";
            echo $z;
            echo " = ".$rumus;
        }
    else{
            echo "Tidak Ada";
        }
    }

    // method kurang
    public function data1($x,$y, $z){
    if($y == "-"){
            $rumus = $x - $z;
            echo $x;
            echo " - ";
            echo $z;
            echo " = ".$rumus;
            }
    else{
            echo "Tidak Ada";
        }
    }

    // method kali
    public function data2($x,$y, $z){
    if($y == "*"){
        $rumus = $x * $z;
            echo $x;
            echo " * ";
            echo $z;
            echo " = ".$rumus;
            }
    else{
                echo "Tidak Ada";
        }
    }

    // method bagi
    public function data3($x,$y, $z){
    if($y == "/"){
            $rumus = $x / $z;
            echo $x;
            echo " / ";
            echo $z;
            echo " = ".$rumus;
            }
    else{
            echo "Tidak Ada";
        }
    }
}

// instansiasi class
$data = new input();
$data->data3($bil1,$tanda,$bil2);

echo $data -> x;
echo $data -> z;

}

?>