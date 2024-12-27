<?php

class Produk {
    public $nama;
    public $harga;
    public $deskripsi;
    public $baterai;

    public function __construct($nama, $harga, $deskripsi, $baterai) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->deskripsi = $deskripsi;
        $this->baterai = $baterai;
    }

    public function tampilkanInfo(): void {
        echo $this->nama . "\n";
        echo "$" . $this->harga . "\n";
        echo $this->deskripsi . "\n";
        echo $this->baterai . "\n";
        echo "\n";
    }
}

// Membuat objek produk
$produk1 = new Produk("Samsung Galaxy J2 Prime", 126, "RAM 2Gb, Storage 16GB, Warna Black Pink", "4000 mAh");
$produk2 = new Produk("iPhone 5s", 75, "RAM 2Gb, Storage 16GB, Warna Solid Black", "2500 mAh");
$produk3 = new Produk("Oppo A5", 100, "RAM 4Gb, Storage 8GB, Warna Metallic Purple", "4500 mAh");