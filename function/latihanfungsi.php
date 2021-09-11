<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA NILAI UJIAN</title>
</head>
<body>
    <center>
        <h2>NILAI UJIAN KELAS 12 RPL</h2>
        <table border = "1">
                <tr>
                    <td>Nama</td>
                    <td>Matematika</td>
                    <td>Bahasa Inggris</td>
                    <td>Bahasa Indonesia</td>
                    <td>Kejuruan</td>
                    <td>Rata - Rata</td>
                    <td>Status</td>
                    <td>Grade</td>
                </tr>
            <?php
            function data($a1, $a2, $a3, $a4, $a5){
                $total = $a2 + $a3 + $a4 + $a5;
                $r = $total / 4;
                echo "<tr>";
                echo "<td>".$a1."</td>";
                echo "<td><center>".$a2."</center></td>";
                echo "<td><center>".$a3."</center></td>";
                echo "<td><center>".$a4."</center></td>";
                echo "<td><center>".$a5."</center></td>";
                echo "<td><center>".$r."</center></td>";
                if($r >= 75 && $r <= 100){
                    echo "<td><center>LULUS</center></td>";
                }
                else{
                    echo "<td><center>TIDAK LULUS</center></td>";
                }
                if($r >= 90 && $r <= 100){
                    echo "<td><center>A</center></td>";
                    echo "</tr>";
                }
                else if($r >= 80 && $r <= 89){
                    echo "<td><center>B</center></td>";
                    echo "</tr>";
                }
                else if($r >= 75 && $r <= 79){
                    echo "<td><center>C</center></td>";
                    echo "</tr>";
                }
                else if($r >= 50 && $r <= 74){
                    echo "<td><center>D</center></td>";
                    echo "</tr>";
                }
                else if($r >= 0 && $r <= 49){
                    echo "<td><center>E</center></td>";
                    echo "</tr>";
                }
                else{
                    echo "<td><center>Tidak Ada</center></td>";
                    echo "</tr>";
                }
            }

              data("Cutegirl", 90, 80, 80, 80);
              data("Fuckgirl", 78, 80, 67, 67);
              
            ?>
        </table>
    </center>
</body>
</html>