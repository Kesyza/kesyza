<?php

$data = [
    ['jenis' => "Olahraga", 'cabang' => [
        ['lomba' => "Sepak Bola", 'artikel' => [
            ['judul' => "Sepak Bola Nasional"],
            ['judul' => "Sepak Bola Internasional"]
                  ]],
        ['lomba' => "Bulu Tangkis", 'artikel' => [
            ['judul' => "Bulu Tangkis Nasional"],
            ['judul' => "Bulu Tangkis Internasional"]
                  ]], 
        ['lomba' => "Atletik", 'artikel' => [
            ['judul' => "Atletik Bola Nasional"],
            ['judul' => "Atletik Internasional"]
                  ]]
              ]],

    ['jenis' => "Ekonomi", 'cabang' => [
        ['lomba' => "Saham", 'artikel' => [
            ['judul' => "Jual Beli Saham"],
            ['judul' => "Investasi Saham Di Perusahaan Global"]
                  ]],
        ['lomba' => "Bank", 'artikel' => [
            ['judul' => "BRI Bank-Nya Rakyat Indonesia"],
            ['judul' => "BCA Bank-Nya Rakyat Indonesia"]
                  ]]
              ]],

    ['jenis' => "Politik", 'cabang' => [
        ['lomba' => "Hukum", 'artikel' => [
            ['judul' => "Hukum Di Indonesia Berdasarkan UUD NRI Tahun 1945"],
            ['judul' => "Peraturan Hukum Di Tetapkan Oleh Pemerintah"]
                  ]],
        ['lomba' => "Pemerintahan", 'artikel' => [
            ['judul' => "Pemilihan Presiden Dan Wakil Presiden"],
            ['judul' => "Pemilihan Para Menteri Dan Jajarannya"]
                  ]]
              ]]
        ];

echo "Artikel : Detik.com";
echo "<br>";
echo "Jenis Berita : ";
//menampilkan si jenis olahraga
foreach($data as $data1){
    echo "<ul>";
    echo "<li>" .$data1['jenis'] ."</li>";

    //menampilkan si cabang olahraga
    foreach($data1['cabang'] as $data2){
        echo "<ul>";
        echo "<li>" .$data2['lomba'] ."</li>";

        //menampilkan si artikel olahraga
        foreach($data2['artikel'] as $data3){
            echo "<ul>";
            echo "<li>" .$data3['judul'] ."</li>";
            echo "</ul>";
        }
        echo "</ul>";
    }
    echo "</ul>";
}
?>