<?php

class Produk {
    public $judul ,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jmlHalaman= 0, $waktuMain = 0 , $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        //  Komik : Naruto | xuengxang , Bleesse (Rp . 200000) - 100 Halaman
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        if( $this->tipe == "Komik") {
            $str .= " ~ {$this->jmlHalaman} Halaman.";
        } else if ( $this->tipe == "Game" ) {
            $str .= " ~ ($this->waktuMain} Jam.";
        }
    return $str;
        }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "xuengxang", "Bleeesse", 200000, 100, 0, "Komik");
$produk2 = new Produk("Barbie", "Raelll", "Princess", 500000, 0 ,50, "Game");

// Komik : xuengxang, Bleeesse
// Game : Raelll, Princess
// Naruto | xuengxang, Bleeesse (Rp. 200000)


//  Komik : Naruto | xuengxang , Bleesse (Rp . 200000) - 100 Halaman
// Game : Raelll | Neil Druckmann, blablaa             - 50 jam


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();