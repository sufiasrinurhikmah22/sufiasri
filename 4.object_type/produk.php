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

class CetakInfoProduk {
	public function cetak( Produk $produk)
		{
		$str ="{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
	}
}



$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sonny Computer", 25000);

$produk3 = new Produk("Dragon Ball");



echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);

 ?>