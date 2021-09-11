<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN FORM ARRAY</title>
</head>
<body>
    <center>
    <form action = "" method = "POST">
        <h2>Data Nilai Ujian Siswa Kelas XII Rpl</h2>
        <table>
            <tr>
                <td>Jumlah Siswa</td>
                <td>:</td>
                <td><input type = "number" name = "jumlah"></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type = "submit" name = "proses" value = "Proses"></td>
            </tr>
        </table>
        <br>
    </form>
</center>





<?php
if(isset($_POST['proses'])){
    $jumlah = $_POST['jumlah'];
    echo "<center>";
?>
    <form action = "hasillatihanformarray.php" method = "POST">
        <table>
            <?php
            for($i = 1; $i <= $jumlah; $i++){
            ?>

            <tr>
                <td></td>
                <td></td>
                <td>Data Siswa Ke - <?php echo $i; ?></td>
            </tr>

            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type = "number" name = "nis[]"></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type = "text" name = "nama[]"></td>
            </tr>

            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type = "text" name = "kelas[]"></td>
            </tr>

            <tr>
                <td>Bahasa Indonesia</td>
                <td>:</td>
                <td><input type ="number" name = "indo[]"></td>
            </tr>

            <tr>
                <td>Bahasa Inggris</td>
                <td>:</td>
                <td><input type ="number" name = "inggris[]"></td>
            </tr>

            <tr>
                <td>Matematika</td>
                <td>:</td>
                <td><input type ="number" name = "mat[]"></td>
            </tr>

            <tr>
                <td>Produktif</td>
                <td>:</td>
                <td><input type ="number" name = "pro[]"></td>
            </tr>

            <?php
            }
            ?>

            <tr>
                <td></td>
                <td></td>
                <td><input type = "submit" name = "simpan" value = "Simpan"></td>
            </tr>
        </table>
    </form>

    <?php
    }
    ?>
</body>
</html>