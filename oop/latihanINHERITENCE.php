<?php

//class utama
class bangundatar{
    
    // // property
    // public $luaspersegi;
    // public $kellpersegi;
    // public $luaspersegipanjang;
    // public $kellpersegipanjang;
    // public $luassegitiga;
    // public $kellsegitiga;
    // public $luaslingkaran;
    // public $kelllingkaran;

    // method
    
}

// class turunan
class persegi extends bangundatar{ 

    // property

    // method
    public function luaspersegi($sisi){
        echo "MENGHITUNG LUAS DAN KELILING PERSEGI<br>";
        echo "Sisi : ".$sisi." cm";
        echo "<br>";
        $this->luaspersegi=$sisi*$sisi;
        echo "LUAS : ".$this->luaspersegi." cm2";
        echo "<br>";
        $this->kellpersegi=4*$sisi;
        echo "KELILING : ".$this->kellpersegi." cm";
        echo "<br><hr>";
        
}
}

// class turunan
class persegipanjang extends bangundatar{ 

    // property

    // method
    public function luaspersegipanjang($panjang,$lebar){
        echo "MENGHITUNG LUAS DAN KELILING PERSEGI PANJANG<br>";
        echo "Panjang : ".$panjang." cm";
        echo "<br>";
        echo "Lebar : ".$lebar." cm";
        echo "<br>";
        $this->luaspersegipanjang=$panjang*$lebar;
        echo "LUAS : ".$this->luaspersegipanjang." cm2";
        echo "<br>";
        $this->kellpersegipanjang=2 * ($panjang+$lebar);
        echo "KELILING : ".$this->kellpersegipanjang." cm";
        echo "<br><hr>";
        
}
}

// class turunan
class segitiga extends bangundatar{ 

    // property

    // method
    public function luassegitiga($alas,$tinggi,$b,$c){
        echo "MENGHITUNG LUAS DAN KELILING SEGITIGA<br>";
        echo "Alas : ".$alas." cm";
        echo "<br>";
        echo "Tinggi : ".$tinggi." cm";
        echo "<br>";
        echo "B : ".$b." cm";
        echo "<br>";
        echo "C : ".$c." cm";
        echo "<br>";
        $this->luassegitiga=$alas*$tinggi;
        echo "LUAS : ".$this->luassegitiga." cm2";
        echo "<br>"; 
        $this->kellsegitiga=$alas+$b+$c;
        echo "KELILING : ".$this->kellsegitiga." cm";
        echo "<br><hr>"; 
    }
}

// class turunan
class lingkaran extends bangundatar{ 

    // property

    // method
    public function luaslingkaran($phi,$jari){
        echo "MENGHITUNG LUAS DAN KELILING LINGKARAN<br>";
        echo  "phi : $phi cm<br>";
        echo  "jari jari : $jari cm<br>";
        $this->luaslingkaran=$phi*$jari*$jari;
        echo  "LUAS : $this->luaslingkaran cm2<br>";
        $this->kelllingkaran=2*$phi*$jari;
        echo  "KELILING : $this->kelllingkaran cm<br>";
    }
}

//instansiasi class turunan

$luas= new persegi;
$luas1= new persegipanjang;
$luas2=new segitiga;
$luas3=new lingkaran;

// menampilkan di browser
$luas->luaspersegi(2);
$luas1->luaspersegipanjang(2,4);
$luas2->luassegitiga(2,6,3,2);
$luas3->luaslingkaran(3.14,4);