<?php 

class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlhHalaman,
		   $waktuMain;



public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhHalaman = 0, $waktuMain = 0){
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
	$this->jmlhHalaman = $jmlhHalaman;
	$this->waktuMain = $waktuMain;

}


public function getLabel(){
		return "$this->penulis,$this->penerbit";
} 

public function getInfoLengkap() {
	// Komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
	$str = "{$this->judul}| {$this->getLabel()} (Rp. {$this->harga})";

	return $str;
}


}

class Komik extends Produk {
	public function getInfoProduk (){
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlhHalaman} Halaman.";

		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";

		return $str;
	}
}





class CetakInfoProduk {
	public function cetak( Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100, 0);

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sonny Computer", 250000, 0, 50);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

 ?>