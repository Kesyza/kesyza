<?php
if(isset($_POST['simpan'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $indo = $_POST['indo'];
    $inggris = $_POST['inggris'];
    $mat = $_POST['mat'];
    $pro = $_POST['pro'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASIL FORM ARRAY</title>
</head>
<body>
    <center>
        <h2>Data Nilai Ujian Siswa Kelas XII Rpl</h2>
    <table border = "1">
        <tr>
            <td>NIS</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Bahasa Indonesia</td>
            <td>Bahasa Inggris</td>
            <td>Matematika</td>
            <td>Produktif</td>
            <td>Total Nilai</td>
            <td>Rata-Rata</td>
            <td>Grade</td>
            <td>Status</td>
        </tr>

        <?php 
        for($i = 0; $i < count($nis); $i++){
        ?>

        <tr>
            <td><?php echo $nis[$i]; ?></td>
            <td><?php echo $nama[$i]; ?></td>
            <td><?php echo $kelas[$i]; ?></td>
            <td><?php echo $indo[$i]; ?></td>
            <td><?php echo $inggris[$i]; ?></td>
            <td><?php echo $mat[$i]; ?></td>
            <td><?php echo $pro[$i]; ?></td>
            <?php $total = $indo[$i] + $inggris[$i] + $mat[$i] + $pro[$i]; ?>
            <td><?php echo $total; ?></td>
            <?php $rata = $total / 4;
            if($rata >= 90 && $rata <= 100){
                $grade = "A";
            }
            else if($rata >= 80 && $rata <= 89){
                $grade = "B";
            }
            else if($rata >= 75 && $rata <= 79){
                $grade = "C";
            }
            else if($rata >= 50 && $rata <= 74){
                $grade = "D";
            }
            else if($rata >= 0 && $rata <= 49){
                $grade = "E";
            }
            else{
                $grade = "Grade Tidak Ada";
            }
            
            if($rata >= 75 && $rata <= 100){
                $status = "Lulus";
            }
            else{
                $status = "Tidak Lulus";
            } ?>
            <td><?php echo $rata; ?></td>
            <td><?php echo $grade;  ?></td>
            <td><?php echo $status; } ?></td>

        </tr>
    </table>
    </center>
</body>
</html>