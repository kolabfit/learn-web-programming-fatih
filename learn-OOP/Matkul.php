<?php

class MatKul {
    private $kode;
    private $nama;
    private $sks;

    public function __construct($kode, $nama, $sks) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->sks = $sks;
    }

    public function getKode() {
        return $this->kode;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getSks() {
        return $this->sks;
    }
}

class DaftarMataKuliah {
    private $mataKuliah = [];

    public function tambahMataKuliah(MatKul $mataKuliah) {
        $this->mataKuliah[] = $mataKuliah;
    }

    public function hapusMataKuliah($kode) {
        foreach ($this->mataKuliah as $key => $mataKuliah) {
            if ($mataKuliah->getKode() == $kode) {
                unset($this->mataKuliah[$key]);
            }
        }
    }

    public function tampilkanDaftarMataKuliah() {
        echo "Daftar Mata Kuliah:";
        echo "<br>";
        foreach ($this->mataKuliah as $mataKuliah) {
            echo "Kode: " . $mataKuliah->getKode() . "\n";
            echo "Nama: " . $mataKuliah->getNama() . "\n";
            echo "SKS: " . $mataKuliah->getSks() . "\n";
            echo "<br>";
        }
    }
}

// Contoh instansiasi
$daftarMatKul = new DaftarMataKuliah();

// Menambahkan beberapa mata kuliah ke dalam daftar
$mataKuliah1 = new MatKul("M001", "Matematika", 3);
$mataKuliah2 = new MatKul("F001", "Fisika", 4);
$mataKuliah3 = new MatKul("K005", "Kimia", 6);
$mataKuliah4 = new MatKul("B007", "Biologi", 8);

$daftarMatKul->tambahMataKuliah($mataKuliah1);
$daftarMatKul->tambahMataKuliah($mataKuliah2);
$daftarMatKul->tambahMataKuliah($mataKuliah3);
$daftarMatKul->tambahMataKuliah($mataKuliah4);

// Menampilkan daftar mata kuliah
$daftarMatKul->tampilkanDaftarMataKuliah();

// Menghapus salah satu mata kuliah
$daftarMatKul->hapusMataKuliah("M001");
$daftarMatKul->hapusMataKuliah("B007");

// Menampilkan daftar mata kuliah setelah menghapus
$daftarMatKul->tampilkanDaftarMataKuliah();

?>
