<?php

$nilai = 90;

if($nilai >= 80 && $nilai <= 100){
    echo "Grade A";
}

else if($nilai >= 50 && $nilai <= 79){
    echo "Grade B";
}

else if($nilai >= 0 && $nilai <= 59){
    echo "Grade C";
}

else{
    echo "Nilai Kacau !";
}
?>