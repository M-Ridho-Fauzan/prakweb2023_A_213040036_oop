<?php

// Jualan Produk
// Komik
// Game

echo "  
penjelasan nya kali ini adalah,
akan menampilkan dua produk yang tabel nya sama 
yaitu antara komik dan game tetapi akan ada 
sedikit perbedaan atau di tambahkan perbedaan antara
kedua nya. 
contoh: 
game ++ Flaying time
komik ++ Halaman
atau
Muhammad Naruto | Masahi Kisimoto, Masahi Kisimoto (Rp. 30000) - 100 Halaman.
Naruto Ultimate 3 | tidak tahu, Sony Computer (Rp. 45000) ~ 50 jam.
";

class Produk
{
  public $judul, // = "judul",
    $penulis, // = "Penulis",
    $penerbit, // = "Penerbit", 
    $harga, // = 0;  
    $jmlHalaman,
    $waktuMain;
  /*
  penjelasan nya kali ini adalah,
  akan menampilkan dua produk yang tabel nya sama 
  yaitu antara komik dan game tetapi akan ada 
  sedikit perbedaan atau di tambahkan perbedaan antara
  kedua nya. 
  contoh: 
  game ++ Flaying time
  komik ++ Halaman
  atau
  Naruto | Masahi Kisimoto, Masahi Kisimoto (Rp. 30000) - 100 Halaman.
  Naruto Ultimate 3 | tidak tahu, Sony Computer (Rp. 45000) ~ 50 jam.
  */

  public function __construct(
    $judul = "judul",
    $penulis = "Penulis",
    $penerbit = "Penerbit",
    $harga = 0,
    $jmlHalaman = 0,
    $waktuMain = 0
  ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  // func untuk label penulis & penerbit
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    // Naruto | Masahi Kisimoto, Masahi Kisimoto (Rp. 30000) - 100 Halaman.
    // Naruto Ultimate 3 | tidak tahu, Sony Computer (Rp. 45000) ~ 50 jam.
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}

class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})
     - {$this->jmlHalaman} Halaman";
    return $str;
  }
}

class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})
     ~ {$this->waktuMain} Jam";
    return $str;
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

$produk1 = new Komik("Naruto", "Masahi Kisimoto", "Masahi Kisimoto", 30000, 100, 0);
echo "<hr>";
$produk2 = new Game("Naruto Ultimate 3", "tidak tahu", "Sony Computer", 45000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
