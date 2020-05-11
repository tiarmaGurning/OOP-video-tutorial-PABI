<?php

class Produk {
    public $judul = "judul",
           $penulis = "Tiarma",
           $penerbit = "Gurning",
           $harga = 0 ;

    public function __construct($judul, $penulis, $penerbit, $harga ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
}

$produk1 = new Produk("Naruto", "xuengxang", "Bleeesse", 200000);
$produk2 = new Produk("Barbie", "Raelll", "Princess", 500000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

