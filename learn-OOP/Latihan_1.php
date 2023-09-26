<?php 

Class produk {
    public $judul ,
           $Penulis ,
           $developer ,
           $penerbit ,
           $jmlhal,
           $Wktmain,
           $harga ;


    public function __construct($judul,$penulis,$developer,$penerbit,$harga,$jmlhal,$wktmain) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->developer = $developer;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhal = $jmlhal;
        $this->wktmain = $Wktmain;
    }    
    public function getkomik() {
            return "$this->penulis,$this->penerbit";
        }
    public function getgame () {
            return "$this->developer,$this->penerbit";
        }

    public function getinfoprdk(){
        $str="{$this->judul} | {$this->getlabel()} (Rp.{$this->harga})";
        return $str;
        
}
}

class komik extends produk {
    public function getinfo(){
            $str = "Komik : {$this->getinfoprdk()} - {$this->jmlhal} halaman.";
        return $str;
    }
}

$produk1 = new komik ("Doraemon","ciuy",0,"kimono",30000000);
// $produk1->judul = "Avatar";
// $produk1->penulis = "Ghifar";
// $produk1->penerbit = "Dynamite corp";
// $produk1->harga = 300000;

$produk2 = new produk("ahuhu",0,"pii","iuuu",300009000);
// $produk2 ->judul = "god of war";
// $produk2 ->developer = "sizuka";
// $produk2 ->penerbit = "konami";
// $produk2 ->harga = 50000000;

$produk3 = new produk("afufu",0,"suu","sii",40404004040404040);

echo $produk1->getinfokomik();
echo "<br>";
// echo "game : " . $produk2->cihuy();
// echo "<br>";
// echo "novel : ". $afufu->cihuy();
// echo "<br>";



// object type //
class ctk {
    public function cetak(produk $prok){
        $str = "{$prok->getlabel()
        }";
    return $str;
    }
}
$ctk = new ctk();
echo $ctk->cetak($produk1);
// object type//

echo $produk1->judul;



?>