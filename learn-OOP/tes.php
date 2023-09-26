<?php


class Produk
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $jmlhal;
    public $waktuMain;


    public function __construct($judul, $penulis, $penerbit, $harga=0, $jmlhal=0, $waktuMain=0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhal = $jmlhal;
        $this->waktuMain = $waktuMain;
    }

    public function getKomik()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        return "{$this->judul} | {$this->getKomik()} (Rp. {$this->harga})";
    }
}

class Komik extends Produk
{
    public function getInfo()
    {
        $str = "Komik: {$this->getInfoProduk()} - {$this->jmlhal} halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfo()
    {
        $str = "Game: {$this->getInfoProduk()} ~ {$this->waktuMain} jam.";
        return $str;
    }
}

class Novel extends Produk
{
    public function getInfo()
    {
        $str = "Novel: {$this->getInfoProduk()} - {$this->jmlhal} halaman.";
        return $str;
    }
}

$produk1 = new Komik("Doraemon", "Ciuy", "Kimono", 30000000, 100,0);
$produk2 = new Game("Ahuhu", "Pii", "Iuuu", 300009000, 0 , 1);
$produk3 = new Novel("Afufu", "Buya Hamka", "Sii", 40404004040404040, 200,0);

echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();
echo "<br>";
echo $produk3->getInfo();

echo $produk1->judul;
?>