<?php

class Matkul {
    private $Kode;
    private $Nama;
    private $Sks;

    public function __construct($Kode, $Nama, $Sks) {
        $this->Kode = $Kode;
        $this->Nama = $Nama;
        $this->Sks = $Sks;
    }

    public function getKode() {
        return $this->Kode;
    }

    public function getMatkulInfo() {
        return "{$this->Nama} ({$this->Sks} SKS)";
    }
}

class DaftarMatKul {
    private $matKul = [];

    public function TambahMatkul(Matkul $matKul) {
        $this->matKul[] = $matKul;
    }

    public function HapusMatkul($Kode) {
        foreach ($this->matKul as $key => $matkul) {
            if ($matkul->getKode() == $Kode) {
                unset($this->matKul[$key]);
            }
        }
    }

    public function TampilMatkul() {
        echo "Daftar Mata Kuliah:";
        echo "<br>";
        foreach ($this->matKul as $matkul) {
            echo "Kode: " . $matkul->getKode() . "<br>";
            echo "Nama: " . $matkul->getMatkulInfo() . "<br>";
        }
    }   
}

$DaftarMatakuliah = [
    ["kode" => "M001", "Nama" => "Matematika", "SKS" => "3"],
    ["kode" => "B001", "Nama" => "Biologi", "SKS" => "3"],
    ["kode" => "F001", "Nama" => "Fisika", "SKS" => "3"],
    ["kode"=> "A001", "Nama" => "Alpro", "SKS"=>"4"],
];

$daftar = new DaftarMatKul();

foreach ($DaftarMatakuliah as $daftarmatkul) {
    $matkul = new Matkul($daftarmatkul["kode"], $daftarmatkul["Nama"], $daftarmatkul["SKS"]);
    $daftar->TambahMatkul($matkul);
}

$daftar->HapusMatkul("B001");
$daftar->TampilMatkul();

?>