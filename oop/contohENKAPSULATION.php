<?php
 
// // // contoh enkapsulation (public)
// // class
// class manusia{

//     // property
//     public $nama = "Jimin";

//     // method
//     public function tampilan_nama(){
//         echo "Nama Saya ".$this -> nama;
//     }

//     public function biodata(){
//         echo $this -> tampilan_nama();
//     }
// }

// // object
// $manusia = new manusia();

// // menampilkan di browser
// echo $manusia -> biodata();

// // catatan "$this" untuk memanggil method/property lain yang ada di dalam class INGET JANGAN LUPA!!!





// // // contoh enkapsulation (private)
// // class
// class manusia{

//     // property
//     private $nama = "Red Carry";

//     // method 
//     private function tampilan_nama(){
//         return "Hallo, Nama Saya ".$this -> nama;
//     }
//     public function output(){
//         echo $this -> tampilan_nama();
//     }
// }

// // object
// $manusia = new manusia();

// // menampilkan di browser
// echo $manusia -> output();





// // contoh enkalupsulation (protected)
// class
class manusia{

    // // property 
    // protected $nama = "Anna Scarlett";

    // method 
    protected function nama(){
        return "Hallo, Nama Saya Anna Scarlett J";
    }

    public function keluarkan(){
        return $this -> nama();
    }

    // public function tampilan_nama(){
    //     return $this -> nama;
    // }
}

// object 
$manusia = new manusia();

// menampilkan di browser
echo $manusia -> keluarkan();

?>