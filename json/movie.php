<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie</title>
    
</head>
<body>
    <table>
    <?php $file ="latihan2.json";?>
    <?php $anggota = file_get_contents($file);?>
    <?php $data = json_decode($anggota);?>
    <center>Data Film</center>
    <center><h2><?php echo $data->Title . "<br>";?></h2></center> 
    <center><img src="https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg" width="200" height="300"></center> 
    <tr>
    <p style="text-align:center;"><?php echo  $data->Plot . "<br>";?></p>
    </tr> 
    <tr>
      <td> <b> Tahun Rilis </b></td> 
      <td>:</td>
      <td><?php echo $data->Year . "<br>";?></td>
    </tr>
    <tr>
    <td> <b> Tanggal Rilis </b></td>
    <td>:</td> 
      <td><?php echo $data->Released . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Durasi Film </b></td>
      <td>:</td>
      <td><?php echo $data->Runtime . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Genre </b></td>
      <td>:</td>
      <td><?php echo "". implode(",  ", $data->Genre) . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Director </b></td>
      <td>:</td>
      <td><?php echo  $data->Director . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Penulis </b></td>
      <td></td>
      <td><?php echo "<li>". implode("<li>", $data->Writers) . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Pemeran </b></td>
      <td></td>
      <td><?php echo "<li>". implode("<li>", $data->Actors) . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Bahasa </b></td>
      <td>:</td>
      <td><?php echo  $data->Language . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Negara </b></td>
      <td>:</td>
      <td><?php echo  $data->Country . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Penghargaan </b></td>
      <td>:</td>
      <td><?php echo  $data->Awards . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Nilai </b></td>
      <td>:</td>
      <td><?php echo  $data->imdbRating . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Vote </b></td>
      <td>:</td>
      <td><?php echo  $data->imdbVotes . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> imdbID </b></td>
      <td>:</td>
      <td>    <?php echo  $data->imdbID . "<br>";?></td>
    </tr>
    </table>
</body>
</html>