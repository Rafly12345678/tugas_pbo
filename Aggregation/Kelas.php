<?php 

require_once "Mahasiswa.php";

class Kelas {
    public $daftarMahasiswa = [];

    public function addMahasiswa(Mahasiswa $mahasiswa): void {
        $this->daftarMahasiswa[] = $mahasiswa;

    }

    public function mahasiswaDoSemua(): void {
        foreach($this->daftarMahasiswa as $mahasiswa){
            $mahasiswa->nama='';
            $mahasiswa->nim= 0;
        }
    }

}