<?php

class KendaraanRodaDua{

    public string $nama;
    public string $merk;

    public function __construct(string $nama, string $merk) {
        $this->nama = $nama;
        $this->merk = $merk;
    }

    public function Darat(): void{
        echo "Kendaraan membutuhkan oli samping";
    }
}