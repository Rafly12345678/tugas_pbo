<?php

require_once "Kelas.php";

$tid = new Kelas();
$mahasiswa = new Mahasiswa('Rafli', 2303099);
echo $mahasiswa->nama;
echo "\n";
echo $mahasiswa->nim;

$tid->addMahasiswa($mahasiswa);
$tid->mahasiswaDoSemua();

foreach($tid->daftarMahasiswa as $s) {
    echo $s->nama;
    echo "\n";
    echo $s->nim;
    echo "\n";
}