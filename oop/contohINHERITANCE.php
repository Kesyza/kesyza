<?php 

// // // inheritance hanya untuk public dan protected saja, kalau untuk private tidak bisa

// // dari malas ngoding

// // class 
// class manusia{

// 	// property class manusia
// 	public $nama_saya;	
 
//  	// method pada class manusia
// 	function berinama($saya){
// 		$this->nama_saya=$saya;
// 	}
	
// }

// // class turunan dari class manusia
// // kita menghubungkan class dengan syntax extends
// class teman extends manusia{

// 	// property class teman
// 	public $nama_teman;
 
//  	// method pada class teman
// 	function berinamateman($teman){
// 		$this->nama_teman=$teman;
// 	}
// }

// // instansiasi class teman
// $malasngoding = new teman;

// // method beri nama adalah method pada class manusia, tapi kita bisa mengaksesnya karena telah menghubungkan class teman dengan class manusia
// $malasngoding->berinama(" MALAS NGODING ");
// $malasngoding->berinamateman(" Diki ");

// // menampilkan isi property
// echo "Nama Saya :" . $malasngoding->nama_saya . "<br/>";
// echo "Nama Teman Saya : " . $malasngoding->nama_teman;





// // sama kaya akang

// // class utama 
// class manusia{

//     // property

//     // method
//     public function berinama(){
//         echo "Nama Saya Kesyza Andriana Hartuti <br>";
//     }
// }

// // class turunan
// class teman extends manusia{

//     // property

//     // method
//     public function berinamateman(){
//         echo "Nama Teman Saya Fitria Amelia";
//     }
// }

// // instansiasi class teman atau object
// $twice = new teman;

// // menampilkan di browser
// $twice -> berinama();
// $twice -> berinamateman(); 





// // sama kaya akang 2

// // class utama 
// class manusia{

//     // property

//     // method
//     public function berinama(){
//         echo "Nama Saya Kesyza Andriana Hartuti <br>";
//     }
// }

// // class turunan
// class teman extends manusia{

//     // property

//     // method
//     public function berinamateman(){
//         echo $this -> berinama();
//         echo "Nama Teman Saya Fitria Amelia";
//     }
// }

// // instansiasi class teman atau object
// $twice = new teman;

// // menampilkan di browser
// $twice -> berinamateman();





// sama kaya akang 3

// class utama 
class manusia{

    // property
    public $teman = "Dina Amelia";

    // method
    public function berinama(){
        echo "Nama Saya Kesyza Andriana Hartuti <br>";
    }
}

// class turunan
class teman extends manusia{

    // property

    // method
    public function berinamateman(){
        echo "Nama Teman Saya ".$this -> teman;
    }
}

// instansiasi class teman atau object
$twice = new teman;

// menampilkan di browser
$twice -> berinamateman();
 
?>