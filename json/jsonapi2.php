<?php

$url = "https://api.kawalcorona.com/indonesia/provinsi/";

// persiapkan curl/init curl
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, $url);

// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$dataCovid = curl_exec($ch);

// tutup curl
curl_close($ch);

// menampilkan hasil curl
// echo $output;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA COVID DI INDONESIA</title>
</head>
<body>
<center>
    <h1><i>Data Covid-19</i></h1>
    <h4><i>Di Indonesia Berdasarkan Provinsi</i></h4>
    <table border="1">

        <tr>
            <th>Kode Provinsi</th>
            <th>Nama Provinsi</th>
            <th>Jumlah Positif</th>
            <th>Jumlah Sembuh</th>
            <th>Jumlah Meninggal</th>
        </tr>

        <?php
        $data = json_decode($dataCovid);
            foreach ($data as $covid) {
        ?>

        <tr>
            <td><center><?php echo $covid->attributes->Kode_Provi; ?></center></td>
            <td><?php echo $covid->attributes->Provinsi; ?></td>
            <td><?php echo $covid->attributes->Kasus_Posi; ?></td>
            <td><?php echo $covid->attributes->Kasus_Semb; ?></td>
            <td><?php echo $covid->attributes->Kasus_Meni; ?></td>
        </tr>

        <?php
        }
        ?>

    </table>
</center>
</body>
</html>