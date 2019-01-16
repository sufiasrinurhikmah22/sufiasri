<?php 

class Produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
}


	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	} 

	

}

// $produk1 = new Produk();
// $Produk1->judul = "Naruto";
// var_dump($produk1);

// $Produk2 = new Produk();
// $Produk2->judul = "Uncharted";
// $Produk2->tambahProperty = "sufiasri";
// var_dump($produk2);

$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sonny Computer", 25000);

$produk3 = new Produk("Dragon Ball");



echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);

 ?>