<?php

class Produk {
    public $judul ,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        //  Komik : Naruto | xuengxang , Bleesse (Rp . 200000) - 100 Halaman
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
    return $str;
        }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jmlHalaman = 0 ) {
        
        parent::__construct( $judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;

    } 

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " ~ {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $waktuMain = 0 ) {
        
        parent::__construct( $judul , $penulis , $penerbit, $harga);

        $this->waktuMain = $waktuMain;

    } 

}



class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "xuengxang", "Bleeesse", 200000, 100, 0);
$produk2 = new Game("Barbie", "Raelll", "Princess", 500000, 0 ,50);

// Komik : xuengxang, Bleeesse
// Game : Raelll, Princess
// Naruto | xuengxang, Bleeesse (Rp. 200000)


//  Komik : Naruto | xuengxang , Bleesse (Rp . 200000) - 100 Halaman
// Game : Raelll | Neil Druckmann, blablaa             - 50 jam


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();