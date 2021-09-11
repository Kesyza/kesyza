<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM GAJIAN</title>
</head>
<body>

    <center><h4>Program Pennggajian</h4>
    <h2>PT GARUDA KELINCI AKUR</h2></center>

    <form method = "POST" action = "">
    <center><table>

    <tr>
    <td>Nama Bendahara</td>
    <td>:</td>
    <td><input type = 'text' name = 'bendahara' required></td>
    </tr>

    <tr>
    <td>Nama Pekerja</td>
    <td>:</td>
    <td><input type = 'text' name = 'pekerja' required></td>
    </tr>

    <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>
    <input type = 'radio' name = 'jenis' value = 'Perempuan' required>Perempuan
    <input type = 'radio' name = 'jenis' value = 'Laki-Laki' required>Laki-Laki
    </td>
    </tr>

    <tr>
    <td>Tanggal Gaji</td>
    <td>:</td>
    <td><input type = 'date' name = 'tanggal' required></td>
    </tr>

    <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td>
    <select name = 'jabatan' required>
    <option value = '=Pilih Jabatan='>=Pilih Jabatan=</option>
    <option value = 'Direktur'>Direktur</option>
    <option value = 'Maneger'>Maneger</option>
    <option value = 'Karyawan'>Karyawan</option>
    <option value = 'OB'>OB</option>
    </select>
    </td>
    </tr>

    <tr>
    <td>Pendidikan Terakhir</td>
    <td>:</td>
    <td>
    <select name = 'pendidikan' required>
    <option value = '=Pendidikan Terakhir='>=Pendidikan Terakhir=</option>
    <option value = 'SD'>SD</option>
    <option value = 'SMP'>SMP</option>
    <option value = 'SMK'>SMK</option>
    <option value = 'S1'>S1</option>
    </select>
    </td>
    </tr>

    <tr>
    <td>Lembur</td>
    <td>:</td>
    <td><input type = 'text' name = 'lembur' required>Hari / Rp. 20000</td>
    </tr>

    <tr>
    <td>Potongan</td>
    <td>:</td>
    <td><input type = 'text' name = 'potongan' required></td>
    </tr>

    <tr>
    <td></td>
    <td></td>
    <td><input type = "submit" name ="simpan" value = "KIRIM"></td>
    </tr>

    </table><center>

<table>
<td>
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
    

    echo "<h2><center>Struk Gaji Karyawan</center></h2>";
    echo "--------------------------------------------------------------------------------------------<br>";
    echo "Tanggal : <i><b>$tanggal</b></i> <br>";
    echo "<br><h4><i>Gaji Pokok</i></h4>";
    echo "Nama Karyawan : $pekerja <br>";
    echo "Jenis Kelamnin : $jenis <br>";
    echo "Pendidikan Terakhir : $pendidikan <br>";
    if($jabatan == "Direktur"){
        $gaji = 10000000;
        echo "Jabatan : $jabatan <br>";
        echo "Gaji : Rp. $gaji";
    }
    else if($jabatan == "Maneger"){
        $gaji = 7500000;
        echo "Jabatan : $jabatan <br>";
        echo "Gaji : Rp. $gaji";
    }
    else if($jabatan == "Karyawan"){
        $gaji = 5000000;
        echo "Jabatan : $jabatan <br>";
        echo "Gaji : Rp. $gaji";
    }
    else if($jabatan == "OB"){
        $gaji = 2500000;
        echo "Jabatan : $jabatan <br>";
        echo "Gaji : Rp. $gaji";
    }
    else{
        echo "Jabatan Tidak Ada";
    }

    echo "<h4><i>Tunjangan</i></h4>";
    if($pendidikan == "SD"){
        $tunjangan = 250000;
        echo "Tunjangan Pendidikan : Rp. $tunjangan";
    }
    else if($pendidikan == "SMP"){
        $tunjangan = 500000;
        echo "Tunjangan Pendidikan : Rp. $tunjangan";
    }
    else if($pendidikan == "SMK"){
        $tunjangan = 1000000;
        echo "Tunjangan Pendidikan : Rp. $tunjangan";
    }
    else if($pendidikan == "S1"){
        $tunjangan = 1500000;
        echo "Tunjangan Pendidikan : Rp. $tunjangan";
    }
    else{
        echo "Tunjangan Tidak Ada";
    }
    $lemburr = $lembur * 20000;
    echo "<br>Vakasi Lembur : Rp. $lemburr";

    echo "<h4><i>Potongan</i></h4>";
    echo "Potongan : Rp. $potongan";
    $total = $gaji + $tunjangan + $lemburr - $potongan;
    echo "<h3><i>Total Gaji : Rp. $total</i></h3>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<br><td>Bendahara : $bendahara</td>";
    echo "</tr>";

}
?>
</td>
</form>
</center>
</table>
</body>
</html>