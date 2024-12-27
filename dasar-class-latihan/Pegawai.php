<?php

class Pegawai {
    public int $id;
    public string $nama;

    public function showPegawai(): void{
        echo"Berikut adalah informasi pegawai";

    }
    public function pinjamBuku(): string{
        return "Pegawai meminjam buku";

    }
    public function bayarDenda(): int{
        return 1500;
    }
}