<?php

// Jualan Produk
// Komik
// Game

echo "  
penjelasan nya kali ini adalah,
akan membuat functionalitas yang mencetak
informasi lengkap dari produk yang di miliki.
";

class Produk
{
  public $judul, // = "judul",
    $penulis, // = "Penulis",
    $penerbit, // = "Penerbit", 
    $harga; // = 0;

  /*
  penjelasan nya kali ini adalah,
  akan membuat functionalitas yang mencetak
  informasi lengkap dari produk yang di miliki.
  */

  public function __construct(
    $judul = "judul",
    $penulis = "Penulis",
    $penerbit = "Penerbit",
    $harga = 0
  ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // func untuk label penulis & penerbit
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// jadi class ini menerima sebuah inputan Object
class CetakInfoProduk
{
  public function cetak(Produk $produk) // di tulis 2x agar spesifik hanya dari produk saja input nya
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk("Muhammad Naruto", "Masahi Kisimoto", "Masahi Kisimoto", 30000);
echo "<hr>";
$produk2 = new Produk("Naruto Ultimate 3", "tidak tahu", "Sony Computer", 45000);

// penggabungan antara 2 method:
echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "<hr>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
// maka ini akan error, jika di masukan selain produk
// echo $infoProduk1->cetak("asd");