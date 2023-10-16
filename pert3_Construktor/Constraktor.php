<?php

// Jualan Produk
// Komik
// Game

echo "  
  penjelasan construktor di bawah yaitu:
  Setiap di panggil, maka konstraktornya akan
  menerima parameter untuk mengisi properti2
  yang ada di dalam kelas.
  ada andescor karena ini merupakan magic method
  ++ Judul Default juga bisa di taruh di construktor
";

class Produk
{
  public $judul, // = "judul",
    $penulis, // = "Penulis",
    $penerbit, // = "Penerbit", 
    $harga; // = 0;

  /*
  penjelasan construktor di bawah yaitu:
  Setiap di panggil, maka konstraktornya akan
  menerima parameter untuk mengisi properti2
  yang ada di dalam kelas.
  ada andescor karena ini merupakan magic method
  ++ Judul Default juga bisa di taruh di construktor
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


  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// ini untuk mendefinisikan sebuah komik
$produk1 = new Produk("Muhammad Naruto", "Masahi Kisimoto", "Masahi Kisimoto", 30000);

//maka di bawah ini tidak di perlukan lagi.
// $produk3 -> judul = "Muhammad Naruto";
// $produk3 -> penulis = "Masahi Kisimoto";
// $produk3 -> penerbit = "Shonen Jump";
// $produk3 -> harga = 30000;
echo "<hr>";
// ini untuk mendefinisikan sebuah game
$produk2 = new Produk("Naruto Ultimate 3", "tidak tahu", "Sony Computer", 45000);
//maka di bawah ini tidak di perlukan lagi.
// $produk4 -> judul = "Naruto Ultimate 3";
// $produk4 -> penulis = "tidak tahu";
// $produk4 -> penerbit = "Sony Computer";
// $produk4 -> harga = 45000;
$produk3 = new produk("Dragon ball");

// penggabungan antara 2 method:
echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
// var_dump($produk3);