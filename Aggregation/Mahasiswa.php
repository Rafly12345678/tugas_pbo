<?php

class Mahasiswa {
    public string $nama;
    public int $nim;

    public function __construct(string $nama, int $nim) {
        $this->nama= $nama;
        $this->nim= $nim;
    }

    public function belajar(): void {
        echo $this->nama."Belajar di ruang lab hpc";
    }

}

