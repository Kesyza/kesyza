<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE</title>
</head>
<body>
    <?php $file ="latihan2.json";?>
    <?php $movie = file_get_contents($file);?>
    <?php $d = json_decode($movie);?>
    <center>Data Film</center>
    <center><b>The Gradate</b></center>
    <center><img src = "https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg" width="600" height="700"></center>
    <table>

    <tr>
    <td></td>
    <td></td>
    <td><?php echo  $d->Plot;?></td>
    </tr><br>

    <tr>
      <td> <b> Tahun Rilis </b></td> 
      <td>:</td>
      <td><?php echo $d->Year . "<br>";?></td>
    </tr>
    <tr>
    <td> <b> Tanggal Rilis </b></td>
    <td>:</td> 
      <td><?php echo $d->Released . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Durasi Film </b></td>
      <td>:</td>
      <td><?php echo $d->Runtime . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Genre </b></td>
      <td>:</td>
      <td><?php echo "". implode(",  ", $d->Genre) . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Director </b></td>
      <td>:</td>
      <td><?php echo  $d->Director . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Penulis </b></td>
      <td></td>
      <td><?php echo "<li>". implode("<li>", $d->Writers) . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Pemeran </b></td>
      <td></td>
      <td><?php echo "<li>". implode("<li>", $d->Actors) . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Bahasa </b></td>
      <td>:</td>
      <td><?php echo  $d->Language . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Negara </b></td>
      <td>:</td>
      <td><?php echo  $d->Country . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Penghargaan </b></td>
      <td>:</td>
      <td><?php echo  $d->Awards . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Nilai </b></td>
      <td>:</td>
      <td><?php echo  $d->imdbRating . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Vote </b></td>
      <td>:</td>
      <td><?php echo  $d->imdbVotes . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> imdbID </b></td>
      <td>:</td>
      <td>    <?php echo  $d->imdbID . "<br>";?></td>
    </tr>
    </table>
</body>
</html>