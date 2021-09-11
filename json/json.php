<?php

// //array[]
// $dataJson = "[5, 3, 4, 2, 1]";

// $data = json_decode($dataJson);

// echo implode(" - ", $data);





//objek php{}
$json = '{
    "nama": "Nurul Huda",
    "domisili": "Surabaya",
    "usia": 23,
    "wni": true,
    "hobi": [
      "Berenang", "Berlari", "Bertamasya"
    ]
  }';

  $mahasiswa = json_decode($json);

echo "Nama: {$mahasiswa->nama} <br>";
echo "Domisili: {$mahasiswa->domisili} <br>";
echo "Hobi: " . implode(", ", $mahasiswa->hobi);





// $mahasiswa = [
//   'nama' => 'Nurul Huda',
//   'domisili' => 'Surabaya'
// ];

// echo json_encode($mahasiswa);





// $nilaiUjian = [70, 80, 50, 90];

// echo json_encode($nilaiUjian);






// $listMahasiswaJSON = '[
//     { "nama": "Kesyza Andriana Hartuti" },
//     { "nama": "Fitria Amelia" },
//     { "nama": "Dina Amelia" },
//     { "nama": "Silvi Lestari" }
//   ]';
  
//   //dikonversikan ke json
//   $list = json_decode($listMahasiswaJSON);
  
//   //menampilkan datanya
//   foreach ($list as $key => $mahasiswa) {
//     echo "Nama ke - {$key} : {$mahasiswa->nama} <br>";
//   }



  

//catatan penting yang perlu di ingat 
//1. json_encode - mengubah array ke json(murni array tampilannya dalam bentuk json).
//2. json_decode - mengubah json ke array(campuran array sama objek artinya json tampilannya dalam bentuk array).

?>

