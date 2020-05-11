<?php

class Produk {
    public $judul = "judul",
           $penulis = "Tiarma",
           $penerbit = "Gurning",
           $harga = 0 ;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "gongsiiii";
$produk3->harga = 30000;


echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Tiarmaaaa";
$produk4->penerbit = "opaaacuuu";
$produk4->harga = 300000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

