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
    $waktuMain,
    $tipe;
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
    $waktuMain = 0,
    $tipe
  ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  // func untuk label penulis & penerbit
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap()
  {
    // Naruto | Masahi Kisimoto, Masahi Kisimoto (Rp. 30000) - 100 Halaman.
    // Naruto Ultimate 3 | tidak tahu, Sony Computer (Rp. 45000) ~ 50 jam.
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    if ($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman";
    } else if ($this->tipe == "Game") {
      $str .= " ~ {$this->waktuMain} Jam";
    }
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

$produk1 = new Produk("Naruto", "Masahi Kisimoto", "Masahi Kisimoto", 30000, 100, 0, "Komik");
echo "<hr>";
$produk2 = new Produk("Naruto Ultimate 3", "tidak tahu", "Sony Computer", 45000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
