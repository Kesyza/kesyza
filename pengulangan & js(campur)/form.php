<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM BIODATA DIRI</title>
</head>
<body>
    <h2><center>Form Biodata Diri</center></h2>
    <form method = "POST" action = ""><center>
    <table>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type = 'text' name = 'nama' required></td>
    </tr>

    <tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input type = 'text' name = 'tempat' required></td>
    </tr>

    <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type = 'date' name = 'tanggal' required></td>
    </tr>

    <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>
    <input type = 'radio' name = 'jenis' value = 'Perempuan'>Perempuan
    <input type = 'radio' name = 'jenis' value = 'Laki-Laki'>Laki-Laki
    <input type = 'radio' name = 'jenis' value = 'Yang Lain'>Yang Lain
    </td>
    </tr>

    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td>
    <textarea name = 'alamat' cols = '40' rows = '5' required></textarea>
    </td>
    </tr>

    <tr>
    <td>Agama</td>
    <td>:</td>
    <td>
    <select name = 'agama' required>
    <option value = 'Islam'>Islam</option>
    <option value = 'Kristen'>Kristen</option>
    <option value = 'Budha'>Budha</option>
    <option value = 'Hindu'>Hindu</option>
    <option value = 'Katolik'>Katolik</option>
    </select>
    </td>
    </tr>

    <tr>
    <td>Pendidikan Terakhir</td>
    <td>:</td>
    <td>
    <select name = 'pendidikan' required>
    <option value = 'SD'>SD</option>
    <option value = 'SMP/MTs'>SMP/MTs</option>
    <option value = 'SMK/SMA/MA'>SMK/SMA/MA</option>
    <option value = 'Kuliah'>Kuliah</option>
    </select>
    </td>
    </tr>

    <tr>
    <td>Status</td>
    <td>:</td>
    <td>
    <select name = 'status' required>
    <option value = 'Pelajar'>Pelajar</option>
    <option value = 'Sudah Menikah'>Sudah Menikah</option>
    <option value = 'Tamat'>Tamat</option>
    <option value = 'Cerai'>Cerai</option>
    </select>
    </td>
    </tr>

    <tr>
    <td>Hobi</td>
    <td>:</td>
    <td>
    <input type = 'checkbox' name = 'hobi' value = 'Membaca'>Membaca
    <input type = 'checkbox' name = 'hobi1' value = 'Menyanyi'>Menyanyi
    <input type = 'checkbox' name = 'hobi' value = 'Menari'>Menari
    <input type = 'checkbox' name = 'hobi' value = 'Traveling'>Traveling
    </td>
    </tr>

    <tr>
    <td>Cita-Cita</td>
    <td>:</td>
    <td>
    <select name = 'cita' required>
    <option value = 'Pramugari'>Pramugari</option>
    <option value = 'Programmer'>Programmer</option>
    <option value = 'Maneger'>Maneger</option>
    <option value = 'CEO'>CEO</option>
    <option value = 'Guru'>Guru</option>
    </select>
    </td>
    </tr>

    <tr>
    <td>Kata-Kata Bijak</td>
    <td>:</td>
    <td>
    <textarea name = 'kata' cols = '40' rows = '5' required></textarea>
    </td>
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
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $jenis = $_POST['jenis'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita'];
    $kata = $_POST['kata'];

    echo "<br><br>======BIODATA DIRI====== <br>";
    echo "======================== <br>";
    echo "Nama : $nama <br>";
    echo "Tempat Lahir : $tempat <br>";
    echo "Tanggal Lahir : $tanggal <br>";
    echo "Jenis Kelamin : $jenis <br>";
    echo "Alamat : $alamat <br>";
    echo "Agama : $agama <br>";
    echo "Pendidikan Terakhir : $pendidikan <br>";
    echo "Hobi : $hobi <br>";
    echo "Cita-Cita : $cita <br>";
    echo "Kata-Kata Bijak : $kata <br>";
}
?>
</td>
</form>
</center>
</table>
</body>
</html>

