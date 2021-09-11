<?php

$nama = array(
    1=>"Palah",
    2=>"Aziz",
    3=>"Aliyul",
    4=>"Adzura",
    5=>"Nabila",
    6=>"Cecep",
    7=>"Cindy",
    8=>"Maudy",
    9=>"Diki",
    10=>"Dinda"
);

$nilai = array(
    1=> 10,
    2=> 20,
    3=> 30,
    4=> 40,
    5=> 50,
    6=> 60,
    7=> 70,
    8=> 80,
    9=> 90,
    10=> 100
);





// //proses menggunakan array 1
// echo "NILAI PRODUKTIF LAB_1";
// echo "<br>";
// echo $nama[1] ." : " .$nilai[7];
// echo "<br>";
// echo $nama[10] ." : " .$nilai[8];
// echo "<br>";
// echo $nama[6] ." : " .$nilai[9];
// echo "<br>";
// echo $nama[8] ." : " .$nilai[10];
// echo "<br>";
// echo $nama[5] ." : " .$nilai[6];





// //proses menggunakan foreach tanpa key
// foreach ($nama as $data){
//     echo $data;
//     echo "<br>";
// }





//proses menggunakan foreach
foreach ($nama as $key => $isi){ 
    echo $key.". " .$isi;
    echo "<br>";
}

?>