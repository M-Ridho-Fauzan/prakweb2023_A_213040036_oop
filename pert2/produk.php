<?php 

// Jualan Produk
// Komik
// Game

class Produk {
  public $judul = "judul",// ini jadi nilai default
         $penulis,
         $penerbit, 
         $harga;

  // Method Adalah funtion yang ada di dalam kelas

  // public function sayHello(){
  //   return "Hello World";
  // }

  public function getLabel(){
    return "$this->penulis, $this->penerbit";
  }

}

// $produk1 = new Produk();
// $produk1 -> judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 -> judul = "one piece";
// $produk2 -> tambahProperty = "kontol";
// var_dump($produk2);


$produk3 = new Produk();
$produk3 -> judul = "Muhammad Naruto";
$produk3 -> penulis = "Masahi Kisimoto";
$produk3 -> penerbit = "Shonen Jump";
$produk3 -> harga = 30000;
// var_dump($produk3);

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
// echo $produk3->sayHello();
echo $produk3->getLabel();

echo"<hr>";

$produk4 = new Produk();
$produk4 -> judul = "Naruto Ultimate 3";
$produk4 -> penulis = "tidak tahu";
$produk4 -> penerbit = "Sony Computer";
$produk4 -> harga = 45000;

// penggabungan antara 2 method:
echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();